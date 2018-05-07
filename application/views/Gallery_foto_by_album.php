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
	
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="jemaat tarondon, klasis makale, gereja toraja" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
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
	<style type="text/css">
		.sejarah{
			text-align: justify;
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
						<a href="index4.html">
							<img class="logo_dark" src="<?php echo base_url('assets/images/logo-gereja.png');?>" alt="tarondon Logo">
							<img class="logo_light" src="<?php echo base_url('assets/images/logo-gereja.png');?>" alt="tarondon Logo">
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
								<li class="has_mega_menu mobile_menu_toggle current_page_item">
									<a href="<?php echo base_url('Kumpulan-Foto.getor'); ?>"><span>Gallery</span></a>										
								</li>
								<li class="has_mega_menu mobile_menu_toggle">
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
       
        <section class="content_section has_top_border">
		<div class="container row_spacer">
			<div class="main_title centered upper">
				<h2><span class="line"><span class="dot"></span></span>Kumpulan foto</h2>
            </div>
            
            <div class="main_title centered upper tabs2">
            <nav class="clearfix">
							<ul class="tabs-navi">
                            <li><a href="<?php 
									echo base_url('Kumpulan-Foto.getor');
								?>"><span></span>SEMUA</a></li>
							<?php
								foreach ($list_nama_album as $list_nama_album) {
							?>
								<li><a href="<?php 
									echo base_url('Kumpulan-Foto-berdasarkan-album.getor/'.$list_nama_album->slug_album);
								?>"><span></span><?php echo $list_nama_album->nama_album; ?></a></li>

								<?php } ?>
							</ul> <!-- tabs-navi -->
                        </nav>
                        <br>
			</div>
			
			<!-- Columns Container -->
			<div class="rows_container clearfix">
				<!-- grid 12-->
				<div class="col-md-12">
					<!-- Gallery -->
					<div class="thumbs_gall_slider_con content_thumbs_gall gall_full_width clearfix">
						<div class="thumbs_gall_slider_larg owl-carousel">
                            <?php 
                            if ($list_foto_by_album==null or $list_foto_by_album_small==null) {
                               echo "<p>ALBUM INI BELUM ADA FOTO</p>";
                            }else{
                            foreach ($list_foto_by_album as $list_gallery) {
                            ?>
							<div class="item">
								<a href="<?php echo base_url('assets/images/folder_gallery/'.$list_gallery->nama_foto); ?>">
									<img src="<?php echo base_url('assets/images/folder_gallery/'.$list_gallery->nama_foto); ?>" alt="<?php echo $list_gallery->nama_foto; ?>">
								</a>
                            </div>
                            <?php } ?>
						</div>
						<div class="gall_thumbs owl-carousel">
                            <?php 
                            foreach ($list_foto_by_album_small as $list_gallery2) {
                            ?>
                            <div class="item"><img src="<?php echo base_url('assets/images/folder_gallery/'.$list_gallery2->nama_foto); ?>" alt="<?php echo $list_gallery2->nama_foto; ?>"></div>
                            <?php }} ?>
						</div>
					</div>
					<!-- End Gallery -->
				</div>
				<!-- End grid 12-->
				<div class="clear"></div>
			</div>
			<!-- End Columns Container -->
		</div>
	
        
	
    
	<!-- footer -->
	<footer id="footer">
			<div class="footer_copyright">
				<div class="container clearfix">
					<div class="col-md-6">
						<span class="footer_copy_text">Copyright &copy; <?php echo date('Y') ?> Powered By <a href="#">Gereja Toraja Jemaat Tarondon</a> - <a href="Mailto:imanuelferis@gmail.com">Lalikan Teknologi</a> - All Rights Reserved</span>
					</div>
					<div class="col-md-6 clearfix">
						<ul class="footer_menu clearfix">
							<li><a href="https://bps-gerejatoraja.org/"><span>BPS Gereja Toraja</span></a></li>
							<li>/</li>
							<li><a href="https://yamuger.or.id/"><span>YAMUGER</span></a></li>
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
		<a href="#0" class="hm_go_top"></a>
	</div>
	<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery.js');?>"><\/script>')</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/flexslider-min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
	<script src="<?php echo base_url('assets/js/isotope.pkgd.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/progressbar.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/functions.js');?>"></script>
</b0dy>
</html>