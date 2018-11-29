<?php




function ajoutclient($bdd,$nom,$prenom,$age,$email,$password,$numtel,$adresse){
/*mysqli_query($bdd,"INSERT INTO client(NomClient,PrenomClient,AgeClient,LoginClient,MdpClient,AdresseClient,NumTelClient) VALUES ('".$nom."', '".$prenom."', '".$age ."' , '".$email."' , '".$password."','".$adresse."','".$numtel."')") 
or die(mysqli_error($bdd));*/

$sql=$bdd->prepare("INSERT INTO client(NomClient,PrenomClient,AgeClient,LoginClient,MdpClient,AdresseClient,NumTelClient) VALUES ('".$nom."', '".$prenom."', '".$age ."' , '".$email."' , '".$password."','".$adresse."','".$numtel."')");
$sql->execute();
}

function ajoutreservation($bdd,$iduser,$idvehicule,$iddevis,$datedebut,$datefin,$duree,$prix){
/*mysqli_query($bdd,"INSERT INTO client(NomClient,PrenomClient,AgeClient,LoginClient,MdpClient,AdresseClient,NumTelClient) VALUES ('".$nom."', '".$prenom."', '".$age ."' , '".$email."' , '".$password."','".$adresse."','".$numtel."')") 
or die(mysqli_error($bdd));*/

$sql=$bdd->prepare("INSERT INTO réserver(iduser,idVehicule,idDevis,DateDebutRese,DateFinRese,DureeLocationRese,PrixParJourRese) VALUES (".$iduser.", ".$idvehicule.", ".$iddevis ." , '".$datedebut."' , '".$datefin."','".$duree."','".$prix."')");
$sql->execute();
}

/*function affichemploye($bdd){
	$sql=mysqli_query($bdd,"select e.code,e.nom,e.prenom,e.sexe,e.adresse,e.dateNaissance,s.designationServ from employes e,services s where e.numServ=s.numServ") 
or die(mysqli_error($bdd));}
*/

function findname($bdd,$em,$pass){
$req=$bdd->prepare('select NomClient,iduser from client where LoginClient=:e and MdpClient=:p');
$req->execute(array(
      'e'=>$em,
	  'p'=>$pass
	  ));
return $req;}

function exist($bdd,$em,$pass){
$req=$bdd->prepare('select iduser from client where LoginClient=:e and MdpClient=:p');
$req->execute(array(
	'e'=>$em,
	'p'=>$pass
	));
$count = $req->rowCount();
return $count;
}

function existadmin($bdd,$em,$pass){
$req=$bdd->prepare('select idadmin,NomAdmin from administrateur where LoginAdmin=:e and MdpAdmin=:p');
$req->execute(array(
	'e'=>$em,
	'p'=>$pass
	));
$count = $req->rowCount();
return $count;
}

function affichclient($bdd){
$req=$bdd->prepare('select * from client ');
$req->execute();
return $req;
}

?>


?>