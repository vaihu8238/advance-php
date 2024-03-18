<?php
session_start();

// Initialize tasks array in session if not already set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Function to add a new task
function addTask($task) {
    $_SESSION['tasks'][] = $task;
}

// Function to delete a task
function deleteTask($index) {
    if (isset($_SESSION['tasks'][$index])) {
        unset($_SESSION['tasks'][$index]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']);
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['task'])) {
        $newTask = trim($_POST['task']);
        if (!empty($newTask)) {
            addTask($newTask);
        }
    } elseif (isset($_POST['delete'])) {
        $taskIndex = $_POST['delete'];
        deleteTask($taskIndex);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List Manager</title>
</head>
<body>
    <h2>Task List Manager</h2>
    <form method="post">
        <input type="text" name="task" placeholder="Enter task">
        <button type="submit">Add Task</button>
    </form>
    <h3>Tasks:</h3>
    <ul>
        <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
            <li>
                <?php echo $task; ?>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="delete" value="<?php echo $index; ?>">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
