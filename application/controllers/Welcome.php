<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Renungan_model');
		$this->load->model('Sejarah_model');
		$this->load->model('Pelayan_model');
		$this->load->model('Pengumuman_model');
		$this->load->model('Upload_model');
		$this->load->model('Kumpulan_model');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		$data['sejarah'] = $this->Sejarah_model->get_all();
		$data['pelayan'] = $this->Pelayan_model->get_all();
		$data['tanggal'] = $this->Pelayan_model->get_tanggal_minggu();
		$data['pengumuman'] = $this->Pengumuman_model->get_allLimit();
		$data['renungan'] = $this->Renungan_model->get_all();
		$data['kumpulan'] = $this->Kumpulan_model->get_all();
		$data['ramdom_foto'] = $this->Upload_model->get_ramdom_foto20();
		$this->load->view('index',$data);
	}
	public function sejarah_gereja()
	{
		$this->load->view('sejarah-gereja');
	}
}
