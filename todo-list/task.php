<?php

$connection = new PDO('mysql:host=localhost;dbname=todo_list', "todo_list", "todo_list");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$tasks = $connection->query("SELECT id, content FROM tasks");

foreach ($tasks as $task) {
  $taskContent = $task["content"];
  $id = $task["id"];
  echo <<< HTML
  <li>
    $taskContent
    <form method="POST" action="delete_task.php">
      <input name="remove_todo_id" value="$id" type="hidden" />
      <button>x</button>
    </form>
  </li>
HTML;
}
