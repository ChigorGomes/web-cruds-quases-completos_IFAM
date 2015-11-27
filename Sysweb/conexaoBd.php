<?php
$host="localhost";
$user="root";
$password="";
$database="beta";

try{
	$conn=new PDO("mysql:host=$host;dbname=$database",$user,$password);
	$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
	echo "erro:" .$e-> getMessage();
	exit;
}

?>

