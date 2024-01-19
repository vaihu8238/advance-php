<?php
session_start();

function addTask($task, $category)
{
    $_SESSION['tasks'][$category][] = ['task' => $task, 'datetime' => date('Y-m-d H:i:s')];
}

function deleteTask($category, $index)
{
    if (isset($_SESSION['tasks'][$category][$index])) {
        unset($_SESSION['tasks'][$category][$index]);
    }
}

function clearAllTasks()
{
    $_SESSION['tasks'] = [];
}

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
    <title>Task-Manager</title>
</head>
<body>

<h1>Task List</h1>

<!-- Form to add a new task -->
<form action="" method="post">
    <label for="task">Add Task:</label>
    <input type="text" id="task" name="task" required>
    
    <!-- Dropdown for task category -->
    <label for="category">Category:</label>
    <select name="category" id="category">
        <option value="MORNING">MORNING</option>
        <option value="AFTERNOON">AFTERNOON</option>
        <option value="NIGHT">NIGHT</option>
    </select>

    <button type="submit">Add Task</button>
</form>

<!-- Display Task Lists -->
<h2>MORNING</h2>
<ul>
    <?php
    if (isset($_SESSION['tasks']['MORNING'])) {
        foreach ($_SESSION['tasks']['MORNING'] as $index => $task) {
            echo "<li>{$task['task']} ({$task['datetime']}) <form style='display:inline;' action='' method='post'>
                    <input type='hidden' name='taskIndex' value='$index'>
                    <input type='hidden' name='category' value='MORNING'>
                    <button type='submit' name='delete'>Delete</button>
                  </form></li>";
        }
    }
    ?>
</ul>

<h2>AFTERNOON</h2>
<ul>
    <?php
    if (isset($_SESSION['tasks']['AFTERNOON'])) {
        foreach ($_SESSION['tasks']['AFTERNOON'] as $index => $task) {
            echo "<li>{$task['task']} ({$task['datetime']}) <form style='display:inline;' action='' method='post'>
                    <input type='hidden' name='taskIndex' value='$index'>
                    <input type='hidden' name='category' value='AFTERNOON'>
                    <button type='submit' name='delete'>Delete</button>
                  </form></li>";
        }
    }
    ?>
</ul>

<h2>NIGHT</h2>
<ul>
    <?php
    if (isset($_SESSION['tasks']['NIGHT'])) {
        foreach ($_SESSION['tasks']['NIGHT'] as $index => $task) {
            echo "<li>{$task['task']} ({$task['datetime']}) <form style='display:inline;' action='' method='post'>
                    <input type='hidden' name='taskIndex' value='$index'>
                    <input type='hidden' name='category' value='NIGHT'>
                    <button type='submit' name='delete'>Delete</button>
                  </form></li>";
        }
    }
    ?>
</ul>

<!-- Button to clear all tasks -->
<form action="" method="post">
    <button type="submit" name="clearAll">Clear All</button>
</form>

</body>
</html>
