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
}

if (isset($_POST["remove_todo_index"])) {
  $taskToDeleteIndex = (int) $_POST["remove_todo_index"];
  unset($tasks[$taskToDeleteIndex]);
  $newFileContent = implode("|", $tasks);
  file_put_contents("tasks.txt", $newFileContent);
}

foreach ($tasks as $key => $task) {
  echo <<< HTML
  <li>
    $task
    <form method="POST">
      <input name="remove_todo_index" value="$key" type="hidden" />
      <button>x</button>
    </form>
  </li>
HTML;
}
