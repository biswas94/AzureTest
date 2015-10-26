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

        $sql = "SELECT 'test-id', 'title' FROM 'test'";
        $result = $conn->query($sql);
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
