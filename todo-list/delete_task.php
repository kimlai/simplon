<?php

if (isset($_POST["remove_todo_id"])) {
  $connection = new PDO('mysql:host=localhost;dbname=todo_list', "todo_list", "todo_list");
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $statement = $connection->prepare("DELETE FROM tasks WHERE id = :id");
  $id = (int) $_POST["remove_todo_id"];
  $statement->bindParam(":id", $id, PDO::PARAM_INT);
  $statement->execute();

  header('Location: /');
  exit;
}
