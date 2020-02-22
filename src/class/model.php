<?php

class Model  {
    public $conn = null;
    public function __construct($config)

{ 
$servername = $config["servername"];
$username = $config["username"];
$password = $config["password"];
$dbname = $config["dbname"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
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
