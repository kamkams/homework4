<?php
require_once "../config/config.php";
require_once "../src/class/View.php";
require_once "../src/class/Model.php";
echo "<h1>My Todo list</h1><hr>";
require_once "../public/add_task_form.php";
$view = new View();
$model = new Model($config, $view);






// $controller = new Controller($model);


// $model->getTasks();
