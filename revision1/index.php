<?php

$link = isset($_GET['link']) ? $_GET['link'] : '';

function showList($folder) { //shows list of files in folder
    $files = array_diff(scandir($folder), ['.', '..']); //removes . and ..
    
    if (empty($files)) { //if no files are found
        echo "<p>No files found.</p>";
        return;
    }

    echo "<ul>"; //if files are there
    foreach ($files as $file) {
        echo "<li>$file</li>";
    }
    echo "</ul>";
}

function searchFiles($folder, $searchTerm) { //looks for files that match given term
    $files = array_diff(scandir($folder), ['.', '..']);
    $results = [];

    foreach ($files as $file) {
        if (stripos($file, $searchTerm) !== false) {
            $results[] = $file;
        }
    }

    return $results;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revision</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="exercise-repetition-assignment-01.php?link=course">Course</a></li>
        <li><a href="exercise-repetition-assignment-01.php?link=examples">Examples</a></li>
        <li><a href="exercise-repetition-assignment-01.php?link=assignments">Assignments</a></li>
    </ul>
</nav>

<form method="GET">
    <input type="text" name="search" placeholder="Search files..." required>
    <button type="submit">Search</button>
</form>

<div>
    <?php //decides what content to show
    if (!empty($_GET['search'])) {
        $searchTerm = $_GET['search'];
        $exampleResults = searchFiles('examples', $searchTerm);
        $assignmentResults = searchFiles('assignments', $searchTerm);

        echo "<h2>Search results for '$searchTerm'</h2>";

        if (empty($exampleResults) && empty($assignmentResults)) {
            echo "<p>No matching files found.</p>";
        } else {
            if (!empty($exampleResults)) {
                echo "<h3>Examples</h3>";
                echo "<ul>";
                foreach ($exampleResults as $file) {
                    echo "<li>$file</li>";
                }
                echo "</ul>";
            }

            if (!empty($assignmentResults)) {
                echo "<h3>Assignments</h3>";
                echo "<ul>";
                foreach ($assignmentResults as $file) {
                    echo "<li>$file</li>";
                }
                echo "</ul>";
            }
        }
    } else {
        switch ($link) {
            case 'course': //shows course pfg
                echo "<h2>Course Material</h2>";
                echo '<iframe src="course.pdf" width="1000px" height="750px"></iframe>';
                break;
            case 'examples': //shows example files
                echo "<h2>Examples</h2>";
                showList('examples');
                break;
            case 'assignments':
                echo "<h2>Assignments</h2>";
                showList('assignments');
                break;
            default:
                echo "<h2>Hello!</h2>";
                echo "<p>Select which section you want to open.</p>";
        }
    }
    ?>
</div>

</body>
</html>

