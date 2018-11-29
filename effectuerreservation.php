<?php
session_start();
    $idcli=$_SESSION['id'];
	$nomcli=$_SESSION['Nom'];
	if(isset($_GET['idvehil'])){
$idvehi=$_GET['idvehil'];
$prix=$_GET['prixparj'];
$iddevis=2;	


   include 'header1.php';
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
									<li class="home-act"><a href="#">Mon Compte</a></li>
									<li class="active">Effectuer Réservation</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Register -->
					<section class="block-login m-t-lg-30 m-t-xs-0 m-b-lg-50">
						<div class="">
							<div class="row">
								<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
									<div class="heading">
										<h3>Créer Votre Compte</h3>
									</div>
									<div class="p-lg-30 p-xs-15 bg-gray-f5 bg1-gray-15">
										<p class="m-b-lg-15">Remplissez le formulaire!</p>
										<form method="post" action="addreservation.php?idvehil=<?php echo $idvehi; ?>&prixparj=<?php echo $prix; ?>">
										
											<div class="form-group">
											Date Début Réservation
												<input type="date" class="form-control form-item" name="datedebut"  placeholder="Date Début Réservation">
											</div>
											<div class="form-group">
											Date Fin Réservation
												<input type="date" class="form-control form-item" name="datefin"  placeholder="Date Fin Réservation">
											</div>
											<div class="form-group">
											Durée de la location
												<input type="text" class="form-control form-item" name="duree" placeholder="Durée de la location">
											</div>
											
											<button  name="valider" type="submit" class="ht-btn ht-btn-default">Valider</button>
										</form>
									
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<?php
	}
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