<?php

// méthode + chemin de la requête HTTP = action de controlleur

$method = $_SERVER["REQUEST_METHOD"];
if (isset($_SERVER["PATH_INFO"])) {
  $path = $_SERVER["PATH_INFO"];
} else {
  $path = "/";
}

if ($method === "GET" && $path === "/") {
  require "index.php";
}
elseif ($method === "POST" && $path === "/new-task") {
  require "create_task.php";
}
elseif ($method === "POST" && $path === "/delete-task") {
  require "delete_task.php";
}
else {
  echo "404 : not found";
}
