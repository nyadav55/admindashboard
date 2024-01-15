<?php

class Databaseconn {
    private $user = "root";
    private $pass = "";
    public $conn;
    
    public function __construct() {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=dbcrudapp', $this->user, $this->pass);
            echo "Sucess";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function displayData() {
        $data = array();
        $SQL = "select * from userlogin";
        $query = $this->conn->prepare($SQL);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
//            var_dump($row);
            $data[] = $row;
            }
            return $data;
      }

}
$Obj = new Databaseconn();
print_r($Obj->displayData());



?>
