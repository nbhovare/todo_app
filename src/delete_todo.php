<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $taskId = $_GET["id"];
    // Add JavaScript to show loader
//    echo '<script>document.getElementById("loader").style.display = "block";</script>';

    $servername = "dbmysql";
    $username = "root";
    $password = "secret";
    $dbname = "todos";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM tasks WHERE id = $taskId";

    if ($conn->query($sql) === TRUE) {
        // Add JavaScript to hide loader and redirect

 $conn->close();

        // Redirect to index.php after delete
        header("Location: index.php");
        exit();


        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>

