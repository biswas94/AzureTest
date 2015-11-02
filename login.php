<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Deployment Test</title>
</head>
<body>
<?php
$servername = "eu-cdbr-azure-north-d.cloudapp.net";
echo "<form>";
echo "<h2>Login</h2>";
echo "<h3>Username: </h3><input type='text' id='username' />";
echo "<h3>Password: </h3><input type='password' id='password' /><br>";
echo "<input type='submit' id='submit_button' value='Login' />";
echo "</form>";
setcookie(‘access_level’,'standarduser');

setcookie('name','', 1417608000,'/login.php','http://biswas-azure.azurewebsites.net');
    ?>
</body>
</html>
