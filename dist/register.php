<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/register.inc.php" method="POST">

    Username: <input type="text" id="username" name="username" required>
    Email: <input type="email" id="email" name="email" required>
    Password: <input type="password" id="password" name="password" required>
    Confirm Password: <input type="password" id="confirmPassword" name="confirmPassword" required>
    <input type="submit" name="signup-submit" value="Register">
    </form>
</body>
</html>