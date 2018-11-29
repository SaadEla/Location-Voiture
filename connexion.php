<?php
try{
	$db_name="locationvoiture";
	$db_pass="";
	$db_user="root";
	$db_host="localhost";

	$bdd = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user, $db_pass);
	//$bdd=new PDO("mysql:host=localhost;dbname=testcours;charset=utf8","root","");
	include 'fonction.php';
}catch(Exception $e){
	echo "erreur de connexion".$e->getmessage();}
	?>
