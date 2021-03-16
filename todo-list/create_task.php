<?php

$connection = new PDO('mysql:host=localhost;dbname=todo_list', "todo_list", "todo_list");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $connection->prepare("INSERT INTO tasks (content) VALUES (:content)");
$statement->bindParam(":content", htmlspecialchars($_POST["todo"]));
$statement->execute();

header('Location: /');
exit;
