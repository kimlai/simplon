<?php

require "./controllers/task-controller.php";

// méthode + chemin de la requête HTTP = action de controlleur

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["REQUEST_URI"];

if ($method === "GET" && $path === "/") {
  index();
}
elseif ($method === "POST" && $path === "/new-task") {
  addTask();
}
elseif ($method === "POST" && $path === "/delete-task") {
  removeTask();
}
else {
  echo "404 : not found";
}
