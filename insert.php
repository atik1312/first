<?php
include 'connection.php';
$createTableSql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    university_id VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(20),
    email VARCHAR(100)
)";
$conn->query($createTableSql);
$university_id = $_POST['university_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO students (university_id, name, address, phone, email) 
        VALUES ('$university_id', '$name', '$address', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "<br>New student record created successfully";
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

?>
