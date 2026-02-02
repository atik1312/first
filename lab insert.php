<?php
include 'lab connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task_name = trim($_POST['task_name']);
    if (!empty($task_name)) {
        $stmt = $conn->prepare(query: "INSERT INTO tasks (task_name) VALUES (?)");
        $stmt->bind_param("s", $task_name);
        $stmt->execute();
        $stmt->close();
        echo "<p style='color:green;'>Task added successfully!</p>";
    } else {
        echo "<p style='color:red;'>Please enter a task name.</p>";
    }
}
header("Location:lab index.php");
exit;
?>
