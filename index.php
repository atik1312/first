
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP-Student Form</title>
</head>
<body>
    <h2>Add New Student</h2>
    <form method="POST" action="insert.php">
        <label for="university_id">University ID:</label>
        <input type="text" id="university_id" name="university_id" required>
        <br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <br>

        <label for="phone">Phone No:</label>
        <input type="text" id="phone" name="phone" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <input type="submit" value="Add Student">
    </form>

    <h2>Enter ID to Delete</h2>
    <form method="POST" action="delete.php">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <input type="submit" value="Delete">
    </form>

    

    <h2>All Students</h2>
    <?php include 'read.php'; ?>
</body>
</html>
