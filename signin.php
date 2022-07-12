<?php 

    require_once "connect.php";

    $connect = new mysqli($host, $db_user, $db_password, $db_name);

   if($connect->connect_errno!=0)
   {
    echo "Error:".$connect->connect.errno ."Opis: ".$connect->connect_error;
   } 

    $login = $_POST['login'];
    $password = $_POST['password'];

?>