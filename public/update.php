<?php
require_once "../config/config.php";
require_once "../src/class/View.php";
require_once "../src/class/Model.php";

if(!isset($_POST['action'])){
    $model = new Model($config);
    $task = $model->getOneTodolist($_POST['taskid']);
    $view = new View();
    $view->renderOneTask($task);
}

if(isset($_POST['action']) && $_POST['action'] === 'updateTask')
{
    $model = new Model($config);
    $model->updateTask($_POST['taskid'], $_POST['tasks'], $_POST['pldatetime']);
    header('Location: http://localhost:8888/public/', TRUE, 302);    
}
