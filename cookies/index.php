<?php
session_start();

// Default login details (loaded from the .txt file)
$login = [];

//checks if login file exists
if (file_exists('login.txt')) {
    $fileContent = file_get_contents('login.txt');
    $login = explode(',', $fileContent);
}

// Variables for form input and message
$username = '';
$password = '';
$message = '';

//checks if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //validates username and password
    if ($username == $login[0] && $password == $login[1]) {
        // Set cookie for 6 minutes
        setcookie('authenticated', TRUE, time() + 3600 * 6);
        header('Location: dashboard.php'); //head to the dashboard
        exit();
    } else {
        $message = 'Username and/or password incorrect. Try again.';
    }
}

// Logout functionality
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    setcookie('authenticated', '', time() - 3600); //delete the cookie
    header('Location: index.php'); //redirect to login page after logout
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <?php if ($message): ?>
        <p style="color: red;"><?= $message ?></p>
    <?php endif; ?>

    <form action="index.php" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" required>
            </li>
        </ul>
        <input type="submit" value="Login">
    </form>

</body>
</html>
