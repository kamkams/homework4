<?php
class View {

    public function render()
{

}
public function printTasks($tasks)
{
echo "<hr>Parbaudut View </br>";
foreach ($tasks as $task) {   
echo "<br> das ist AAAAAAAAAA";
print_r($task);

}

}
