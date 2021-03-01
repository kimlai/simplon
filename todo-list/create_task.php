<?php

$tasks = [];
$fileContentString = file_get_contents("tasks.txt");
if ($fileContentString !== "") {
  $tasks = explode("|", $fileContentString);
}

if (isset($_POST["todo"])) {
  $task = htmlspecialchars($_POST["todo"]);
  $tasks[] = $task;
  $newFileContent = implode("|", $tasks);
  file_put_contents("tasks.txt", $newFileContent);

  header('Location: /');
  exit;
}
