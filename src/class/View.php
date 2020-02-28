<?php

class View {


    public function renderTodolist($tasks)
    {   require_once "../template/head.php";
        require_once "../template/header.php";
    
    // foreach ($tasks as $colname => $cell) {
    //     switch ($colname) {
    //         case "task":
    //             echo "<input class='tasks' type='text' name='Tasks' value='$cell'></input>";
    //             break;
    //         case "shedule":
    //             echo "<input class='ptodo' type='text' name='Shedule' value='$cell'></input>";
    //             break;
    //         default:
    //             echo "<span class='todo-cell'>$cell</span>";
    //             break;
    //     } 
        
    // }


///break

        if (count($tasks)>0) {
                foreach($tasks as $row) {
                    echo "<div class='todo-cont'>";   
                    
                    echo "<span class='todo-cell'>id: " . $row["id"] . "</span>";
                    echo "<span class='todo-cell'>tasks: " . $row["tasks"] . "</span>";
                    echo "<span class='todo-cell'>created: " . $row["created"] . "</span>";
                    echo "<span class='todo-cell'>ptodo: " . $row["ptodo"] . "</span>";
                    echo '<form action="delete.php" method="post">';
                    echo '<input type="hidden" name="taskid" value="' . $row["id"] .'"/>';
                    echo "<button type='submit' name='delBtn' class='delBtn'>Done</button>";
                    echo "</form>";
                    echo "<button type='submit' name='updateBtn' class='updateBtn'>Update</button>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
        require_once "../template/footer.php";
    }
}
