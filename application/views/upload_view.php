<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Page Admin Website Resmi Gereja Toraja Jemaat Tarondon || Klasis Makale Selatan</title>
	<meta name="author" content="imanuel, imanuel elivas, Jemaat Tarondon, Gereja Toraja " />
	<meta name="description" content="Selamat Datang Di Website Gereja Toraja Jemaat Tarondon, jemaat tarondon, tarondon, klasis makale selatan, gereja toraja, gereja toraja jemaat tarondon, lalikan, website resmi jemaat tarondon klasis makale selatan, Renungan" />
	
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
	<script src="<?php echo base_url('assets/tinymce/tinymce.min.js');?>"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/resources/dropify/css/dropify.css'?>">
</head>
<body class="preloader3 light_header header_on_side site_boxed">
	<div id="main_wrapper">
		<header id="site_header">
			<div id="side_heder">
				<div id="side_heder_in">
					<div id="navigation_bar">
						<div class="content">
							<div id="logo">
								<a href="index.html">
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
											<a href="index.html"><span>Home</span></a>									
										</li><li class="normal_menu mobile_menu_toggle current_page_item">
											<a href="<?php echo site_url('Data-Permohonan-Doa.getor');?>"><span>Data Permohonan Doa</span></a>									
										</li>
									</li><li class="normal_menu mobile_menu_toggle current_page_item">
										<a href="<?php echo base_url('Tambah-Gallery.getor'); ?>"><span>Manajemen Gallery</span></a>									
									</li>
								</ul>
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
			<?php 
			if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');
		}
		?>
		<div class="content row_spacer clearfix">
			<div class="rows_container clearfix">
				
				<div class="row">
					<div class="col-6 offset-md-3">
						<h3>FORM UPLOAD FOTO</h3>
						<form action="<?php echo site_url('Aksi-Tambah-Gallery.getor');?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama_album">Nama Album</label>
								<select name="nama_album" class="form-control" required="">
								<option value="">-Pilih Nama Album-</option>
									<?php 
										foreach ($nama_album as $nama_album) {
										   echo "<option value='".$nama_album->slug_album."'>".$nama_album->nama_album."</option>";
										}
									?>
								</select>
							</div>
							
							<div class="form-group">
								<label for="file">File input</label>
								<input type="file" class="dropify form-control" name="filefoto" data-height="300" required>
								
							</div>
							<div class="form-group">
								<label for="keterangan">Keterangan Foto</label>
								<input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterengan foto seperti nama acara atau kegiatan (optional)">
							</div>

							<button type="submit" class="btn btn-primary">Upload</button>
						</form>
						
					</div>
				</div>
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
	<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery.js');?>"><\/script>')</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/flexslider-min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
	<script src="<?php echo base_url('assets/js/isotope.pkgd.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/progressbar.min.js');?>"></script>
	<!-- this is where we put our custom functions -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/functions.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/resources/dropify/js/dropify.js'?>"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.dropify').dropify();
		});

	</script>
</body>
</html>