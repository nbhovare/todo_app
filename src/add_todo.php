<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["new_task"])) {
    $servername = "dbmysql";
    $username = "root";
    $password = "secret";
    $dbname = "todos";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $newTask = $_POST["new_task"];
    $sql = "INSERT INTO tasks (task_name) VALUES ('$newTask')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

