<?php
include 'lab connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM tasks WHERE id=$id");
}

header("Location:lab index.php");
exit;
?>
