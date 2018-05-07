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
	 <script src="<?php echo base_url('assets/tinymce/tinymce.min.js');?>"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body class="preloader3 light_header header_on_side site_boxed">
	<div id="preloader">
		<div class="spinner">
			<div class="sk-dot1"></div><div class="sk-dot2"></div>
			<div class="rect3"></div><div class="rect4"></div>
			<div class="rect5"></div>
		</div>
	</div>

	<div id="main_wrapper">
		<header id="site_header">
			<div class="topbar"><!-- class ( topbar_colored  ) -->
				<div class="content clearfix">
					<div class="top_details clearfix f_left">
						<div class="languages-select languages-drop">
							<span><i class="ico-globe4"></i><span>English</span></span>
							<div class="languages-panel">
								<ul class="languages-panel-con">
									<li class="active"><a href="#">English <i class="ico-check lang_checked"></i></a></li>
									<li><a href="#">RTL</a></li>
								</ul>
							</div>
						</div>
						<span class="top_login">
							<i class="icon ico-key3"></i><a class="popup-with-move-anim" href="#login-popup">Login</a>
						</span>
						<div class="zoom-anim-dialog small-dialog mfp-hide" id="login-popup">
							<form class="login_form_colored">
								<div class="lfc_user_row">
									<span class="lfc_header">Login to your Account</span>
								</div>
								<div class="lfc_user_row">
									<label for="login_user_name">
										<span class="lfc_alert"></span>
										<i class="lfc_icon ico-user5"></i>
										<input type="text" name="login_user_name" id="login_user_name">
									</label>
								</div>
								<div class="lfc_user_row">
									<label for="login_password">
										<span class="lfc_alert"></span>
										<i class="lfc_icon ico-key3"></i>
										<input type="password" name="login_password" id="login_password">
									</label>	
								</div>
								<div class="lfc_user_row clearfix">
									<div class="my_col_half">
										<label for="rememberme">
											<span class="remember-box">
												<input type="checkbox" id="rememberme" name="rememberme">
												<span>Remember me</span>
											</span>
										</label>
									</div>
									<div class="my_col_half clearfix">
										<button type="submit" name="login" class="send_button f_right upper">
											Sign in
										</button>
									</div>
								</div>
								<a class="lfc_forget_pass" href="#">Forgot Your Password?</a>
							</form>
						</div>
					</div>
				</div>
				<!-- End content -->
				<span class="top_expande not_expanded">
					<i class="no_exp ico-angle-double-down"></i>
					<i class="exp ico-angle-double-up"></i>
				</span>
			</div>
			<!-- End topbar -->

			<div id="side_heder">
				<div id="side_heder_in">
					<div id="navigation_bar">
						<div class="content">
							<div id="logo">
								<a href="index.html">
									<img class="logo_dark" src="images/logo-dark.png" alt="Enar Logo">
									<img class="logo_light" src="images/logo-light.png" alt="Enar Logo">
								</a>
							</div>

							<nav id="main_nav">
								<div id="nav_menu">
									<span class="mobile_menu_trigger">
										<a href="#" class="nav_trigger"><span></span></a>
									</span>		
									<ul id="navy" class="clearfix">
										<li class="normal_menu mobile_menu_toggle current_page_item">
											<a href="index.html"><span>Home</span></a>									
										</li><li class="normal_menu mobile_menu_toggle current_page_item">
											<a href="#"><span>Data Permohonan Doa</span></a>									
										</li>
									</li><li class="normal_menu mobile_menu_toggle current_page_item">
										<a href="#"><span>Manajemen Gallery</span></a>									
									</li>
								</nav>
								<!-- End Nav -->	

								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Main Header -->	


			<!-- Tabs 1 -->
			<section class="content_section">
				<div class="content row_spacer clearfix">
					<div class="rows_container clearfix">
						<form class="hm_contact_form full_contact_form" method="post" action="<?php echo site_url('Update-Sejarah-Gereja');?>">
							<div class="col-md-12">
								<div class="main_title upper">
									<div class="row">
										<div class="col-md-10">
											<h2>
												<span class="line"><i class="ico-signup"></i></span>
												EDIT
												<span class="main_title_c1">Sejarah Gereja</span>
											</h2>
										</div>
										<div class="col-md-2">
											<h3>
												<button class="btn btn-info">SELESAI</button>
											</h3>
										</div>
									</div>
								</div>

								
								<textarea name="sejarah" id="sejarah" rows="30" cols="10">
									<?php echo $isi_sejarah;?>
								</textarea>
								<input type="hidden" name="id" value="<?php echo $id;?>">
								<input type="hidden" name="created_by" value="imanuel">
								<input type="hidden" name="update_date" value="<?php echo date('Y-m-d H:i:s');?>">
							</form>


							<!-- End Register Column -->

						</div>

					</div>
				</section>
				<!-- End Section -->
				<!-- footer -->
				<footer id="footer">
					<div class="footer_copyright">
						<div class="container clearfix">
							<div class="col-md-6">
								<span class="footer_copy_text">Copyright &copy; 2018 Powered By <a href="#">Lalikan Teknologi</a> - <a href="#">Jemaat Tarondon</a></span>
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