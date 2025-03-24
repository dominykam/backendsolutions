<?php
session_start();

try {
    // Create SQLite DB connection
    $db = createSqliteDbConnection('back-end-users-exercise.db');
    
    $createTableQuery = "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL,
        password TEXT NOT NULL
    )";
    $db->exec($createTableQuery);
    
    // Fetch all users
    $usersQuery = "SELECT * FROM users";
    $users = fetchResultForQuery($db, $usersQuery);

    // Delete user functionality
    if (isset($_GET['delete'])) {
        $userIdToDelete = $_GET['delete'];
        
        // Delete the user from the database
        $deleteQuery = "DELETE FROM users WHERE id = :id";
        $params = [':id' => $userIdToDelete];
        
        // Execute query
        $stmt = $db->prepare($deleteQuery);
        $stmt->execute($params);

        // success message
        $_SESSION['success_message'] = "User deleted successfully!";
        header("Location: index.php");  // go back to index.php after deleting
        exit();
    }
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

function createSqliteDbConnection($dbFilePath)
{
    $db = new PDO("sqlite:" . $dbFilePath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

function fetchResultForQuery($db, $query, $params = false)
{
    $preparedStatement = $db->prepare($query);
    if ($params) {
        foreach ($params as $placeholder => $value) {
            $preparedStatement->bindParam($placeholder, $value);
        }
    }
    $preparedStatement->execute();
    return $preparedStatement->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>
</head>
<body>

    <h1>User Dashboard</h1>

    <!-- Success message -->
    <?php if (isset($_SESSION['success_message'])): ?>
        <p style="color: green;"><?php echo $_SESSION['success_message']; ?></p>
        <?php unset($_SESSION['success_message']); ?>
    <?php endif; ?>

    <h2>All Users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><a href="index.php?delete=<?= $user['id'] ?>" style="color: red;">[x] Delete</a></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>
</html>

