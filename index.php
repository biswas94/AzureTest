<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Deployment Test</title>
</head>
<body>
    <?php
        $servername = "eu-cdbr-azure-north-d.cloudapp.net";
        $username = "b0cae9e0d4c5fc";
        $password = "fdcc89df";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
    ?>
    <?php
        for($i = 0; $i<5; $i++){
            echo "<H1> It's ALIVE!!!</H1>";
        }
    ?>
</body>
</html>
