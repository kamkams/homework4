<?php
// var_dump($_POST);
// die;
require_once "../config/config.php";
require_once "../src/class/Model.php";
$model = new Model($config); 
$model->deleteTodo(1, $_POST["taskid"]);
header('Location: http://localhost:8888/public/', TRUE, 302);

// $model = new Model(); 
// $model->updateTodo(1, $_POST["updateBtn"]);
// header('Location: http://localhost:8888/public/', TRUE, 302);
  

