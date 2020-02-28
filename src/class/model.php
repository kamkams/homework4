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
    
        $user_id = 1;
        $stmt =$conn->prepare("INSERT INTO  todolist SET `tasks` = :task , `ptodo` = :ptodo , `user_id` = :user_id");
        $stmt->bindValue(':task', $_POST['my_text'],);
        $stmt->bindValue(':ptodo', $_POST['pldatetime']);
        $stmt->bindValue(':user_id',$user_id , \PDO::PARAM_INT);
        $stmt->execute();



    }
    public function deleteTodo($user_id, $taskid){
        $servername = $this->config["servername"];
        $username = $this->config["username"];
        $password = $this->config["password"];
        $dbname = $this->config["dbname"];
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       
        $user_id = 1;
        $stmt =$conn->prepare("DELETE FROM  todolist WHERE `id` = :taskid");
        $stmt->bindValue(':taskid', $taskid);
        $stmt->execute();



    }

} 
