<?php include 'get.php'; ?>

<?php

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] >= 0 && $_GET['id'] < count($articles)) {

    $article = $articles[$_GET['id']];
 
    $pageTitle = $article['title'];
} else {
    $pageTitle = "Mini Newspaper";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <style>
        body { 
            text-align: center; 
        }

        h1 { 
            margin-top: 30px; 
            font-size: 2rem;
            color: #333;
        }

        .articles {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .article {
            flex: 1;
            max-width: 300px;
            margin: 20px;
            padding: 15px;
            background: white;
            box-shadow: 3px 3px 10px #aaa;
            border-radius: 5px;
        }

        .full-article {
            width: 80%; 
            margin: 30px auto;
            padding: 20px;
            background: white;

        }

        img { 
            width: 100%; 
            max-height: 200px; 
            object-fit: cover; 
            border-radius: 8px;
        }

        h2 { 
            color: #333;
        }

        p {
            color: #555;
            line-height: 1.6;
        }


    </style>
</head>
<body>

<h1><?= htmlspecialchars($pageTitle) ?></h1>

<?php if (isset($article)): ?>
    <!--shows full article -->
    <div class="full-article">
        <h2><?= htmlspecialchars($article['title']) ?></h2>
        <p><strong>Date:</strong> <?= htmlspecialchars($article['date']) ?></p>
        <p><?= nl2br(htmlspecialchars($article['text'])) ?></p> <!--full content -->
        <img src="<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['title']) ?>">
    </div>
<?php else: ?>
    <!--article overview -->
    <div class="articles">
        <?php foreach ($articles as $position => $article): ?>
            <div class="article">
                <h2><?= htmlspecialchars($article['title']) ?></h2>
                <p><strong>Date:</strong> <?= htmlspecialchars($article['date']) ?></p>
                <p><?= htmlspecialchars(substr($article['text'], 0, 50)) ?>...</p> <!--shows first 50 char--> 
                <img src="<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['title']) ?>">
                <p><a class="read-more-link" href="index.php?id=<?= $position ?>">Read more</a></p>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

</body>
</html>


