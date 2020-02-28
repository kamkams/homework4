<?php

class View {


    public function renderTodolist($tasks)
    {   require_once "../template/head.php";
        require_once "../template/header.php";
    //add delete and update button    
        echo "<form action='index.php' method='post'>";
            $rowid = $row['id'];
            echo "<button type='submit' name='delBtn' value='$rowid'>Delete</button>";
            echo "<button type='submit' name='updateBtn' value='$rowid'>Update</button>";
    //task and shedule column name
    foreach ($row as $colname => $cell) {
        switch ($colname) {
            case "task":
                echo "<input class='tasks' type='text' name='Tasks' value='$cell'></input>";
                break;
            case "shedule":
                echo "<input class='ptodo' type='text' name='Shedule' value='$cell'></input>";
                break;
            default:
                echo "<span class='todo-cell'>$cell</span>";
                break;
        } 
        
    }

    echo "</form>";

///break

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
