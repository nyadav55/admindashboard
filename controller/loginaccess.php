<?php

include_once('../connection/conn.php');

//mysqli_select_db($conn, $database);
//class Loginuser extends DBconnection {
//    public function __construct() {
//        parent::__construct();
//echo mysqli_select_db($mysqli, $database);

    if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
        $action = $_REQUEST['action'];
//        global $mysqli;
    switch ($action) {
        
        case "checkLogin":
            $username = $_REQUEST['username'];
             $QUERY = "select userFirstname from useraccount where userFirstname  = '$username'";
        echo    $result = mysqli_query($mysqli, $QUERY) or die('Could not update member data: ' . mysqli_error());
    echo    $totalData = mysqli_num_rows($result);
//    echo   $query = $this->connection->query($QUERY);
 exit();
        if($result ->num_rows > 0){
            $row = $result ->fetch_array();
            return $row['id'];
        }
        else{
            return false;
        }
            break;
    }
}
//    }

?>