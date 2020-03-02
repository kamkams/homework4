<?php

require_once "../config/config.php";
require_once "../src/class/Model.php";
$model = new Model($config); 
$model->deleteTodo(1, $_POST["taskid"]);
header('Location: http://localhost:8888/public/', TRUE, 302);

