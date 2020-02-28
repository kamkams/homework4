<?php

$model = new Model(); 
$model->deleteTodo(1, $_POST["delBtn"]);
header('Location: http://localhost:8888/public/', TRUE, 302);

$model = new Model(); 
$model->updateTodo(1, $_POST["updateBtn"]);
header('Location: http://localhost:8888/public/', TRUE, 302);
  

