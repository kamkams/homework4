<?php

class View {
    // public function render()
    // {
    //     require_once "../template/head.php";
    //     require_once "../template/header.php";
    //     require_once "../template/footer.php";
    // }
        var_dump();
        die;
    public function printTasks($tasks)
    {
        echo "<hr>Print Tasks View</br>";
        $sql = "SELECT*FROM todolist";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
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
$conn->close();
    }
}
