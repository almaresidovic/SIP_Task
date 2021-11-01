<?php

class databaseConnect{

    private $servername = "localhost";
    private $username = "root";
    private $password = "alma";
    private $dbname = "exercise_task";
    
    public $connection;
    
    public function __construct(){
        $this->connection = new mysqli(
            $this->servername, 
            $this->username, 
            $this->password, 
            $this->dbname
        );

    if ($this->connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
    }   
}

$find = strpos($_SERVER['REQUEST_URI'], "prov/");
$file_name = substr($_SERVER['REQUEST_URI'], $find + 5);

$find2 = strpos($file_name, ".php");
$mac_address = substr($file_name, 0, $find2);



function getParameters($mac_address) {
    $db = new databaseConnect();
    $sql = "SELECT * FROM sip_phones WHERE mac = '" . $mac_address . "'";
    $result = mysqli_query($db->connection, $sql);

    if ($result->num_rows > 0) {
        while($Paramteres = $result->fetch_assoc()) {
            return $Paramteres;
        }
    }
    echo "No parameters in database";
}

function printParameters($Paramteres) {
    foreach($Paramteres as $paramKey => $paramValue) {
        echo $paramKey . ": " . $paramValue;
        echo "<br>";
    }
}

$Paramteres = getParameters($mac_address);

printParameters($Paramteres);
?>