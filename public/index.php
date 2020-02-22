<?php
require_once "../config/config.php";
// var_dump($config); 
// die;
require_once "../template/head.php";
echo "<h1>My Todo list</h1><hr>";
// require_once "../template/header.php";
require_once "../src/class/Model.php";
// $controller = new Controller($model);

$model = new Model($config);

require_once "../template/footer.php";