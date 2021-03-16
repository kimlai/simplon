<?php

function getAllTasks() {
  $connection = getConnection();
  $statement = $connection->query("SELECT id, content FROM tasks");
  $tasks = $statement->fetchAll();

  return $tasks;
}

function createTask($task) {
  $connection = getConnection();
  $statement = $connection->prepare("INSERT INTO tasks (content) VALUES (:content)");
  $statement->bindParam(":content", $task);
  $statement->execute();
}

function deleteTask($id) {
  $connection = getConnection();
  $statement = $connection->prepare("DELETE FROM tasks WHERE id = :id");
  $statement->bindParam(":id", $id, PDO::PARAM_INT);
  $statement->execute();
}

function getConnection() {
  $connection = new PDO('mysql:host=localhost;dbname=todo_list', "todo_list", "todo_list");
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $connection;
}
