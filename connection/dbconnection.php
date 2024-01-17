<?php

class Databaseconn {
    private $user = "root";
    private $pass = "";
    public $conn;
    
    public function __construct() {
        try {
            $this->conn = new PDO('mysql:host=localhost;port=33060s;dbname=dbcrudapp', $this->user, $this->pass);
//            echo "Sucess";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function displayData() {
        $data = array();
        $SQL = "select concat(ua.userFirstname,' ',ua.userLastname) as name, userMobile, userEmail, userRole from useraccount as ua where 1=1";
        $query = $this->conn->prepare($SQL);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
//            var_dump($row);
            $data[] = $row;
            }
            return $data;
      }
      
     public function insertData() {
         $SQL = "insert into useraccount(userFirstname, userLastname, userGender, userMobile, userEmail, userDob, userRole)values ("
                 . ":fname, :lname, :gender, :moblie, :email, :dob, :designation)";
         $query = $this->conn->prepare($SQL);
         $query->execute(['fname'=> $fname,'lname'=> $lname,'gender'=> $gender,'moblie'=> $moblie,'email'=> $email,'dob'=> $dob,'designation'=> $designation]);
         
         return true;
     } 
     
     public function userloginAccess($username) {
         $SQL = "select * from userlogin as ul where ul.userName = '$username'";
         $query = $this->conn->prepare($SQL);
         $query->execute(['userId'=>$userId]);
         $result = $query->fetch(PDO::FETCH_ASSOC);
         if(!empty($result)) {
             echo "Succsess ".$result;
         } else {
             return "<h2> No result found </h2>";
         }
         
     }
     
     public function deleteData($userId) {
         $SQL = "Delete from useraccount where userId = :userId";
         $query = $this->conn->prepare($SQL);
         $query->execute(['userId'=>$userId]);
         return true;
     }
     
     public function totalcountData() {
        $SQL = "select * from useraccount";
        $query = $this->conn->prepare($SQL);
        $query->execute();
        $totalrow =  $query->rowCount();
        return $totalrow;
     }

}
$Obj = new Databaseconn();
//print_r($Obj->displayData());



?>
