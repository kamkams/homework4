<?php
require_once "../config/config.php";
require_once "../src/class/View.php";
require_once "../src/class/Model.php";
// var_dump($config); 
// die;
require_once "../template/head.php";
echo "<h1>My Todo list</h1><hr>";
// require_once "../template/header.php";

// $controller = new Controller($model);
$view = new View();
$model = new Model($config, $view);

// $model->getTasks();
require_once "../template/footer.php";