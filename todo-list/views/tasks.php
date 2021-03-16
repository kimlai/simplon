<?php

function renderTasks($tasks) {
  $html = "";
  foreach ($tasks as $task) {
    $taskContent = $task["content"];
    $id = $task["id"];
    $html = $html . <<<HTML
    <li>
      $taskContent
      <form method="POST" action="/delete-task">
        <input name="remove_todo_id" value="$id" type="hidden" />
        <button>x</button>
      </form>
    </li>
HTML
  ;
  }

  return $html;
}
