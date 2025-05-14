<?php
session_start();

//checks if user is authenticated
if (!isset($_COOKIE['authenticated'])) {
    header('Location: index.php'); //go back to login if not authenticated
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
</head>
<body>

    <h1>Dashboard</h1>
    <p>You are logged in</p>
    <p><a href="?logout=true">Logout</a></p>

</body>
</html>
