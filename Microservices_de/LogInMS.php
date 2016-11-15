<?php 
$username = $_POST['username'];
$password = $_POST['password'];

if($username=="admin" && $password=="1234")
{	
	
	echo("LogIn war erfolgreich<br>");
	header('Location: optionen.php');
	exit;
	
}
else
{
	echo("Deine eingegebenen Information stimmen nicht!");
}
?>