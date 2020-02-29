<?php

class Model  {
    private $conn = null;
    public function __construct($config)
    {
        $this->config=$config;
    }
    public function getTodoList(){
        
        $stmt = $this->connection()->prepare("SELECT*FROM todolist");   
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    public function createTodo($user_id, $task, $date){    
        $user_id = 1;
        $stmt = $this->connection()->prepare("INSERT INTO  todolist SET `tasks` = :task , `ptodo` = :ptodo , `user_id` = :user_id");
        $stmt->bindValue(':task', $_POST['my_text'],);
        $stmt->bindValue(':ptodo', $_POST['pldatetime']);
        $stmt->bindValue(':user_id',$user_id , \PDO::PARAM_INT);
        $stmt->execute();
    }

    public function deleteTodo($user_id, $taskid){
        $user_id = 1;
        $stmt = $this->connection()->prepare("DELETE FROM  todolist WHERE `id` = :taskid");
        $stmt->bindValue(':taskid', $taskid);
        $stmt->execute();
    }

    private function connection():PDO
    {   
        $servername = $this->config["servername"];
        $username = $this->config["username"];
        $password = $this->config["password"];
        $dbname = $this->config["dbname"];
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

    public function getOneTodolist($taskId)
    {
        $stmt = $this->connection()->prepare("SELECT * FROM todolist WHERE id=:id");   
        $stmt->bindValue(':id', $taskId);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    public function updateTask($id, $task, $pdate)
    {
        $stmt = $this->connection()->prepare("UPDATE todolist SET `tasks` = :newtask, `ptodo` = :newptodo WHERE `id` = :id");   


        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':newtask', $task, PDO::PARAM_STR);
        $stmt->bindValue(':newptodo', $pdate, PDO::PARAM_STR);
        $stmt->execute();
    }
} 
