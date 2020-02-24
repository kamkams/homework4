<?php

class View {
    public function render()
    {
        require_once "../template/head.php";
        require_once "../template/header.php";
        require_once "../template/footer.php";
    }

    public function printTasks($tasks)
    {
        echo "<hr>Print Tasks View</br>";
    }
}
