<?php

class View {
   
    public function printTasks()
    {
        require_once "../template/head.php";
        require_once "../template/header.php";
        
        // echo "<hr>Print Tasks View</br>";
        // $sql = "SELECT*FROM todolist";
        // $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
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
