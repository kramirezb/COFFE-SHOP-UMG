<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>COFFE SHOP UMG</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
	    <link rel="stylesheet" href="assets/css/lightbox.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
	
    <body class="">
		<!-- HEADER -->
		<header class="header-style-1">
			<?php include('includes/top-header.php');?>
			<?php include('includes/main-header.php');?>
			<?php include('includes/menu-bar.php');?>
		</header>
		<!-- HEADER END -->

		<!-- BODY CONTENT -->
		<div class="body-content outer-top-xs">
			<div class="container">
				<div class="furniture-container homepage-container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
							<!-- SIDEBAR -->
							<?php include('includes/side-menu.php');?>
							<!-- SIDEBAR END -->
						</div><!-- /.sidemenu-holder -->	
						
						<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
							<!-- SECTION - HERO -->
							<div id="hero" class="homepage-slider3">
								<!-- Owl Carousel -->
							</div><!-- /#hero -->

							<!-- INFO BOXES -->
							<div class="info-boxes wow fadeInUp">
								<!-- Info Boxes Content -->
							</div><!-- /.info-boxes -->

							<!-- TABS -->
							<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs wow fadeInUp">
								<!-- Tabs Content -->
							</div><!-- /#product-tabs-slider -->
							
							<!-- FEATURED PRODUCTS SECTION -->
							<!-- <section class="section featured-product inner-xs wow fadeInUp">
								<h3 class="section-title">Featured Products</h3>
								<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
									<?php
										// PHP code to fetch and display featured products
									?>
								</div>
							</section> -->
							<!-- END FEATURED PRODUCTS SECTION -->
							
						</div><!-- /.homebanner-holder -->
					</div><!-- /.row -->

					<!-- REMOVED SCROLL TABS AND OTHER SECTIONS FOR SIMPLICITY -->

					<!-- FOOTER -->
					<?php include('includes/footer.php');?>
					<!-- FOOTER END -->
				</div><!-- /.furniture-container -->
			</div><!-- /.container -->
		</div><!-- /.body-content -->
		<!-- BODY CONTENT END -->

		<!-- JS Scripts -->
		<script src="assets/js/jquery-1.11.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/echo.min.js"></script>
		<script src="assets/js/jquery.easing-1.3.min.js"></script>
		<script src="assets/js/bootstrap-slider.min.js"></script>
	    <script src="assets/js/jquery.rateit.min.js"></script>
	    <script src="assets/js/lightbox.min.js"></script>
	    <script src="assets/js/bootstrap-select.min.js"></script>
	    <script src="assets/js/wow.min.js"></script>
		<script src="assets/js/scripts.js"></script>
		<!-- JS Scripts END -->
	</body>
</html>
