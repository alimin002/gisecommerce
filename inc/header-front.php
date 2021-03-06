
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Klinik Estetika </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="assets/themes-front/css/bootstrappage.css" rel="stylesheet"/>
			<link rel="shortcut icon" href="assets/bootstrap/img/favico.ico">
		<!-- global styles -->
		<link href="assets/themes-front/css/flexslider.css" rel="stylesheet"/>
		<link href="assets/themes-front/css/main.css" rel="stylesheet"/>
		<!---ace-1.3--->
		<link rel="stylesheet" href="x1/assets/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="x1/assets/css/ace-fonts.css"/>
		<link rel="stylesheet" href="x1/assets/css/ace.min.css" />
		<link rel="stylesheet" href="x1/assets/css/ace-rtl.min.css" />
		<!-- scripts -->
		<script src="assets/themes-front/js/jquery-1.7.2.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>				
		<script src="assets/themes-front/js/superfish.js"></script>	
		<script src="assets/themes-front/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="assets/themes-front/js/respond.min.js"></script>
		<![endif]-->
		<script src="assets/bootstrap/js/jquery.validate.js"></script>
		<script src="assets/bootstrap/js/messages_id.js"></script>
		<script>
			$(document).ready(function() {
				$("#form1").validate();
				$("#form2").validate();
			});
		</script>
		<style type="text/css">
		
			label.error {

				color: red;
			}
		</style>
		<link rel="shortcut icon" href="assets/themes-front/images/logotab.ico" />
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				<!--	<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="Contoh :Sepatu">
				</form>-->
				</div>
				<div class="span8">
					<div class="account pull-right">
						<!--menu user -->
						<ul class="user-menu">				
							<?php //echo $_SESSION['idpelanggan'];
							if(empty($_SESSION['idpelanggan'])==true){ ?>
							<li>
							<div class="nav-search" id="nav-search">
							<form class="form-search">
							<span class="input-icon">
								<input placeholder="Cari Produk ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
							</form>
							</div>
							</li>
							<lsi><a href="index.php">Homepage</a></li>  
							<li><a href="index.php?mod=user&pg=register">Register/Login</a></li>
							<li><a href="index.php?mod=page&pg=about">About Us</a></li>
							<li><a href="index.php?mod=page&pg=contact">Contac Us</a></li>
							
											
							<?php }else if(empty($_SESSION['idpelanggan'])==false){ ?>
								<li><a href="index.php?mod=chart&pg=chart">Keranjang Belanja</a></li>	
								<li><a href="index.php?mod=chart&pg=invoice">Invoice</a></li>	
								<li><a href="index.php?mod=user&pg=profil">Profil</a></li>	
								<li><a href="user/logout.php">logout</a></li>
						<?php	} ?>
						<!--<li><a href="user/logout.php">logout</a></li>	-->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu" style="background-color:black;">				
					<a href="index.php" class="logo pull-left"><img src="assets/themes-front/images/logo.png" class="site_logo" alt=""></a>
					<!-- menu kategori -->
					<nav id="menu" class="pull-right">
						<ul>
							<?php
					list_kategori(); 
					?>
						</ul>
					</nav>
				</div>
			</section>
			<?php
			if(empty($_GET['pg'])){
			?>
		<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<!--news flash/slider -->
					<ul class="slides">
						
						<li>
							<img src="upload/banner/banner-1.jpg" alt="" />
							
						</li>
						<li>
							<img src="upload/banner/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Promo Diskon</h1>
								<p><span>Sampai 50% </span></p>
								<p><span>Untuk Pembelian produk produk tertentu</span></p>
							</div>
						</li>
					</ul>
				</div>			
		</section> 
			<?php } //end of careousel ?>
			<section class="header_text">
				<strong><?php 
				if (!empty($_SESSION['nama'])){
					echo $_SESSION['nama'].", ";
					}
					?>
				</strong>Selamat datang di klinik Ashifa
			</section>