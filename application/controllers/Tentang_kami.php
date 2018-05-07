<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('Renungan_model');
		$this->load->model('Sejarah_model');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function sejarah_gereja()
	{
		$data['sejarah'] = $this->Sejarah_model->get_all();
		$this->load->view('sejarah-gereja',$data);
	}
}
