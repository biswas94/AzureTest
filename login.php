<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Deployment Test</title>
</head>
<body>
<?php
$servername = "eu-cdbr-azure-north-d.cloudapp.net";
echo "<h2>Login</h2>";
echo "<h3>Username: </h3><input type='text' id='username' />";
echo "<h3>Password: </h3><input type='password' id='password' />";

setcookie(‘access_level’,'standarduser');
    ?>
</body>
</html>
