<?php

$password = 'azerty';
$username = 'stijn';

$message = '';

//checks if form was submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    //gets values from the form
    $formUsername = $_POST['username'];
    $formPassword = $_POST['password'];


     if ($formUsername === $username && $formPassword === $password) {  //compares form values with the predefined username and password
        //if they match, you see welcome message
        $message = 'Welcome';
    } else {
        //if they dont, see the error message
        $message = 'Oops! Try again';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
<h1>Login</h1>

    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <p><?php echo $message; ?></p>  <!--dont use echo inside--> 

</body>
</html>