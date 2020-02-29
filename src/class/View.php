<?php

class View {

    public function renderTodolist(array $tasks)
    {   
        require_once "../template/head.php";
        require_once "../template/header.php";
        
        echo "<div class='todo-cont'>";                       
        echo "<span class='todo-cell'>ID</span>";
        echo "<span class='todo-cell'>TASK</span>";
        echo "<span class='todo-cell'>CREATED AT</span>";
        echo "<span class='todo-cell'>SCHEDULED AT</span>";
        echo "</div><hr>";

        foreach($tasks as $row) {
            echo "<div class='todo-cont'>";                       
            echo "<span class='todo-cell'> " . $row["id"] . "</span>";
            echo "<span class='todo-cell'> " . $row["tasks"] . "</span>";
            echo "<span class='todo-cell'> " . $row["created"] . "</span>";
            echo "<span class='todo-cell'> " . $row["ptodo"] . "</span>";
            echo '<form action="delete.php" method="post">';
            echo '<input type="hidden" name="taskid" value="' . $row["id"] .'"/>';
            echo "<button type='submit' name='delBtn' class='delBtn'>Done</button>";
            echo "</form>";
            echo '<form action="update.php" method="post">';
            echo '<input type="hidden" name="taskid" value="' . $row["id"] .'"/>';
            echo "<button type='submit' name='updateBtn' class='updateBtn'>Update</button>";
            echo '</form>';
            echo "</div><hr>";
        }

        require_once "../template/footer.php";
    }

    public function renderOneTask($task) {
        require_once "../template/head.php";
        require_once "../template/header.php";

        echo "<h1>Update todo item</h1>";
        echo '<form class="form" action= "update.php" method = "post">';
        echo '<input type="hidden" name="taskid" value="' . $task["id"] .'"/>';
        echo '<input type="hidden" name="action" value="updateTask"/>';
        echo '<label for="textinput"> Update Todo:   </label>';
        echo '<input type="text" name="tasks" id="textinput" value="'.$task["tasks"].'">';
        echo '<label for="datetimegroup">Schedule time:  </label>';
        echo '<input type="datetime-local" name="pldatetime" id="datetimegroup" value="'.(new DateTime($task["ptodo"]))->format('Y-m-d\TH:i:s.000').'">';
        echo '<button type="submit" id="add">Update Todo</button>';
        echo '</form>';       
        require_once "../template/footer.php";
    }
}