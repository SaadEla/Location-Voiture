
		<?php 
		session_start();
		include 'connexion.php';
		if(isset($_POST['email']) && isset($_POST['password'])){
$email=$_POST['email'];
$password=$_POST['password'];

$var=findname($bdd,$email,$password);
foreach($var as $key){
$id=$key['iduser'];
$nom=$key['NomClient'];
}

if(exist($bdd,$email,$password)==1)	{
	
    $_SESSION['id']=$id;
	$_SESSION['Nom']=$nom;
	header('Location: index.php');

}else if(existadmin($bdd,$email,$password)==1){
	$id=$key['idadmin'];
	$nom=$key['NomAdmin'];
	$_SESSION['id']=$id;
	$_SESSION['Nom']=$nom;
	header('Location: accueiladmin.php');
}
else   { echo "hello2";
header('Location: login_1.php');
}}
//a modifier pour avoir une boite modale a index.php
?>