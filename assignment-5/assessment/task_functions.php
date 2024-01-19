<?php
session_start();

function addTask($task, $category)
{
    $_SESSION['tasks'][$category][] = $task;
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
?>
