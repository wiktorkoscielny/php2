<?php 

    require_once "connect.php";

    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    

    $login = $_POST['login'];
    $password = $_POST['password'];

?>