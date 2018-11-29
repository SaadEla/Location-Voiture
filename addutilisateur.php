<?php
include("connexion.php");
			if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['numtel'])  && isset($_POST['adresse'])  && isset($_POST['age'])  && isset($_POST['password1'])){
			     $nom=$_POST['nom'];
				 $prenom=$_POST['prenom'];
				 $age=$_POST['age'];
				 $email=$_POST['email'];
				 $password=$_POST['password1'];
				 $numtel=$_POST['numtel'];
				 $adresse=$_POST['adresse'];
				
				// echo $nom."/".$prenom."/".$sexe."/".$adresse."/".$date."/".$service;
				ajoutclient($bdd,$nom,$prenom,$age,$email,$password,$numtel,$adresse);
				  header('Location: login_1.php');
			}
			?>