<?php

require "./model/tasks.php";
require "./views/homepage.php";

function index() {
  // MODÈLE
  $tasks = getAllTasks();
  // VUE
  renderHomepage($tasks);
}

function addTask() {
  $task = htmlspecialchars($_POST["todo"]);
  createTask($task);
  header('Location: /');
  exit;
}

function removeTask() {
  $taskId = (int) $_POST["remove_todo_id"];
  deleteTask($taskId);
  header('Location: /');
  exit;
}
