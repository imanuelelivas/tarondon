<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('upload_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
        $data ['list_foto_all'] = $this->upload_model->get_all_images();
        $data ['list_foto_small'] = $this->upload_model->get_all_images();
        $data ['list_nama_album'] = $this->upload_model->get_all_nama_album();
		$this->load->view('Gallery_foto',$data);
    }
	
	public function foto_by_album($album)
	{
		$data ['list_nama_album'] = $this->upload_model->get_all_nama_album();
        $data ['list_foto_by_album'] = $this->upload_model->get_all_by_album($album);
        $data ['list_foto_by_album_small'] = $this->upload_model->get_all_by_album($album);
		$this->load->view('Gallery_foto_by_album',$data);
    }
}
?>