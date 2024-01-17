<?php

include_once('../connection/dbconnection.php');
$dbconn = new Databaseconn();

if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
        $action = $_REQUEST['action'];
    switch ($action) {
        
        case "getUserdata":
                $op = '';
                $result = $dbconn->displayData();
//                print_r($result);
                if($dbconn->totalcountData()>0) {
                   $op .= '<table class="table table-striped table-sm table-dashboard">
                        <thead>
                            <tr class="text-center">
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';
                   foreach($result as $row) {
                     $op .= '<tr class="text-center text-secondary">
                                 <td>'.$row['name'].'</td>
                                     <td>'.$row['userEmail'].'</td>
                                         <td>'.$row['userMobile'].'</td>
                                             <td>'.$row['userRole'].'</td>
                                             
                        <td>
                                    <a href="#" title="View" class="text-success">
                                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="#" title="Edit" class="text-primary">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="#" title="Delete" class="text-success">
                                        <i class="fa fa-trash"></i>
                                    </a>&nbsp;
                                </td> </tr>'; 
                   }
                   $op .= '</tbody>
                    </table>';
                   echo $op;
                   
                } else {
                    echo '<h3 class="text-center text-secondary mt-5">:( No data found!</h3>';
                }
                
                break;
                
                case "checkLogin":
                  echo   $uname = $_REQUEST['username'];  
                if (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) {
                    
                    $result = $dbconn->userloginAccess($uname);
                    print_r($result);
                }
                
//                
//                if($dbconn->totalcountData()>0) {
//                   
//                   return;
//                   
//                } else {
//                    echo '<h3 class="text-center text-secondary mt-5">:( No data found!</h3>';
//                }
                
                
        }        
}
?>
