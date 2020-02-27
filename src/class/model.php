<?php

class Model  {
    private $conn = null;
    public function __construct($config)
    {
        $this->config=$config;
    }
    public function getTodoList(){
        $servername = $this->config["servername"];
        $username = $this->config["username"];
        $password = $this->config["password"];
        $dbname = $this->config["dbname"];
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        $stmt =$conn->prepare("SELECT*FROM todolist");   
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    public function createTodo($user_id, $task, $date){
        $servername = $this->config["servername"];
        $username = $this->config["username"];
        $password = $this->config["password"];
        $dbname = $this->config["dbname"];
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       
    
        // $stmt->execute(); 
        // $model->createTodo(1, $_POST["my_text"]);
        // $stmt->execute();
        $user_id = 1;
        $stmt =$conn->prepare("INSERT INTO  todolist SET `tasks` = :task , `ptodo` = :ptodo , `user_id` = :user_id");
        $stmt->bindParam(':tasks', $_POST['my_text'],);
        $stmt->bindParam(':ptodo', $_POST['pldatetime']);
        $stmt->bindParam(':user_id',$user_id , \PDO::PARAM_INT);
        $stmt->execute();



    }
} 
