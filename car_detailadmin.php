<?php 
include 'header2.php';
if(isset($_GET['idvehi'])){
$idvehi=$_GET['idvehi'];	
}
?>
		<?php 

$db_name="locationvoiture";
	$db_pass="";
	$db_user="root";
	$db_host="localhost";

	$bdd = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user, $db_pass);
	//$bdd=new PDO("mysql:host=localhost;dbname=testcours;charset=utf8","root","");
function affichvehiculee($bdd,$idd){
$req=$bdd->prepare('select * from voiture v,caracteristiques c WHERE v.idCaracteristique=c.idCaracteristique AND v.idVehicule=:a');
$req->execute(array('a'=>$idd));
return $req;
}


 //if(isset($_GET['idvehicule'])){
//$idcli=$_GET['idvehicule'];
 
$var=affichvehiculee($bdd,$idvehi);

 

foreach ($var as $key){
   
	$i=$key['TitleVoiture'];
	$d=$key['DescriptionVoiture'];
	$m=$key['prix'];
	$image1=$key['images1'];
	$image2=$key['images2'];
	$imgae3=$key['images3'];
	$marque=$key['MarqueVehicule'];
	$modele=$key['ModeleVehicule'];
	$description=$key['DescriptionVoiture'];
	$couleur=$key['CouleurVehicule'];
	$carburant=$key['CarburantVehicule'];
	$etat=$key['EtatVehicule'];
	/*$g=$key['PrixParJourRese'];
	
	
	echo "<tr><td>".$i."</td><td>".$d."</td><td>"
	.$m."</td><td>".$p."</td><td>".$g."</td>";*/
	?>
					
		<!-- Main content -->
		<div id="wrap-body" class="p-t-lg-30">
			<div class="container">
				<div class="wrap-body-inner">
					<!-- Breadcrumb-->
					<div class="hidden-xs">
						<div class="row">
							<div class="col-lg-6">
								<ul class="ht-breadcrumb pull-left">
									<li class="home-act"><a href="#"><i class="fa fa-home"></i></a></li>
									<li class="home-act"><a href="#">Véhicule</a></li>
									<li class="home-act"><a href="#">Détails Véhicule</a></li>
									<li class="active"><?php echo $i; ?></li>
								</ul>
							</div>
						<!--	<div class="col-lg-6">
								<a href="#" class="ht-btn ht-btn-default pull-right m-t-lg-0"><i class="fa fa-upload"></i>Effectuer la réservation</a>
							</div>-->
						</div>
					</div>
					<!-- Car detail -->
					<section class="m-t-lg-30 m-t-xs-0">
						<div class="product_detail no-bg p-lg-0">
							<!-- Car name -->
							<h3 class="product-name color1-f"><?php echo $i; ?> /
								<span class="product-price color-red"><?php echo $m; ?> <i class="color-9 color1-9"> ( Dépôt de garantie Obligatoire ) </i></span>
								<span class="car-status m-l-lg-10">DISPONIBLE</span>
							</h3>
													
					
							<div class="row">
								<div class="col-md-7 col-lg-8">
									<!-- Car image gallery -->
									<div class="product-img-lg bg-gray-f5 bg1-gray-15">
										<div class="image-zoom row m-t-lg-5 m-l-lg-ab-5 m-r-lg-ab-5">
											<div class="col-md-12 col-lg-12 p-lg-5">
											<?php
											echo " <a href='images/".$key['images1']."' class='product-img'>";
											echo "<img src='images/".$key['images1']."' alt='image'>";
											?>

													</a>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 p-lg-5">
												<?php
											echo " <a href='images/".$key['images2']."' class='product-img'>";
											echo "<img src='images/".$key['images2']."' alt='image'>";
											?>
													</a>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 p-lg-5">
												<?php
											echo " <a href='images/".$key['images3']."' class='product-img'>";
											echo "<img src='images/".$key['images3']."' alt='image'>";
											?>
													</a>
											</div>
										<!--	<div class="col-sm-3 col-md-3 col-lg-3 p-lg-5">
												<a href="images/b-img-5.jpg">
														<img src="images/b-img-5.jpg" alt="image">
													</a>
											</div>
											<div class="col-sm-3 col-md-3 col-lg-3 p-lg-5">
												<a href="images/b-img-10.jpg">
														<img src="images/b-img-10.jpg" alt="image">
													</a>
											</div>-->
										</div>
									</div>
								</div>
								<!-- Car description -->
								<div class="col-md-5 col-lg-4">
									<ul class="product_para-1 p-lg-15 bg-gray-f5 bg1-gray-15">
										<li><span>Marque :</span><?php echo $marque; ?></li>
										<li><span>Modele :</span><?php echo $modele; ?></li>
										<li><span>Etat :</span><?php echo $etat; ?></li>
										<li><span>Carburant :</span><?php echo $carburant;?></li>
										<li><span>Nombre de Porte :</span><?php echo $key['NbPorte']; ?></li>
										<li><span>Boite :</span><?php echo $key['Boite']; ?></li>
										<li><span>Couleur :</span><?php echo $couleur; ?></li>
										<li><span>Année Véhicule :</span><?php echo $key['AnneeVehicule']; ?></li>
										<li><span>Catégorie :</span><?php echo $key['CategorieVehicule']; ?></li>
										<!--<li><span>Nombre de Litre pour Réservoir :</span><?php //echo $key['NbreLitreReservoir']; ?></li>-->
									</ul>
								</div>
							</div>
						</div>
						<!-- Car description tabs -->
						<div class="row m-t-lg-30 m-b-lg-50">
							<div class="col-md-8">
								<div class="m-b-lg-30">
									<div class="heading-1">
										<h3>Description</h3>
									</div>
									<div class="m-b-lg-30 bg-gray-fa bg1-gray-2 p-lg-30 p-xs-15">
										<p class="color1-9">
											<?php echo $d; ?>
										</p>
									</div>
								</div>
								<!-- Features & Options -->
								<div class="m-b-lg-30">
									<div class="heading-1">
										<h3>Equipements:</h3>
									</div>
									<div class="bg-gray-fa bg1-gray-2 p-lg-30 p-xs-15">
										<ul class="list-feature">
											<li><i class="fa fa-check"></i>Auxiliaire</li>
											<li><i class="fa "></i>MP3</li>
											<li><i class="fa fa-check"></i>Bluetooth</li>
											<li><i class="fa fa-check"></i>Vitre Electrique</li>
											<li><i class="fa fa-check"></i>Navigation system</li>
											<li><i class="fa "></i>CD player</li>
											<li><i class="fa "></i>Toit Panoramique</li>
											<li><i class="fa fa-check"></i>Fermeture centralisé</li>
											<li><i class="fa "></i>Jantes Aluminuim</li>
											<li><i class="fa fa-check"></i>Camere de recul</li>
										</ul>
									</div>
								</div>
								<!-- Technical Specifications -->
								<div class="m-b-lg-0">
									<div class="heading-1">
										<h3>Fiche Technique</h3>
									</div>
									<div class="bg-gray-fa bg1-gray-2 p-lg-30 p-xs-15">
										<!--<div class="heading-1">
											<h3 class="f-18">Engine</h3>
										</div>
										<ul class="product_para-1">
											<li><span>Layout / number of cylinders :</span>Nissan</li>
											<li><span>Displacement :</span>Civic</li>
											<li><span>Engine Layout :</span>Sedan</li>
											<li><span>Horespower :</span>Mileage</li>
											<li><span>@ rpm :</span>3.4L Mid-Engine V6</li>
											<li><span>Torque :</span>3.4L Mid-Engine V6</li>
											<li><span>Compression ratio :</span>3.4L Mid-Engine V6</li>
										</ul>
										<div class="heading-1 m-t-lg-20">
											<h3 class="f-18">Performance</h3>
										</div>
										<ul class="product_para-1">
											<li><span>Top Track Speed :</span>Nissan</li>
											<li><span>0 - 60 mph :</span>Civic</li>
										</ul>-->
										<div class="heading-1 m-t-lg-20">
											<h3 class="f-18">Boite</h3>
										</div>
										<ul class="product_para-1">
											<li><span>Boite Vehicule :</span><?php echo $key['Boite']; ?></li>
										</ul>
										<div class="heading-1 m-t-lg-20">
											<h3 class="f-18">Carburant</h3>
										</div>
										<ul class="product_para-1">
											<li><span>Carburant</span><?php echo $key['CarburantVehicule']; ?></li>
											
										</ul>
										<div class="heading-1 m-t-lg-20">
											<h3 class="f-18">Réservoir</h3>
										</div>
										<ul class="product_para-1">
											<li><span>Nombre de Litre pour Réservoir :</span><?php echo $key['NbreLitreReservoir'];?></li>
											<!--<li><span>Width :</span>Civic</li>
											<li><span>Height :</span>Sedan</li>
											<li><span>Wheelbase :</span>Mileage</li>
											<li><span>Maximum payload :</span>3.4L Mid-Engine V6</li>-->
										</ul>
									</div>
								</div>
							</div>
							<!-- Dealer Infomation -->
							<div class="col-sm-12 col-md-4 col-lg-4">
								<div class="heading-1">
									<h3><i class="fa fa-info-circle"></i>Contactez Nous</h3>
								</div>
								<a href="#" class="bg-gray-fa bg1-gray-2 p-lg-15 text-center m-b-lg-20 display-block">
										<img src="images/logo.png" alt="image">
									</a>
								<h4 class="p-t-lg-0"><a href="#">Info/ Renseignement:</a></h4>
								<div class="clearfix"></div>
								<ul class="list-default m-t-lg-0">
									<li><i class="fa fa-user-circle-o m-r-lg-10  icon"></i>Mr. Bensaleh Mehdi</li>
									<li><i class="fa fa-phone m-r-lg-10 icon"></i>06 63 66 05 30 </li>
									<li><i class="fa fa-envelope-o m-r-lg-10 icon"></i>bensaleh.mehdi@gmail.com</li>
									<li><i class="fa fa-home m-r-lg-10 icon"></i>Rue 35 NR 10 OULFA CASABLANCA - MAROC</li>
									<li class="view-map"><i class="fa fa-map-marker m-r-lg-10 icon"></i>Regardez Notre localisation</li>
									<li><a href="#"><i class="fa fa-globe m-r-lg-10 icon"></i>http://www.casarentcar.com</a></li>
								</ul>
								<!-- Form contact dealer-->
								<div class="m-t-lg-30">
									<div class="heading-1">
										<h3><i class="fa fa-envelope-o"></i>Envoyer un message</h3>
									</div>
									<div class="bg-gray-fa bg1-gray-2 p-lg-20">
										<form>
											<div class="form-group">
												<input type="email" class="form-control form-item" placeholder="Email">
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-item" placeholder="Telephone">
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-item" placeholder="Adresse">
											</div>
											<textarea class="form-control form-item h-200 m-b-lg-10" placeholder="Cntenu du message" rows="3"></textarea>
											<button type="submit" class="ht-btn ht-btn-default">Envoyer</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Other cars -->
						<div class="product product-grid product-grid-2 car m-b-lg-15">
							<div class="heading">
								<h3>Autres Véhicules</h3>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-4">
									<!-- Product item -->
									<div class="product-item hover-img">
										<a href="#" class="product-img">
												<img src="images/image11.jpg" alt="image">
											</a>
										<div class="product-caption">
											<h4 class="product-name">
												<a href="#">HYUNDAI ELANTRA 2017 Nouveau Modele </a><span class="f-18"> 500,00DH</span>
											</h4>
										</div>
										<ul class="absolute-caption">
											<li><i class="fa fa-clock-o"></i>2017</li>
											<li><i class="fa fa-car"></i>Automatique</li>
											<li><i class="fa fa-road"></i>Diesel</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-4">
									<!-- Product item -->
									<div class="product-item hover-img">
										<a href="#" class="product-img">
												<img src="images/image12.jpg" alt="image">
											</a>
										<div class="product-caption">
											<h4 class="product-name">
												<a href="#">KIA CEE'D 2018 / <b>Nouveau</b></a><span class="f-18"> 350,00DH</span>
											</h4>
										</div>
										<ul class="absolute-caption">
											<li><i class="fa fa-clock-o"></i>2018</li>
											<li><i class="fa fa-car"></i>Manuelle</li>
											<li><i class="fa fa-road"></i>Diesel</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-4">
									<!-- Product item -->
									<div class="product-item hover-img">
										<a href="#" class="product-img">
												<img src="images/image13.jpg" alt="image">
											</a>
										<div class="product-caption">
											<h4 class="product-name">
												<a href="#">HYUNDAI ACCENT 2018 / <b>Nouveau</b></a><span class="f-18"> 300,00DH</span>
											</h4>
										</div>
										<ul class="absolute-caption">
											<li><i class="fa fa-clock-o"></i>2018</li>
											<li><i class="fa fa-car"></i>Manuelle</li>
											<li><i class="fa fa-road"></i>Diesel</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>

			<?php
}?>
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