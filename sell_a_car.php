<?php
  include 'header2.php';
  ?>
<?php

  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "locationvoiture");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['finenfin'])) {
	 $titre=$_POST['titre'];
	 $prix=$_POST['prix'];
	 $idcarac=3;
	 $description=$_POST['description'];
	 $marque=$_POST['marque'];
	 $etat=$_POST['etat'];
	 $modele=$_POST['modele'];
     $carburant=$_POST['carburant'];
     $couleur=$_POST['couleur'];
     $annee=$_POST['annee'];
     $nbporte=$_POST['nbporte'];
     $categorie=$_POST['categorie'];
     $boite=$_POST['boite'];
     $nbplace=$_POST['nbplace'];
	 $litrereservoir=$_POST['litrereservoir'];
	 
	 

   $options='';
// Loop to store and display values of individual checked checkbox.
     foreach($_POST['options'] as $selected){
		 
     $options=$selected."/".$options;
      }


  	// Get image name
	 for($x=0; $x<count($_FILES['image']['tmp_name']); $x++ ) {
  	      $image = $_FILES['image']['name'][$x];
		    /*$file_name = $_FILES['image']['name'][$x];
            $file_size = $_FILES['image']['size'][$x];
            $file_tmp  = $_FILES['image']['tmp_name'][$x];*/
  	// Get text
//  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);
    if($x==0){
		
		$sqll="INSERT INTO caracteristiques (NbPorte,NbPlace,NbreLitreReservoir) VALUES ('$nbporte', '$nbplace', '$litrereservoir')";
		mysqli_query($db, $sqll);
		//$idcarac=3;
		$sqlll="SELECT idCaracteristique FROM caracteristiques ORDER BY idCaracteristique DESC LIMIT 1";
		if($result = mysqli_query($db, $sqlll)){
	 if(mysqli_num_rows($result) > 0){
		  while($row = mysqli_fetch_array($result)){
			  $idcarac=$row['idCaracteristique'];
		//header('Location: index.php');
  	 $sqlll = "INSERT INTO voiture (TitleVoiture,DescriptionVoiture,MarqueVehicule,ModeleVehicule,idCaracteristique,prix,CarburantVehicule,CouleurVehicule,AnneeVehicule,CategorieVehicule,Boite,EtatVehicule,Options,images1) VALUES ('$titre','$description','$marque','$modele',$idcarac,'$prix','$carburant','$couleur','$annee','$categorie','$boite','$etat','$options','$image')";
      //,CarburantVehicule,CouleurVehicule,AnneeVehicule,CategorieVehicule,Boite,ModeleVehicule,Etat,MarqueVehicule,	
	 	 //,'$carburant','$couleur','$annee','$categorie','$boite','$modele','$etat','$marque',
	
	mysqli_query($db, $sqlll);
		}}}
	}else if($x==1){
		$sql="SELECT idVehicule FROM voiture ORDER BY idVehicule DESC LIMIT 1";
		if($result = mysqli_query($db, $sql)){
	 if(mysqli_num_rows($result) > 0){
		  while($row = mysqli_fetch_array($result)){
			  $id=$row['idVehicule'];
			  
		$sqll = "UPDATE voiture SET images2='$image' WHERE idVehicule=".$id."";
		mysqli_query($db, $sqll);
		
		//header('Location: index.php');
		}}}
	}else{
		$sql="SELECT idVehicule FROM voiture ORDER BY idVehicule DESC LIMIT 1";
		if($result = mysqli_query($db, $sql)){
	 if(mysqli_num_rows($result) > 0){
		  while($row = mysqli_fetch_array($result)){
			  $id=$row['idVehicule'];
			  //header('Location: index.php');
		$sql = "UPDATE voiture SET images3='$image' WHERE idVehicule=".$id."";
		mysqli_query($db, $sql);
		}}}
	}
  	// execute query
  	

  	if (move_uploaded_file($_FILES['image']['tmp_name'][$x], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
	 }}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>

		<!-- Main content -->
		<div id="wrap-body" class="p-t-lg-45">
			<div class="container">
				<div class="wrap-body-inner">
					<!-- Breadcrumb-->
					<div class="hidden-xs">
						<div class="row">
							<div class="col-lg-6">
								<ul class="ht-breadcrumb pull-left">
									<li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
									<li class="home-act"><a href="#">Véhicule</a></li>
									<li class="active">Ajout d'un Véhicule</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Sell a car -->
					<form method="POST" action="#" enctype="multipart/form-data">
					<section class="m-t-lg-30 m-t-xs-0 m-b-lg-50">
						<div>
							<div class="row">
								<div class="col-md-9 col-lg-9">
									<div class="bg-gray-f5 bg1-gray-15 p-lg-30 p-xs-15">
									
										<!-- Car infomation-->
										<div class="m-b-lg-10">
											<div class="heading-1">
												<h3>Information sur le véhicule</h3>
											</div>
											<p class="m-b-lg-20">Saisir un titre qui convient au Véhicule que vous souhaitez ajouter</p>
											<div class="row">
												<div class="col-sm-12 col-md-12 col-lg-12">
													<div class="form-group">
														<input type="text" class="form-control form-item" name="titre" placeholder="Title">
														<p class="color1-8 m-t-lg-5 f-14">Maximum 100 caractères</p>
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-6">
													<div class="form-group">
														<input type="text" class="form-control form-item" name="prix" placeholder="Price">
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-6">
													<div class="form-group">
														<input type="text" class="form-control form-item" name="litrereservoir" placeholder="Nombre Litre Reservoir">
													</div>
												</div>
												<div class="col-md-12 col-lg-12">
													<div class="form-group">
														<textarea class="form-control h-200 form-item m-b-lg-5" name="description" placeholder="Description" rows="3"></textarea>
														<p class="color1-8 m-t-lg-5 f-14">Maximum 500 caractères</p>
													</div>
												</div>
											</div>
										</div>
										<!-- Upload images -->
										
										<div class="m-b-lg-40">
											<div class="heading-1">
												<h3>Ajouter Images</h3>
											</div>
											<p class="m-b-lg-20">Inserez des images convenables a ce Véhicule</p>
											<div class="row">
												<!-- Upload image -->
												<div class="col-sm-4 col-md-4 col-lg-3 m-b-lg-20 text-left">
													<!--<img src="images/b-img-1.jpg" alt="image">-->
													<label for="file-upload" class="placeholder-img choose-file-upload ">
															<i class="fa fa-link m-r-lg-5"></i>Choisir Un fichier
															<input id="file-upload" type="file" name="image[]" class="display-none"/>
														</label>
													<i class="remove-img fa fa-remove"></i>
												</div>
												<div class="col-sm-4 col-md-4 col-lg-3 m-b-lg-20 text-left">
													<!--<img src="images/b-img-1.jpg" alt="image">-->
													<label for="file-upload1" class="placeholder-img choose-file-upload ">
															<i class="fa fa-link m-r-lg-5"></i>Choisir Un fichier
															<input id="file-upload1" type="file" name="image[]" class="display-none"/>
														</label>
													<i class="remove-img fa fa-remove"></i>
												</div>
												<!--<div class="col-sm-4 col-md-4 col-lg-3 m-b-lg-20 text-left">
													<!--<img src="images/b-img-1.jpg" alt="image">-->
													<!--<label for="file-upload12" class="placeholder-img choose-file-upload ">
															<i class="fa fa-link m-r-lg-5"></i>Choose file
															<input id="file-upload12" type="file" name="image[]" class="display-none"/>
														</label>
													<i class="remove-img fa fa-remove"></i>
												</div>-->
												<div class="col-sm-4 col-md-4 col-lg-3 m-b-lg-20 text-left">
													<!--<img src="images/b-img-1.jpg" alt="image">-->
													<label for="file-upload2" class="placeholder-img choose-file-upload ">
															<i class="fa fa-link m-r-lg-5"></i>Choisir Un fichier
															<input id="file-upload2" type="file" name="image[]" class="display-none"/>
														</label>
													<i class="remove-img fa fa-remove"></i>
												</div>
											<!--	<div class="col-sm-4 col-md-4 col-lg-3 m-b-lg-20 text-left">
													<img src="images/b-img-1.jpg" alt="image">
													<label for="file-upload3" class="placeholder-img choose-file-upload ">
															<i class="fa fa-link m-r-lg-5"></i>Choose file
															<input id="file-upload3" type="file" class="display-none"/>
														</label>
													<i class="remove-img fa fa-remove"></i>
												</div>-->
											</div>
											<button name="upload" type="submit" class="ht-btn ht-btn-default"><i class="fa fa-plus"></i>Ajouter image</button>
										</div>
										
										<!-- Car details -->
										<div class="m-b-lg-20">
											<div class="heading-1">
												<h3>Détails sur le Véhicule </h3>
											</div>
											<p class="m-b-lg-20">Remplissez toutes les informations a propos du véhicule</p>
											<div class="row">
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
												<!--	<div class="select-wrapper">
														<div class="dropdown">
														

  
															<button class="dropdown-toggle form-item" type="button" name="etat" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Etat Véhicule
																</button>
																<input type="hidden" id="search-type" name="etat">-->
															<select class="dropdown-toggle form-item" name="etat" id="etat">
																<option value="">Etat</option>
																<option value="WW">WW</option>
																<option value="Vehicule utilise">Véhicule Utilisé</option>
																<!--<li>Car Rental</li>-->
															</select>
														<!--</div>
													</div>-->
												</div>
												
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
												<!--	<div class="select-wrapper">
														<!--<div class="dropdown">
												<!--		
															<button class="dropdown-toggle form-item" type="button" name="marque" id="marque" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Marque
																</button>
																<input type="hidden" id="marque" name="marque">-->
															<select   class="dropdown-toggle form-item" name="marque" id="marque" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
																<option value="">Marque</option>
																<option value="Ford">Ford</option>
																<option value="Renault"  >Renault</option>
																<option value="Hyundai">Huyndai</option>
																<option value="Peugeot">Peugeot</option>
																<option value="RangeRover">Range Rover</option>
																<option value="Kia">Kia</option>
																<option value="Mazda">Mazda</option>
																<option value="BMW">BMW</option>
																<option value="Toyota">Toyota</option>
																<option value="Mercedes-BENZ">Mercedes Benz</option>
															
																<!--<li>All</li>-->
															</select>
														<!--</div>
													</div>-->
												</div>
													
													
												
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
													<!--<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" name="modele" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Modele
																</button>
																<input type="hidden" id="search-type" name="modele">-->
															<select class="dropdown-toggle form-item" name="modele" id="modele" >

															<?php
												 // If upload button is clicked ...
                                    //if (!empty($_POST['s'])) {
										/*
										$marque=$_POST['user'];
									$sql="SELECT mo.nomModele FROM marque ma,modele mo WHERE ma.idMarque=mo.idMarque and ma.nomMarque='".$marque."'";
		if($result = mysqli_query($db, $sql)){
	 if(mysqli_num_rows($result) > 0){
		  while($row = mysqli_fetch_array($result)){
		
	
										
										*/
										
										
										?>
									<!--	<li name="modele"><?php //echo $row['nomModele'];?></li>-->
										<?php 	//}}}
	?>
	<?php //}
									?>
																<option value="">Modele</option>
																<option value="Clio4">CLIO 4</option>
																<option value="Fiesta">FIESTA</option>
																<option value="i10">i10</option>
																<option value="301">301</option>
																<option value="C220">C220</option>
																<option value="Evoque">EVOQUE</option>
																<option value="Sport">SPORT</option>
																<option value="208">208</option>
																<option value="Yaris" >YARIS</option>
																<option value="Cherokee">CHEROKEE</option>
																<option value="Picanto">PICANTO</option>
															<!--	<li>All</li>-->
															</select>
									<!--
														</div>
													</div>-->
												</div>
												
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
												<!--	<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" type="button" name="annee" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Année
																</button>
																<input type="hidden" id="search-type" name="annee">-->
															<select name="annee" id="annee" class="dropdown-toggle form-item">
															    <option value="">Année</option>
																<option value="2018">2018</option>
																<option value="2017">2017</option>
																<option value="2016">2016</option>
																<option value="2015">2015</option>
																<option value="2014">2014</option>
																<option value="2013">2013</option>
																<option value="2012">2012</option>
																<!--<li>All</li>-->
															</select>
														<!--</div>
													</div>-->
												</div>
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
													<!--<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" type="button" name="categorie" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Type
																</button>
																<input type="hidden" id="search-type" name="categorie" >-->
															<select class="dropdown-toggle form-item" name="categorie" id="categorie">
																<option value="">Type</option>
																<option value="Berline">Berline</option>
																<option value="Voiture_a_hayon_arriere" >Voiture à hayon arrière</option>
																<option value="Break(familiale)">Break (familiale)</option>
																<option value="Coupe">Coupé</option>
																<option value="Cabriolet">Cabriolet</option>
																<option value="Vehicule_a_usages_multiples">Véhicule à usages multiples</option>
																
															</select>
														<!--</div>
													</div>-->
												</div>
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
													<!--<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" type="button" name="boite" id="dropdownMenu6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Boite
																</button>
																<input type="hidden" id="search-type" name="boite">-->
															<select class="dropdown-toggle form-item" name="boite" id="boite">
																<option value="">Boîte</option>
																<option value="Automatique">Automatique</option>
																<option  value="Manuelle">Manuelle</option>
																<option  value="Semi_Automatique">Semi-automatique</option>
																
															</select>
														<!--</div>
													</div>-->
												</div>
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
													<!--<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" name="carburant" type="button" id="dropdownMenu7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Carburant
																</button>
																<input type="hidden" id="search-type" name="carburant" >-->
															<select class="dropdown-toggle form-item" name="carburant" id="carburant" >
																<option value="">Carburant</option>
																<option value="Hybrid">Hybrid</option>
																<option value="Essence">Essence</option>
																<option value="Electrique">Electrique</option>
																<option value="Diesel">Diesel</option>
																
															</select>
														<!--</div>
													</div>-->
												</div>
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
												<!--	<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" name="nbplace" type="button" id="dropdownMenu8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Nombre de Place
																</button>
																<input type="hidden" id="search-type" name="nbplace">-->
															<select class="dropdown-toggle form-item" name="nbplace" id="nbplace">
															    <option value="">Nombre de Place</option>
																<option value="2">2</option>
																<option  value="3">3</option>
																<option  value="4">4</option>
																<option  value="5">5</option>
															</select>
														<!--</div>
													</div>-->
												</div>
												
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
													<!--<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item"  name="couleur" type="button" id="dropdownMenu9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Couleur
																</button>
																<input type="hidden" id="search-type" name="couleur">-->
															<select class="dropdown-toggle form-item" name="couleur" id="couleur" default="Couleur">
																<option value="">Couleur</option>
																<option value="Rouge">Rouge</option>
																<option value="Bleu">Bleu</option>
																<option value="Blanc">Blanc</option>
																<option value="Noir">Noir</option>
																<option value="Gris">Gris</option>
																<option value="Marron">Marron</option>
															</select>
													<!--	</div>
													</div>-->
												</div>
												<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
													<!--<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" type="button" name="nbporte" id="dropdownMenu10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Nombre de porte
																</button>
																<input type="hidden" id="search-type" name="nbporte">-->
															<select class="dropdown-toggle form-item" name="nbporte" id="nbporte">
																<option value="">Nombre de Porte</option>
																<option value="2">2</option>
																<option  value="3">3</option>
																<option  value="4">4</option>
																<option  value="5">5</option>
															</select>
														<!--</div>
													</div>-->
												</div>
												<!--<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
													<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" type="button" id="dropdownMenu11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Mileage
																</button>
															<ul class="dropdown-menu" aria-labelledby="dropdownMenu11">
																<li>0 - 1,000</li>
																<li>1,000 - 10,000</li>
																<li>10,000 - 20,000</li>
																<li>20,000 - 30,000</li>
																<li>30,000 - 40,000</li>
																<li>40,000 - 50,000</li>
															</ul>
														</div>
													</div>
												</div>-->
											<!--	<div class="col-sm-6 col-md-4 col-lg-4 m-b-lg-20">
													<div class="select-wrapper">
														<div class="dropdown">
															<button class="dropdown-toggle form-item" type="button" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																	Warranty
																</button>
															<ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
																<li>1 year</li>
																<li>2 year</li>
																<li>3 year</li>
																<li>4 year</li>
															</ul>
														</div>
													</div>
												</div>
											</div>-->
										</div>
										</div>
										
										
										
										<!-- Features & options -->
										
										<div class="m-b-lg-30">
											<div class="heading-1">
												<h3>Features & Options</h3>
											</div>
											<p class="m-b-lg-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit et dolore magna aliqua</p>
											<div class="row">
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox"  name="options[]" value="Auxiliaire" id="check0">
														<label for="check0" class="fa fa-check"></label> Auxiliaire
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" name="options[]" value="Bluetooth" id="check1">
														<label for="check1" class="fa fa-check"></label> Bluetooth
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" name="options[]" value="MP3" id="check2">
														<label for="check2" class="fa fa-check"></label> MP3
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" name="options[]" value="Jantes Aluminuim" id="check3">
														<label for="check3" class="fa fa-check"></label> Jante Aluminuim
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" name="options[]" value="Retroviseur Electrique" id="check4">
														<label for="check4" class="fa fa-check"></label> Retroviseur Electrique
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" name="options[]" value="GPS" id="check5">
														<label for="check5" class="fa fa-check"></label> GPS
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" name="options[]" value="Fermeture centralise" id="check6">
														<label for="check6" class="fa fa-check"></label> Fermeture centralisé
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" name="options[]" value="Camera de Recul" id="check7">
														<label for="check7" class="fa fa-check"></label> Camere de Recul
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" name="options[]" value="Toit Panoramique" id="check8">
														<label for="check8" class="fa fa-check"></label> Toit Panoramique
													</div>
												</div>
												<!--<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" value="" id="check9">
														<label for="check9" class="fa fa-check"></label> Navigation system
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" value="" id="check10">
														<label for="check10" class="fa fa-check"></label> Sports package
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" value="" id="check11">
														<label for="check11" class="fa fa-check"></label> Panoramic roof
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" value="" id="check12">
														<label for="check12" class="fa fa-check"></label> Central locking
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" value="" id="check13">
														<label for="check13" class="fa fa-check"></label> Sports suspension
													</div>
												</div>
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" value="" id="check14">
														<label for="check14" class="fa fa-check"></label> Parking sensors
													</div>
												</div>
											</div>
										</div>-->
										<!-- Technical sepecifications -->
									<!--	<div class="m-b-lg-20">
											<div class="heading-1">
												<h3>TECHNICAL SPECIFICATIONS</h3>
											</div>
											<p class="m-b-lg-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit et dolore magna aliqua</p>
											<div class="row">
												<div class="col-lg-4 text-left">
													<div class="checkbox">
														<input type="checkbox" value="" id="check15">
														<label for="check15" class="fa fa-check"></label> Auxiliary heating
													</div>
												</div>
											</div>
										</div>-->
										<!-- Contact details -->
								<!--		<div class="m-b-lg-20">
											<div class="heading-1">
												<h3>Contact Details</h3>
											</div>
											<p class="m-b-lg-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit et dolore magna aliqua</p>
										<!--	<form>-->
									<!--			<div class="row">
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Your Name">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Email">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Phone">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Address">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Website">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Other link">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Country">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="City">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Location">
														</div>
													</div>
													<div class="col-md-6 col-lg-6">
														<div class="form-group">
															<input type="email" class="form-control form-item" placeholder="Location">
														</div>
													</div>-->
													<div class="col-lg-4 m-t-lg-10"><button type="submit" name="finenfin" class="ht-btn ht-btn-default">Valider l'Ajout</button></div>
												<br><br>
												</div>
											<!--</form>-->
										</div>
									</div>
								</div>
						<!--		<div class="col-md-3">
									<!-- Trouble Uploading -->
								<!--	<div class="m-t-xs-30">
										<div class="heading-1">
											<h3>Trouble Uploading?</h3>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
										</p>
										<ul class="list-default">
											<li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
										</ul>
								<!--	</div>
								</div>-->
							</div>
						</div>
					</section>
					</form>
				</div>
			</div>
		</div>
		<?php
		include 'footer.php';
		?>
	</div>
	<!-- jQuery -->
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<!-- JqueryUI -->
	<script src="js/jquery/jquery-ui.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<!--magnific popup-->
	<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- Jquery.counterup -->
	<script src="js/jquery.counterup/waypoints.min.js"></script>
	<script src="js/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- Owl-coursel -->
	<script src="js/owl-coursel/owl.carousel.js"></script>
	<!-- Script -->
	<script src="js/script.js"></script>
</body>

</html>