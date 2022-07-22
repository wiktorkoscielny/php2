<?php 
	require_once "connect.php";
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0)
	{
        echo "Error: ".$polaczenie->connect_error;
	}
	else
	{
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$password'";

    if ($result = @$polaczenie->query($sql)) {
        
    }

    $polaczenie->close();
   }
?>

//42:20
