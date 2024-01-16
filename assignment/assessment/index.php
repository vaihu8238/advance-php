<?php
require_once 'task_functions.php';
require_once 'display_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['task']) && !empty($_POST['task']) && isset($_POST['category'])) {
        $newTask = htmlspecialchars($_POST['task']);
        $category = htmlspecialchars($_POST['category']);
        addTask($newTask, $category);
    }

    if (isset($_POST['delete']) && isset($_POST['taskIndex']) && isset($_POST['category'])) {
        $indexToDelete = $_POST['taskIndex'];
        $category = $_POST['category'];
        deleteTask($category, $indexToDelete);
    }

    if (isset($_POST['clearAll'])) {
        clearAllTasks();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
</head>
<body>

<h1>Task Manager</h1>

<form action="" method="post">
    <label for="task">Add Task:</label>
    <input type="text" id="task" name="task" required>

    <label for="category">Category:</label>
    <select name="category" id="category">
        <option value="general">General</option>
        <option value="breakfast">Breakfast</option>
    </select>

    <button type="submit">Add Task</button>
</form>

<h2>Task List - General</h2>
<ul>
    <?php displayTasks('general'); ?>
</ul>

<h2>Task List - Breakfast</h2>
<ul>
    <?php displayTasks('breakfast'); ?>
</ul>

<form action="" method="post">
    <button type="submit" name="clearAll">Clear All</button>
</form>

</body>
</html>
