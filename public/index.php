<?php
require_once "../config/config.php";
require_once "../src/class/View.php";
require_once "../src/class/Model.php";
// require_once "../src/class/Controller.php";
echo "<h1>My Todo list</h1><hr>";
require_once "../public/add_task_form.php";

$model = new Model($config);
// $controller = new Controller($model);
// $controller -> route();

$tasktodo=$model->getTodoList();
$view = new View();
$view->renderTodolist($tasktodo);







// $controller = new Controller($model);


// $model->getTasks();
