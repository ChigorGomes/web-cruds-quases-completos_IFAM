<?php
include ('validaLogin.php');


if (isset($_SESSION['administrador'])){
	echo"oi".$_SESSION['administrador'].", bem vindo";
}


?>