<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['Selamat-datang.getor'] = 'welcome/index';
$route['Sejarah-gereja.getor'] = 'Tentang_kami/sejarah_gereja';

$route['Pengurus-Website.getor'] = 'Halaman_admin/index';
$route['Edit-Sejarah/(:any)'] = 'Halaman_admin/Edit_sejarah/$1';
$route['Update-Sejarah-Gereja'] = 'Halaman_admin/ActionEdit_sejarah';

$route['Update-tanggal-kebaktian'] = 'Halaman_admin/ActionEdit_tanggal';
$route['Tambah-Pelayan'] = 'Halaman_admin/Tambah_pelayan';
$route['Edit-Pelayan'] = 'Halaman_admin/Editpelayan';
$route['Delete-Pelayan/(:any)'] = 'Halaman_admin/deletePelayan/$1';

$route['Tambah-Pengumuman.getor'] = 'Halaman_admin/Tambah_pengumuman';
$route['Hapus-Pengumuman.getor/(:any)'] = 'Halaman_admin/deletePengumuman/$1';
$route['Edit-Pengumuman.getor'] = 'Halaman_admin/Editpengumuman';

$route['Permohonan-Doa.getor'] = 'Permohonan_doa/index';
$route['Data-Permohonan-Doa.getor'] = 'Permohonan_doa/view_data';
$route['Tambah-Permohonan-Doa.getor'] = 'Permohonan_doa/Add_permohonanDoa';
$route['Delete-Permohonan-Doa.getor/(:any)'] = 'Permohonan_doa/delete/$1';

$route['Menu-Renungan.getor'] = 'Renungan/list_renungan';
$route['Menu-Renungan.getor/(:any)'] = 'Renungan/list_renungan/$1';
$route['Detail-Renungan.getor/(:any)/(:any)'] = 'Renungan/Detail_renungan/$1/$2';
$route['Tambah-Renungan.getor'] = 'Renungan/Tambah_renungan';
$route['Aksi-Renungan.getor'] = 'Renungan/action_renungan';

$route['List-Gallery.getor'] = 'Upload/list_gallery';
$route['Hapus-Gallery.getor/(:any)'] = 'Upload/Deletefoto/$1';
$route['List-Gallery.getor/(:any)'] = 'Upload/list_gallery/$1';
$route['Tambah-Gallery.getor'] = 'Upload/tambah_foto';
$route['Aksi-Tambah-Gallery.getor'] = 'upload/ok';
$route['Kumpulan-foto.getor'] = 'upload/list_gallery';

$route['TambahSlide.getor'] = 'Slide_Show/halaman_tambahSlide';
$route['Aksi-Tambah-Slide.getor'] = 'Slide_Show/upload_slide';

$route['TambahKumpulan.getor'] = 'Halaman_admin/Tambah_kumpulan';

$route['Kumpulan-Foto.getor'] = 'Gallery/index';//Dokumentasi
$route['Kumpulan-Foto-berdasarkan-album.getor/(:any)'] = 'Gallery/foto_by_album/$1';//Dokumentasi
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
