<?php
include 'connection.php';

$uni_id = $_POST['id'];

$query = "DELETE FROM students WHERE university_id = '$uni_id'";
$conn->query($query);

if ($conn->affected_rows > 0) {
    echo "Record with ID $uni_id deleted successfully.";
} else {
    echo "No record found with ID $uni_id.";
}
?>
