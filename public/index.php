<?php
require_once "../config/config.php";
require_once "../src/class/View.php";
require_once "../src/class/Model.php";

echo "<h1>My Todo list</h1><hr>";
require_once "../public/add_task_form.php";

$model = new Model($config);

$tasktodo=$model->getTodoList();
$view = new View();
$view->renderTodolist($tasktodo);
