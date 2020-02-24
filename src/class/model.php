<?php

class Model
{
    private $mytodo = null;
    private $view;

    public function __construct($config, View $view)
    {
        $this->view = $view;
        $servername = $config["servername"];
        $username = $config["username"];
        $password = $config["password"];
        $dbname = $config["dbname"];

        $mytodo = new mysqli($servername, $username, $password, $dbname);

        if ($mytodo->connect_error) {
            die("Connection failed: " . $mytodo->connect_error);
        }
        echo "Connected successfully";
        $sql = "SELECT*FROM todolist";
        $result = $mytodo->query($sql);

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
        $mytodo->close();

    }
    public function getTasks($userid = null)
    {
        $stmt = $this->conn->prepare("SELECT*FROM todolist");
        $stmt->execute();
        $stmt->setFetchMode(PDO::fetch_assoc);
        $allRows = $stmt->fetchAll();
        $this->view->printTasks($allRows);
        // var_dump($allRows);

    }

}
