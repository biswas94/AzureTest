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
        $dbname = "db-1309400";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "<h1>Connected successfully</h1>";

        $sql = "select * from test";
        $result = $conn->query($sql);
        var_dump($result);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["test-id"]. " - Title: " . $row["title"]. "<br>";
            }
        } else {
            echo "<h1>0 results</h1>";
        }
        $conn->close();
    ?>
</body>
</html>
