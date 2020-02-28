<?php
require_once "../src/class/model.php";
require_once "../config/config.php";
$model = new Model($config);
$model->createTodo(1, $_POST["my_text"],$_POST["pldatetime"]);
header('Location: http://localhost:8888/public/', TRUE, 302);


// var_dump($_POST);
// die;
