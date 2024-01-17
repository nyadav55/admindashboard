<?php

include_once('../connection/conn.php');

    if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
        $action = $_REQUEST['action'];
    switch ($action) {
        
        case "checkLogin":
        echo    $username = $_REQUEST['username'];
         echo    $sql = "select * from userlogin as ul where ul.userName = '$username' ";
         exit();
//                 . "and ul.password = 123 and 1=1";
       echo     $result = mysqli_query($mysqli, $sql) or die('Could not have member data: ' . mysqli_error());
        
    echo   $query = $this->connection->query($QUERY);

        if(mysqli_num_rows($result) > 0){
            echo 'Access successfully.';
            return;
        }
        else{
            echo 'Access Denied.';
            return false;
        }
            break;

    }     
}



?>