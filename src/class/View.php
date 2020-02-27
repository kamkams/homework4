<?php

class View {


    public function renderTodolist($tasks)
    {   require_once "../template/head.php";
        require_once "../template/header.php";
        
        if (count($tasks)>0) {
                foreach($tasks as $row) {
                    echo "<div class='todo-cont'>";
                    echo "<span class='todo-cell'>id: " . $row["id"] . "</span>";
                    echo "<span class='todo-cell'>tasks: " . $row["tasks"] . "</span>";
                    echo "<span class='todo-cell'>created: " . $row["created"] . "</span>";
                    echo "<span class='todo-cell'>ptodo: " . $row["ptodo"] . "</span>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
        require_once "../template/footer.php";
    }
}
