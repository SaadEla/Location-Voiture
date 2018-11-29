<?php
session_start();
    $idcli=$_SESSION['id'];
	$nomcli=$_SESSION['Nom'];
	?>
 
 <html lang="zxx">

<head>
<style>
.pagination {
    display: inline-block;
	 margin: 0 auto;
     width: 400px; 
}
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<style>

.navbar {
	background-color: #FFFFFF;
}
.navbar-default .navbar-nav > li > a:hover      , .navbar-default .navbar-nav > li > a:focus  , .thispage {
	border-bottom: 2px solid rgba(64,215,86,1.00);
	transition: all .15s ease-in-out;
}

.animation h1 {
	animation-duration: 3s;
    animation-name: slidein;
}


@keyframes slidein {
    from {
      margin-left: 100%;
      width: 300%;
    }
    
    to {
      margin-left: 0%;
      width: 100%;
    }
	75% {
  font-size: 300%;
  margin-left: 25%;
  width: 150%;
}
  }

.navbar .row .col-sm-1 img {
	top: 0px;
	margin-top: 0px;
	padding-top: 0px;
}
.sidebar_nav nav{
	background-color: rgba(255,255,255,1.00);
	border-radius: 5px;
	}
.sidebar_nav a:hover  , .sidebar_nav a:focus {

}
.nav .dropdown .dropdown-menu li > a:hover , .nav .dropdown .dropdown-menu li > a:focus{
	/* [disabled]background-color: rgba(64,215,86,1.00); */
	/* [disabled]padding-left: 30px; */
}

.nav .dropdown:hover > ul ,.nav .dropdown:focus > ul{
	display:block;
}


</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sell a car</title>
	<link rel="icon" href="favicon.ico">
	<!-- JqueryUI -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/boostrap/bootstrap.min.css">
	<!-- Awesome font icons -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!--magnific popup-->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" media="screen" />
	<!-- Owlcoursel -->
	<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.theme.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Padding / Margin -->
	<link rel="stylesheet" type="text/css" href="css/padd-mr.css">
	<!-- light version-->
	<link id="vers" rel="stylesheet" type="text/css" href="css/light-version.css">
	<!-- Boxed-->
	<link id="boxed" rel="stylesheet" type="text/css" href="css/boxed.css">
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>

	

</head>

<body class="bg-3">
    <!-- Preloader -->
    <div class="preloader">
        <p></p>
    </div>
    <div id="wrap" class="color1-inher">
        <!-- Header-->
        <header id="wrap-header" class="color-inher">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 hidden-xs">
                            <p class="f-14"><i class="fa fa-map-marker m-r-lg-5"></i><strong>BICARA</strong> - RUE 35 NR 10 OULFA CASABLANCA,
                                MAROC</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <ul class="pull-right">
                                <li><a href="index.php" class="icon-1"><i class="fa fa-user"></i><span>Mon Compte</span></a></li>
								<li><a href="affichreservationclient.php?idclient=<?php echo $idcli;?>" class="icon-1"><i class="fa fa-heart-o"></i><span>Reservation</span></a>
                                <li><a href="indexvisit.php" class="icon-1"><i class="fa fa-heart-o"></i><span>Deconnexion</span></a>
                                </li>
                                
                                <li class="cart-icon">
                                    <a href="#">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="badge">0</span>
                                </a>
                                    <ul class="cart-dropdown">
                                        <li class="bg-white bg1-gray-15 color-inher">
                                            <!-- Product item -->
                                            <div class="product-item">
                                                <div class="row m-lg-0">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 p-l-lg-0">
                                                        <a href="#" class="product-img"><img src="images/image3.jpg" alt="image"></a>
                                                    </div>
                                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 p-lg-0">
                                                        <div class="product-caption text-left">
                                                            <h4 class="product-name p-lg-0">
                                                                <a href="#">360 FORGED® - MESH 8</a>
                                                            </h4>
                                                            <p>1 x <strong>$126.00</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 p-lg-0">
                                                        <i class="fa fa-remove remove-cart-item"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product item -->
                                            <div class="product-item">
                                                <div class="row m-lg-0">
                                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 p-l-lg-0">
                                                        <a href="#" class="product-img"><img src="images/2.png" alt="image"></a>
                                                    </div>
                                                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 p-lg-0">
                                                        <div class="product-caption text-left">
                                                            <h4 class="product-name p-lg-0">
                                                                <a href="#">360 FORGED® - MESH 8</a>
                                                            </h4>
                                                            <p>1 x <strong>$126.00</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 p-lg-0">
                                                        <i class="fa fa-remove remove-cart-item"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-t-lg-15 p-b-lg-10">Total : <strong class="pull-right price">$202.00</strong>
                                            </div>
                                            <div class="clearfix"></div>
                                            <a href="#" class="ht-btn">Check out</a>
                                            <a href="#" class="ht-btn pull-right">View Cart</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu -->
            <div class="menu-bg">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-md-3 col-lg-3">
                            <a href="index.php" class="logo"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <div class="col-md-9 col-lg-9">
                            <div class="hotline">
                                <span class="m-r-lg-10">Pour plus de renseignement:</span>
                                <i class="fa fa-phone"></i>+212 663660530
                            </div>
                            <div class="clearfix"></div>
                            <!-- Menu -->
                            <div class="main-menu">
                                <div class="container1">
                                    <nav class="navbar navbar-default menu">
                                        <div class="container1-fluid">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                                    aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            </div>
                                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                <ul class="nav navbar-nav">
                                                    <li >
                                                        <a href="index.php"  role="button"  >Accueil</a>
                                                       <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html">Home 1</a></li>
                                                            <li><a href="index_2.html">Home 2</a></li>
                                                            <li><a href="index_3.html">Home 3</a></li>
                                                            <li><a href="index_4.html">Home 4</a></li>
                                                            <li><a href="index_5.html">Home 5</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li >
                                                        <a href="affichvehicule.php"  role="button">Locations
                                                      </a>
                                                      <!--  <ul class="dropdown-menu">
                                                            <li><a href="car_grid.html">Car Grid</a></li>
                                                            <li><a href="car_list.html">Car List</a></li>
                                                            <li><a href="car_detail.html">Car Details</a></li>
                                                            <li><a href="dealer_detail.html">Dealer detail</a></li>
                                                            <li><a href="sell_a_car.html">Sell a car</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li >
                                                        <a href="affichvehiculevente.php"  role="button" >Ventes</a>
                                                      <!--  <ul class="dropdown-menu">
                                                            <li><a href="product_grid.html">product Grid</a></li>
                                                            <li><a href="product_list.html">Prouct List</a></li>
                                                            <li><a href="product_detail.html">product Details</a></li>
                                                            <li><a href="product_cart.html">product Cart</a></li>
                                                            <li><a href="product_checkout.html">product Checkout</a></li>
                                                            <li><a href="product_wishlist.html">product Wishlist</a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li >
                                                        <a href="about.php"  role="button" >A propos</a>
                                                      <!--  <ul class="dropdown-menu">
                                                            <li><a href="about.html">About</a></li>
                                                            <li><a href="blog_1.html">Blog 1</a></li>
                                                            <li><a href="blog_2.html">Blog 2</a></li>
                                                            <li><a href="blog_detail.html">Blog detail</a></li>
                                                            <li><a href="error_404.html">Error_404</a></li>
                                                            <li><a href="login_1.html">Login 1</a></li>
                                                            <li><a href="login_2.html">Login 2</a></li>
                                                            <li><a href="register.html">Register</a></li>
                                                        </ul>
                                                    </li>-->
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- Search -->
                                    <div class="search-box">
                                        <i class="fa fa-search"></i>
                                        <form>
                                            <input type="text" name="search-txt" placeholder="Rechercher..." class="search-txt form-item">
                                            <button type="submit" name="submit" class="search-btn btn-1"><i
                                                class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
		
		<!-- MAIN-->
		<div id="wrap-body" class="p-t-lg-45">
			<div class="container">
				<div class="wrap-body-inner">
	<h2 style="color: #448aff;text-align: center;"> Reservations </h2>
 <table class="table table-striped">
     <thead>
        <tr class="row-name">
          
           <th>Nom de Véhicule</th>
           <th>Date début de réservation</th>
           <th>Date fin de réservation</th>
           <th>Durée de Location de réservation</th>
		   <th>Prix/J</th>
		   <th>Operations</th>
        </tr>
     </thead>   
     <tbody>
          
<?php 

$db_name="locationvoiture";
	$db_pass="";
	$db_user="root";
	$db_host="localhost";

	$bdd = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user, $db_pass);
	//$bdd=new PDO("mysql:host=localhost;dbname=testcours;charset=utf8","root","");
function affichreserv($bdd,$id){
$req=$bdd->prepare('select * from réserver r,voiture v WHERE v.idVehicule=r.idVehicule AND r.iduser=:a ');
$req->execute(array('a'=>$id));
return $req;
}

 if(isset($_GET['idclient'])){
$idcli=$_GET['idclient'];
 
$var=affichreserv($bdd,$idcli);

 

foreach ($var as $key){
   
	$i=$key['TitleVoiture'];
	$d=$key['DateDebutRese'];
	$m=$key['DateFinRese'];
	$p=$key['DureeLocationRese'];
	$g=$key['PrixParJourRese'];
	
	
	echo "<tr><td>".$i."</td><td>".$d."</td><td>"
	.$m."</td><td>".$p."</td><td>".$g."</td>";
	?>
	<td>
             <a class="btn btn-danger edit" href="car_detail.php?idvehi=<?php echo $key['idVehicule'];?>" aria-label="Operations">
                <p>Consulter Véhicule</p>
              </a>					  
           </td></tr>
  <?php
}}
?>
 
     </tbody>
  </table>
    

</div></div></div>		
		<!--FIN MAIN-->
		

 

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
