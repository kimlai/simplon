<?php

$tasks = [];
$fileContentString = file_get_contents("tasks.txt");
if ($fileContentString !== "") {
  $tasks = explode("|", $fileContentString);
}

foreach ($tasks as $key => $task) {
  echo <<< HTML
  <li>
    $task
    <form method="POST" action="delete_task.php">
      <input name="remove_todo_index" value="$key" type="hidden" />
      <button>x</button>
    </form>
  </li>
HTML;
}
