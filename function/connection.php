<?php
function dbConnect(){
    $server_name = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "blog";

    $conn = new mysql($server_name, $dbusername, $dbpassword,  $dbname);

    if($conn->$connect_error){
        die("ERROR CONNECTIONG TO THE DATABASE: " . $conn->$connect_error);
    }else{
        return $conn;
       
    }
}
//  dbConnect();

?>