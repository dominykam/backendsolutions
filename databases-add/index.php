<?php

// Start the session to show messages
session_start();

try {
    // Create SQLite DB connection
    $db = createSqliteDbConnection('back-end-users-exercise.db');
    
    // Create the 'users' table if it doesn't exist
    $createTableQuery = "CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL,
        password TEXT NOT NULL
    )";
    fetchResultForQuery($db, $createTableQuery);

    // Handle form submission and add user to the database
    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $_SESSION['error_message'] = "Username and password are required!";
        } else {
            // Adding user to the userbase (storing password as plain text for now)
            $addUserQuery = "INSERT INTO users (username, password) VALUES (:username, :password)";
            $params = [
                ':username' => $username,
                ':password' => $password // Storing plain text password (not hashed)
            ];
            fetchResultForQuery($db, $addUserQuery, $params);

            // Send success message
            $_SESSION['success_message'] = "User registered successfully!";
        }
    }

    // Show all users
    $usersQuery = "SELECT * FROM users";
    $users = fetchResultForQuery($db, $usersQuery);

    // Close the SQLite DB connection
    closeSqliteDbConnection($db);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Function to create SQLite DB connection
function createSqliteDbConnection($dbFilePath)
{
    $db = new PDO("sqlite:" . $dbFilePath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

// Function to fetch results from a query
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

// Function to close SQLite DB connection
function closeSqliteDbConnection($db)
{
    $db = null;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
</head>
<body>

    <h1>Register</h1>

    <!--success or error message -->
    <?php if (isset($_SESSION['success_message'])): ?>
        <p style="color: green;"><?php echo $_SESSION['success_message']; ?></p>
        <?php unset($_SESSION['success_message']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['error_message'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error_message']; ?></p>
        <?php unset($_SESSION['error_message']); ?>
    <?php endif; ?>

    <!--registration-->
    <form action="create_db.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="Enter username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter password" required>
        <br><br>
        <button type="submit" name="submit">Register</button>
    </form>

    <h2>All users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['password'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>
</html>
