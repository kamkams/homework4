<?php

class Model
{
    private $conn = null;
    private $view;

    public function __construct($config, View $view )
    {
        $this->view = $view;
        $servername = $config["servername"];
        $username = $config["username"];
        $password = $config["password"];
        $dbname = $config["dbname"];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        $conn->close();

    }
    // public function getTasks($userid = null)
    // {
    //     $stmt = $this->todo->prepare("SELECT*FROM todolist");
    //     $stmt->execute();
    //     $stmt->setFetchMode(PDO::fetch_assoc);
    //     $allRows = $stmt->fetchAll();
    //     $this->view->printTasks($allRows);
    //     var_dump($allRows);

    // }

}
