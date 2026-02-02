<?php include 'lab connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <script>
        function validateForm() {
            let task = document.getElementById("task_name").value.trim();
            if (task === "") {
                alert("Task name cannot be empty!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Task Manager</h1>

    <form action="lab insert.php" method="POST" onsubmit="return validateForm()">
        <input type="text" name="task_name" id="task_name" placeholder="Enter task">
        <button type="submit">Add Task</button>
    </form>

    <h2>All Tasks</h2>
    <?php include 'lab read.php'; ?>
</body>
</html>
