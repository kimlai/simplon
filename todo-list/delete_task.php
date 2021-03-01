<?php

$tasks = [];
$fileContentString = file_get_contents("tasks.txt");
if ($fileContentString !== "") {
  $tasks = explode("|", $fileContentString);
}

if (isset($_POST["remove_todo_index"])) {
  $taskToDeleteIndex = (int) $_POST["remove_todo_index"];
  unset($tasks[$taskToDeleteIndex]);
  $newFileContent = implode("|", $tasks);
  file_put_contents("tasks.txt", $newFileContent);

  header('Location: /');
  exit;
}
