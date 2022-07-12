<?php 

    require_once "connect.php";

    $connect = new mysqli($host, $db_user, $db_passowrd, $db_name);

   if($connect->connect_errno!=0)
   {
    echo "Error:".$connect->connect_errno."Opis:".$connect->connect_error;
   } 
   else
   {
    $login = $_POST['login'];
    $password = $_POST['password'];
    echo "It works!";
    $connect->close();
   }

?>