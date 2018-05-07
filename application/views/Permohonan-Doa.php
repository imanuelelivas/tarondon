<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<title>Enar | The Multi-Purpose HTML5 Template</title>
	<meta name="author" content="imanuel, ime, imanuel elivas, imanuel elifas, pia lalikan, tedong birang, pollok pondok " />
	<meta name="description" content="jemaat tarondon, tarondon, klasis makale selatan, gereja toraja, gereja toraja jemaat tarondon, lalikan, website resmi jemaat tarondon klasis makale selatan" />
	
	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="jemaat tarondon, klasis makale, gereja toraja" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
	<link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />
	
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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<style type="text/css">
	p{
		color: #000;
	}
</style>
</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body class="preloader3 light_header">

	<div id="main_wrapper">
		<header id="site_header">

			<div id="navigation_bar">
				<div class="content">
					<div id="logo">
						<a href="<?php echo site_url('Selamat-datang');?>">
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
								<li class="normal_menu mobile_menu_toggle">
									<a href="<?php echo site_url('Selamat-datang.getor'); ?>"><span>Beranda</span></a>
								</li>
								<li class="normal_menu mobile_menu_toggle">
									<a href="#"><span>Tentang Kami</span></a>
									<ul>
										<li class="normal_menu"><a href="<?php echo site_url('Sejarah-gereja.getor'); ?>">Sejarah Gereja</a></li>
									</ul>
								</li>
								<li class="normal_menu mobile_menu_toggle">
									<a href="<?php echo site_url('Menu-Renungan.getor');?>"><span>Renungan</span></a>
								</li>
								<li class="normal_menu mobile_menu_toggle">
									<a href="<?php echo site_url('Menu-Artukel.getor');?>"><span>Artikel</span></a>
								</li>
								<li class="has_mega_menu mobile_menu_toggle">
									<a href="<?php echo base_url('Kumpulan-Foto.getor'); ?>"><span>Gallery</span></a>										
								</li>
								<li class="has_mega_menu mobile_menu_toggle current_page_item">
									<a href="<?php echo site_url('Permohonan-Doa.getor')?>"><span>Permohonan Doa</span></a>										
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
		<!-- End Main Header -->
		<!-- Contact Us -->
		<section class="content_section">
			<?php 
					if($this->session->flashdata('message')){
					echo $this->session->flashdata('message');
						}
					?>
			<div class="content row_spacer no_padding">	
				<div class="rows_container clearfix">
					<h2 class="title1 upper"><i class="ico-pencil5"></i>Pemohonan Doa</h2>
					<p>Jika saudara memiliki pokok permohonan doa, silahkan mengisi form berikut</p>
					<div class="col-md-6">
						<form class="hm_contact_form" action="<?php echo base_url('index.php/Tambah-Permohonan-Doa.getor');?>" method="post">
							<div class="form_row clearfix">
								<label for="contact-us-name">
									<span class="hm_field_name">Nama</span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="form_fill_fields hm_input_text" type="text" name="nama" id="contact-us-name" placeholder="" required>
							</div>
							<div class="form_row clearfix">
								<label for="contact-us-name">
									<span class="hm_field_name">Alamat</span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="form_fill_fields hm_input_text" type="text" name="alamat" id="contact-us-name" placeholder="" required>
							</div>
							<div class="form_row clearfix">
								<label for="contact-us-mail">
									<span class="hm_field_name">Email</span>								
								</label>
								<input class="form_fill_fields hm_input_text" type="email" name="email" id="contact-us-mail" placeholder="">
							</div>
							<div class="form_row clearfix">
								<label for="contact-us-phone">
									<span class="hm_field_name">No. Telpon</span>
									<span class="hm_requires_star">*</span>
								</label>
								<input class="form_fill_fields hm_input_text" type="text" name="no_telpon" id="contact-us-phone" required>
							</div>
							<div class="form_row clearfix">
								<label for="contact-us-message">
									<span class="hm_field_name">Pokok Doa</span>
									<span class="hm_requires_star">*</span>
								</label>
								<textarea class="form_fill_fields hm_textarea" name="pokok_doa" id="contact-us-message" placeholder="silakan isi pokok doa anda disini" required></textarea>
							</div>
							<div class="form-group">
								<label>Recaptcha</label>
								<?php //echo $this->recaptcha->render(); ?>
							</div>
							<div class="form_row clearfix">
								<input type="submit" class="send_button full_button" value="submit">
							</div>
						</form>
					</div><!-- Grid -->
					<div class="col-md-6">
						<p style="text-align: center; color: #1ccdca;">TUHAN dekat pada setiap orang yang berseru kepadaNya, pada setiap orang yang berseru kepadaNya dalam kesetiaan. Ia melakukan kehendak orang-orang yang takut akan Dia, mendengarkan teriak mereka minta tolong dan menyelamatkan mereka.
							<b>Mazmur 145 : 18 -19</b></p>
							<img src="<?php echo base_url('assets/images/pray.png');?>">
						</div>
					</div>
				</div>
			</section>

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
			<a href="#0" class="hm_go_top"></a>
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