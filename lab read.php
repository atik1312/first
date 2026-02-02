<?php
include 'lab connection.php';

$result = $conn->query("SELECT * FROM tasks");

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>ID: " . $row['id'] . " - " . htmlspecialchars($row['task_name']) . 
             " <a href='lab delet.php?id=" . $row['id'] . "' onclick='return confirm(\"Delete this task?\")'>Delete</a></li>";
    }
    echo "</ul>";
} else {
    echo "<p>No tasks found.</p>";
}
?>
