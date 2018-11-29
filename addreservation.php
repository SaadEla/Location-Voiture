	<?php
	session_start();
	$idcli=$_SESSION['id'];
	
	if(isset($_GET['idvehil'])){
$idvehi=$_GET['idvehil'];
$prix=$_GET['prixparj'];
$iddevis=2;	

$db_name="locationvoiture";
	$db_pass="";
	$db_user="root";
	$db_host="localhost";

	$bdd = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user, $db_pass);
	function ajoutreservation($bdd,$iduser,$idvehicule,$iddevis,$datedebut,$datefin,$duree,$prix){
/*mysqli_query($bdd,"INSERT INTO client(NomClient,PrenomClient,AgeClient,LoginClient,MdpClient,AdresseClient,NumTelClient) VALUES ('".$nom."', '".$prenom."', '".$age ."' , '".$email."' , '".$password."','".$adresse."','".$numtel."')") 
or die(mysqli_error($bdd));*/

$sql=$bdd->prepare("INSERT INTO réserver(iduser,idVehicule,idDevis,DateDebutRese,DateFinRese,DureeLocationRese,PrixParJourRese) VALUES (".$iduser.", ".$idvehicule.", ".$iddevis ." , '".$datedebut."' , '".$datefin."','".$duree."','".$prix."')");
$sql->execute();
}
			if(isset($_POST['datedebut'])   ){
			     $datedebut=$_POST['datedebut'];
				 $datefin=$_POST['datefin'];
				 $duree=$_POST['duree'];
				 
				
				// echo $nom."/".$prenom."/".$sexe."/".$adresse."/".$date."/".$service;
				ajoutreservation($bdd,$idcli,$idvehi,$iddevis,$datedebut,$datefin,$duree,$prix);
				  header('Location: affichreservationclient.php?idclient='.$idcli.'');
			}
	}
			?>