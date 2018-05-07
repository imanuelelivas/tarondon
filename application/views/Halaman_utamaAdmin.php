<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Website Resmi Gereja Toraja Jemaat Tarondon || Klasis Makale Selatan</title>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/settings.css');?>" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css');?>" type="text/css" media="all" />
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icon-fonts.css');?>" type="text/css" media="all" />
	
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="<?php echo base_url('assets/tinymce/tinymce.min.js');?>"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
	
</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
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
											<a href="<?php echo site_url('Data-Permohonan-Doa.getor'); ?>"><span>Data Permohonan Doa</span></a>									
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
			<section class="content_section bg_gray border_t_n">
				<div class="content row_spacer">
					<div class="main_title centered upper">
						<h2><span class="line"><span class="dot"></span></span>HALAMAN ADMINISTRATOR WEBSITE</h2>
					</div>
					<?php
						if($this->session->flashdata('message')){
							echo $this->session->flashdata('message');
								}
					?>
					<div class="hm-tabs tabs2 upper_title">
						<nav class="clearfix">
							<ul class="tabs-navi">
								<li><a data-content="sejarah-gereja" class="selected" href="#sejarah-gereja"><span></span>Sejarah Gereja</a></li>
								<li><a data-content="pelayan" href="#pelayan"><span></span>Pelayan</a></li>
								<li><a data-content="kumpulan" href="#kumpulan"><span></span>Kumpulan</a></li>
								<li><a data-content="renungan" href="#renungan"><span></span>Renungan</a></li>
								<li><a data-content="pengumuman" href="#pengumuman"><span></span>Pengumuman</a></li>
								<li><a data-content="agenda" href="#agenda"><span></span>Agenda</a></li>
							</ul> <!-- tabs-navi -->
						</nav>

						<ul class="tabs-body table-responsive">
							<li data-content="sejarah-gereja" id="sejarah-gereja" class="selected clearfix">
								<div class="lfc_user_row clearfix" style="text-align: justify;">
									<div class="my_col_half">
										<h6>sejarah gereja</h6>
									</div>
									<?php 
									foreach ($sejarah as $sejarah) {
										?>
										<div class="my_col_half clearfix">
											<a href="<?php echo site_url('Edit-Sejarah/'.$sejarah->id);?>" class="send_button f_right upper">
												EDIT
											</a>
										</div>
									</div><br>
									<?php 
									echo "<p style='align=justify;'>".$sejarah->isi_sejarah."</p>";
								}
								?>
							</li>

							<li data-content="pelayan" id="pelayan">
								<h5>Pelayan Kebaktian Pada Tanggal
									<?php foreach ($tanggal as $tanggal) {
			    			// echo $tanggal->tanggal;
										echo date('d F Y', strtotime($tanggal->tanggal));

										?>
									</h5>
									<a class="popup-with-move-anim" href="#Tambah-pelayan">Tambah Pelayan</a>||
									<a class="popup-with-move-anim" href="#Edit_tanggal">Update Tanggal Kebaktian Minggu</a>
									<div class="zoom-anim-dialog small-dialog mfp-hide" id="Edit_tanggal">
										<form class="login_form_colored" method="post" action="<?php echo site_url('Update-tanggal-kebaktian');?>">
											<div class="lfc_user_row">
												<span class="lfc_header">Form Edit Tanggal Kebaktian Minggu</span>
											</div>
											<div class="lfc_user_row">
												<label for="login_user_name">
													<span class="lfc_alert">Tanggal Kebaktian</span>
													<input type="date" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal Kebaktian Minggu" required="">
													<input type="hidden" name="id" value="<?php echo $tanggal->id;?>">
												</label>
											</div>
											<div class="lfc_user_row clearfix">
												<div class="my_col_half clearfix">
													<button type="submit" name="simpan" class="send_button f_right upper">
														Update
													</button>
												</div>
											</div>
										</form>
									</div>
									<?php
								}
								?>
								<table class="table table-striped">
									<tr>
										<th><b>Nama Kebaktian</b></th>
										<th><b>Waktu</b></th>
										<th><b>Pelayan Firman</b></th>						
										<th><b>Info</b></th>						
										<th><b>Aksi</b></th>						
									</tr>
									<?php 
									$no=1;
									foreach ($pelayan as $pelayan) {
										?>
										<tr>
											<td><?php echo $pelayan->nama_ibadah;?></td>
											<td><?php echo $pelayan->waktu;?></td>
											<td><?php echo $pelayan->Pelayan_Firman;?></td>
											<td><label class="label label-warning"><?php echo $pelayan->Keterangan;?></label></td>
											<td>
												<input type="submit" onclick="edit_book(<?php echo $pelayan->id;?>)" value="Edit">
												<a href="<?php echo base_url('index.php/Delete-Pelayan/'.$pelayan->id);?>" 
													onclick='return confirm("Yakin Ingin Hapus Data ini?")' >Hapus</a>
												</td>
											</tr>
											<?php } ?>
										</table>
									</li>

									<li data-content="kumpulan" id="kumpulan">
									<a class="popup-with-move-anim" href="#tambah-kumpulan">Tambah Kumpulan</a>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Nama Ibadah</th>
													<th>Tempat</th>
													<th>Tanggal</th>
													<th>Pelayan</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
											<?php
											if ($kumpulan==null) {
												echo "<tr>
												<td colspan='5'>DATA MASIH KOSONG</td>
												</tr>";
											}
												foreach ($kumpulan as $kumpulan) {
											?>
												<tr>
													<td><?php echo $kumpulan->nama_ibadah; ?></td>
													<td><?php echo $kumpulan->tempat; ?></td>
													<td><?php echo $kumpulan->tanggal; ?></td>
													<td><?php echo $kumpulan->pelayan; ?></td>
													<td><a href="">edit|hapus</a></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</li>
<!--######################################################################################################-->
<!--Modal untuk Kumpulan-->
<div class="zoom-anim-dialog small-dialog mfp-hide" id="tambah-kumpulan">
										<form class="login_form_colored" method="post" action="<?php echo site_url('TambahKumpulan.getor');?>">
											<div class="lfc_user_row">
												<span class="lfc_header">Form Tambah Kumpulan</span>
											</div>
											<div class="lfc_user_row">
												<label for="nama-ibadah">
													<b><span class="lfc_alert">Nama Ibadah</span></b>
													<input type="text" name="nama_ibadah" id="nama-ibadah" placeholder="Masukkan Jenis Kumpulan (ex. PWGT)" required="">
													<b><span class="lfc_alert">Tempat/Rumah</span></b>
													<input type="text" name="tempat" id="tempat" placeholder="masukkan nama tempat ibadah (ex. Rumah Pius)" required="">
													<b><span class="lfc_alert">Nama Pelayan Firman</span></b>
													<input type="text" name="pelayan" id="pelayan" placeholder="masukkan nama pelayan Firman (ex. Pdt. Agus)" required="">
													<b><span class="lfc_alert">Tanggal Kumpulan</span></b>
													<input type="text" name="tanggal" id="tanggal" placeholder="" required="">
												</label>
											</div>
											<div class="lfc_user_row clearfix">
												<div class="my_col_half clearfix">
													<button type="submit" name="simpan" class="send_button f_right upper">
														Tambah
													</button>
												</div>
											</div>
										</form>
									</div>
<!--######################################################################################################-->
									<li data-content="renungan" id="renungan">
										<p>list renungan</p>
									</li> 
									<li data-content="pengumuman">
										<a class="popup-with-move-anim" href="" data-toggle="modal" data-target="#tambah_pengumuman" >Tambah Pengumuman</a>
									<table class="table  table-striped">
										<tr>
											<th><b>Judul Pengumuman</b></th>
											<th><b>Isi Pengumuman</b></th>
											<th><b>Tanggal Buat</b></th>
											<th><b>Aksi</b></th>
										</tr>
										<?php
										if ($pengumuman==null) {
											 echo"<tr>
										 	<td colspan='4'>BELUM ADA PENGUMUMAN</td></tr>";
										}
											foreach ($pengumuman as $pengumuman) {
										 ?>
										 <tr>
										 	<td><?php echo $pengumuman->Judul_pengumuman ?></td>
										 	<td><?php echo $pengumuman->Isi_pengumuman ?></td>
										 	<td><?php echo $pengumuman->created_date ?></td>
										 	<td>
										 		<input type="submit" onclick="edit_pengumuman(<?php echo $pengumuman->id;?>)" value="Edit">
										 		<a href="<?php echo base_url('index.php/Hapus-Pengumuman.getor/'.$pengumuman->id);?>"
										 			onclick="javascript:return confirm('Yakin ingin Hapus Pengumuman ini?');">Hapus</a>
										 	</td>
										 </tr>
										 <?php } ?>
									</table>
									</li> 
									<li data-content="agenda" id="agenda">
										<p>isinya agenda</p>


									</li>

								</ul>
								<!-- Tabs Content -->
							</div> 
							<!-- End Tabs Container --> 
						</div>
					</div>

					<div class="zoom-anim-dialog small-dialog mfp-hide" id="Tambah-pelayan">
						<form class="login_form_colored" method="post" action="<?php echo site_url('Tambah-Pelayan');?>">
							<div class="lfc_user_row">
								<span class="lfc_header">Form Pelayan</span>
							</div>
							<div class="lfc_user_row">
								<label for="login_user_name">
									<span class="lfc_alert">Nama Ibadah</span>
									<input type="text" name="nama_ibadah" id="id" placeholder="(contoh. Kebaktian Umum, Sekolah Minggu)" required="">
								</label>
							</div>
							<div class="lfc_user_row">
								<label for="login_user_name">
									<span class="lfc_alert">Waktu</span>
									<input type="text" name="waktu" id="id2" placeholder="(contoh. 09.00 WITA)" required="">
								</label>
							</div>
							<div class="lfc_user_row">
								<label for="login_user_name">
									<span class="lfc_alert">Pelayan Firman</span>
									<input type="text" name="pelayan_firman" id="id3" placeholder="(contoh. Pdt. Luther,S.Th)" required="">
								</label>
							</div>
							<div class="lfc_user_row">
								<label for="login_user_name">
									<span class="lfc_alert">Keterangan</span>
									<input type="text" name="keterangan" id="id4" placeholder="(contoh. Akan diadakan Perjamuan)">
								</label>
							</div>
							<div class="lfc_user_row clearfix">
								<div class="my_col_half clearfix">
									<button type="submit" name="simpan" class="send_button f_right upper">
										SIMPAN
									</button>
								</div>
							</div>
						</form>
					</div>
				</section>
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

				<!-- Bootstrap modal -->
				<div class="modal fade" id="modal_form" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title">EDIT PELAYAN</h3>
							</div>
							<div class="modal-body form">
								<form action="<?php echo base_url('index.php/Edit-Pelayan');?>" class="form-horizontal" method="post">

									<div class="form-body">
										<div class="form-group">
											<div class="col-md-12">
												<label>Nama Ibadah</label>
												<input name="namaibadah" placeholder="" class="form-control" type="text">
												<input type="hidden" name="idpelayan"/>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Waktu</label>              
												<input name="waktu" placeholder="" class="form-control" type="text">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Pelayan Firman</label>
												<input name="pelayanfirman" placeholder="" class="form-control" type="text">

											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Keterangan</label>
												<textarea name="kweterangan" id="keterangan" class="control-form"></textarea>
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<input type="submit" name="kirim" value="Update">
										<button type="button" data-dismiss="modal">Cancel</button>
									</div>
								</form>
							</div>

						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

<!-- ##################################################################################### -->
				<div class="modal fade" id="tambah_pengumuman" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title">Tambah Pengumuman</h3>
							</div>
							<div class="modal-body form">
								<form action="<?php echo base_url('index.php/Tambah-Pengumuman.getor');?>" class="form-horizontal" method="post">

									<div class="form-body">
										<div class="form-group">
											<div class="col-md-12">
												<label>Judul Pengumuman</label>
												<input name="judul_pengumuman" placeholder="" class="form-control" type="text">
												<input type="hidden" name="id"/>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Tanggal Acara</label>
												<input name="tanggal" placeholder="" class="form-control" type="date" required>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Isi Pengumuman</label>              
												<textarea name="isi_pengumuman" rows="30"></textarea>
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<input type="submit" name="kirim" value="Tambah">
										<button type="button" data-dismiss="modal">Cancel</button>
									</div>
								</form>
							</div>

						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

				<div class="modal fade" id="edit_pengumuman" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title">Edit Pengumuman</h3>
							</div>
							<div class="modal-body form">
								<form action="<?php echo base_url('index.php/Edit-Pengumuman.getor');?>" class="form-horizontal" method="post">

									<div class="form-body">
										<div class="form-group">
											<div class="col-md-12">
												<label>Judul Pengumuman</label>
												<input name="judul_pengumuman" placeholder="" class="form-control" type="text">
												<input type="hidden" name="idpengumuman"/>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Tanggal Acara</label>
												<input name="tanggal" placeholder="" class="form-control" type="date" required="">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<label>Isi Pengumuman</label>              
												<textarea name="isi_pengumuman" rows="30" id="isi_pengumuman"></textarea>
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<input type="submit" name="kirim" value="Update">
										<button type="button" data-dismiss="modal">Cancel</button>
									</div>
								</form>
							</div>

						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

<!-- ##################################################################################### -->
				<!-- End Bootstrap modal -->
				<!-- End wrapper -->
				<script type="text/javascript">

					function edit_book(id)
					{
      //Ajax Load data from ajax
      $.ajax({
      	url : "<?php echo site_url('Halaman_admin/ajax_edit')?>/" + id,
      	type: "POST",
      	dataType: "JSON",
      	success: function(data)
      	{

      		$('[name="namaibadah"]').val(data.nama_ibadah);
      		$('[name="waktu"]').val(data.waktu);
      		$('[name="pelayanfirman"]').val(data.Pelayan_Firman);
      		$('[name="keterangan"]').val(data.Keterangan);
      		$('[name="idpelayan"]').val(data.id);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT PELAYAN'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
        	alert('Error get data from ajax');
        }
    });
  }

  function edit_pengumuman(id)
					{
      //Ajax Load data from ajax
      $.ajax({
      	url : "<?php echo site_url('Halaman_admin/ajax_editPengumuman')?>/" + id,
      	type: "POST",
      	dataType: "JSON",
      	success: function(data)
      	{

      		$('[name="judul_pengumuman"]').val(data.Judul_pengumuman);
      		// $('[id="isi_pengumuman"]').val(data.Isi_pengumuman);
      		$('[name="idpengumuman"]').val(data.id);
      		tinymce.get('isi_pengumuman').getBody().innerHTML = data.Isi_pengumuman;


            $('#edit_pengumuman').modal('show'); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
        	alert('Error get data from ajax');
        }
    });
  }

</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/plugins.js');?>"></script>	
<script src="<?php echo base_url('assets/js/jquery.themepunch.tools.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery.themepunch.revolution.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/isotope.pkgd.min.js');?>"></script>
<!-- this is where we put our custom functions -->
<script type="text/javascript" src="<?php echo base_url('assets/js/functions.js');?>"></script>
</body>
</html>