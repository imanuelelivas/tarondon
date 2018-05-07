<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Website Resmi Gereja Toraja Jemaat Tarondon || Klasis Makale Selatan</title>
	<meta name="author" content="imanuel, imanuel elivas, Jemaat Tarondon, Gereja Toraja " />
	<meta name="description" content="Selamat Datang Di Website Gereja Toraja Jemaat Tarondon, jemaat tarondon, tarondon, klasis makale selatan, gereja toraja, gereja toraja jemaat tarondon, lalikan, website resmi jemaat tarondon klasis makale selatan, Renungan" />
	
	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="jemaat tarondon, klasis makale, gereja toraja" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png');?>" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo base_url('assets/images/logo.png');?>" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/images/logo.png');?>" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/images/logo.png');?>" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/images/logo.png');?>" />
	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css');?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css');?>" type="text/css" media="all" />
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icon-fonts.css');?>" type="text/css" media="all" />

	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body class="preloader3 light_header">
	<div id="main_wrapper">
		<header id="site_header">

			<div id="navigation_bar">
				<div class="content">
					<div id="logo">
						<a href="<?php echo site_url('Selamat-datang.Getor');?>">
							<img class="logo_dark" src="<?php echo base_url('assets/images/logo-gereja.png');?>" alt="Enar Logo">
							<img class="logo_light" src="<?php echo base_url('assets/images/logo-gereja.png');?>" alt="Enar Logo">
						</a>
					</div>
					<nav id="main_nav">
						<div id="nav_menu">
							<span class="mobile_menu_trigger">
								<a href="#" class="nav_trigger"><span></span></a>
							</span>		
							<ul id="navy" class="clearfix">
								<li class="normal_menu mobile_menu_toggle current_page_item">
									<a href="<?php echo site_url('Selamat-datang.getor');?>"><span>Beranda</span></a>
								</li>
								<li class="normal_menu mobile_menu_toggle">
									<a href="#"><span>Tentang Kami</span></a>
									<ul>
										<li class="normal_menu"><a href="<?php echo site_url('Sejarah-gereja.getor');?>">Sejarah Gereja</a></li>
									</ul>
								</li>
								<li class="normal_menu mobile_menu_toggle">
									<a href="<?php echo site_url('Menu-Renungan.getor');?>"><span>Renungan</span></a>
								</li>
								<li class="has_mega_menu mobile_menu_toggle">
									<a href="https://www.flickr.com/photos/139534009@N06/albums" target="_blank"><span>Gallery</span></a>										
								</li>
								<li class="has_mega_menu mobile_menu_toggle">
									<a href="Permohonan-Doa.php"><span>Permohonan Doa</span></a>										
								</li>
								<li class="has_mega_menu mobile_menu_toggle">
									<a href="#"><span>Hubungi Kami</span></a>										
								</li>

							</ul>
						</div>
					</nav>

					<div class="clear"></div>
				</div>
			</div>
		</header>
		
		<!-- Our Blog Grids -->
		<section class="content_section bg_gray">
			<div class="content row_spacer no_padding">	
				<div class="main_title centered upper">
					<h2><span class="line"><i class="ico-pencil2"></i></span>KUMPULAN RENUNGAN</h2>
				</div>

				<!-- Filter Content -->
				<div class="hm_filter_wrapper masonry_posts four_blocks colored_masonry">  
					<ul class="products_filter clearfix">
				<?php
					foreach ($list_renungan as $list_renungan) {
				 ?>
					<li>
						<div class="add2cart_slide">
							<div class="add2cart_image">
									<img src="<?php echo base_url('assets/images/images-Renungan/'.$list_renungan->images_renungan)?>" alt="<?php echo $list_renungan->judul_renungan; ?>" width="381" height="156">
						</div>
						<div class="add2cart_details">
						<div class="con_cont">
							<a href="#" class="add2cart_prod_name"><b><?php echo $list_renungan->judul_renungan; ?></b></a>
							<i style="color:#48C9B0;"><?php echo $list_renungan->created_date; ?></i>
							<p><?php echo $list_renungan->isi_renungan; ?></p>
							<a href="<?php echo site_url('Detail-Renungan.getor/'.$list_renungan->id."/".$list_renungan->slug_renungan);?>" class="btn btn-primary">Baca</a>
									
								</div>
							</div>
						</div>
					</li>				
				<?php } ?>
				</ul>
				</div>
				<!-- End Filter Content -->

				<div class="content">
					<!-- Pagination -->
					<div id="pagination" class="pagination">
						<ul class="clearfix">
							<li class="prev_pagination"><a href="#"><i class="ico-arrow-left4"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next_pagination"><a href="#"><i class="ico-arrow-right4"></i></a></li>
						</ul>
					</div>
					<!-- End Pagination -->
				</div>
			</div>
		</section>
		<!-- End Our Blog Grids -->


		<!-- footer -->
		<footer id="footer">
			<div class="footer_copyright">
				<div class="container clearfix">
					<div class="col-md-6">
						<span class="footer_copy_text">Copyright &copy; 2015 Powered By <a href="#">IdealTheme</a> - <a href="#">Enar Theme</a> - All Rights Reserved</span>
					</div>
					<div class="col-md-6 clearfix">
						<ul class="footer_menu clearfix">
							<li><a href="#"><span>Tentang Kami</span></a></li>
							<li>/</li>
							<li><a href="#"><span>Renungan</span></a></li>
							<li>/</li>
							<li><a href="#"><span>Gallery</span></a></li>
							<li>/</li>
							<li><a href="#"><span>Permohonan Doa</span></a></li>
							<li>/</li>
							<li><a href="#"><span>Hubungi Kami</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer -->
		<a href="#" class="hm_go_top">Top</a>
	</div>
	<!-- End wrapper -->

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery.js');?>"><\/script>')</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/flexslider-min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
	<script src="<?php echo base_url('assets/js/isotope.pkgd.min.js');?>"></script>
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script> -->
	<script src="<?php echo base_url('assets/js/gmaps.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/progressbar.min.js');?>"></script>
	<!-- this is where we put our custom functions -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/functions.js');?>"></script>
</body>
</html>