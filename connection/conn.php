<?php

//class DBconnection {
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','dbcrudapp');

//    private $host = 'localhost';
//    private $username = 'root';
//    private $password = '';
//    private $database = 'dbcrudapp';
//  private $connection = null;
    
//    public static function __construct(){
// 
//        if (!isset($this->connection)) {
// 
//            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
// 
//            if (!$this->connection) {
//                echo 'Cannot connect to database server';
//                exit;
//            }            
//        }    
//        $connection = new DBconnection();
//$connection->connection();
//        return $this->connection;
//    }

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
         
         if($mysqli -> connect_error) {
            printf("Connect failed: %s<br />", $mysqli -> connect_error);
            exit();
         }
//         printf('Connected successfully.<br />');
         return $mysqli;
//         $mysqli -> close();
?>

