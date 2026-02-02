<?php 
include 'connection.php';

$query = "SELECT `id`, `university_id`, `name`, `address`, `phone`, `email` FROM `students`";
$result = $conn->query($query);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>University ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['university_id']}</td>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['address']}</td>";
    echo "<td>{$row['phone']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td><a href='update.php?id={$row['id']}'>Edit</a></td>";
    echo "</tr>";
}

echo "</table>";

?>
