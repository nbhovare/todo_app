<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Todo List</title>
</head>
<body>
<div id="loader" class="loader"></div>
    <div class="container">
        <h1>Todo List</h1>
        <form action="add_todo.php" method="post">
            <input type="text" name="new_task" placeholder="Enter new task" required>
            <button type="submit">Add</button>
        </form>
        
        <ul>
            <?php
            // Fetch and display todo items from the database
            $servername = "dbmysql";
            $username = "root";
            $password = "secret";
            $dbname = "todos";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM tasks";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["task_name"] . " <a href='delete_todo.php?id=" . $row["ID"] . "'>Delete</a></li>";
            }

            $conn->close();
            ?>
        </ul>
    </div>
</body>
</html>

