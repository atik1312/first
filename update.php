<?php
include 'connection.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "No student ID provided.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $university_id = $_POST['university_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $query = "UPDATE students SET 
              university_id = '$university_id',
              name = '$name',
              address = '$address',
              phone = '$phone',
              email = '$email'
              WHERE id = '$id'";

    if ($conn->query($query)) {
        echo "Student record updated successfully.<br><a href='index.php'>Back to Home</a>";
    } else {
        echo "Update failed: " . $conn->error;
    }
    exit();
}

// Fetch student data for the form
$result = $conn->query("SELECT * FROM students WHERE id = '$id'");
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No student found with ID $id";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="post" action="update.php?id=<?= $row['id'] ?>">
        University ID: <input type="text" name="university_id" value="<?= htmlspecialchars($row['university_id']) ?>"><br><br>
        Name: <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>"><br><br>
        Address: <input type="text" name="address" value="<?= htmlspecialchars($row['address']) ?>"><br><br>
        Phone: <input type="text" name="phone" value="<?= htmlspecialchars($row['phone']) ?>"><br><br>
        Email: <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>"><br><br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>