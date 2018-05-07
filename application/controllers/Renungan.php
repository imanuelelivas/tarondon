<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Renungan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Renungan_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function Detail_renungan($id,$slug)
	{
		$row = $this->Renungan_model->get_by_id($id,$slug);
		$data = array(
			'judul' => $row->judul_renungan, 
			'isi' => $row->isi_renungan, 
			'tanggal' => $row->created_date, 
			'oleh' => $row->created_by, 
			'id' => $row->id, 
			'gambar' => $row->images_renungan,
			'random' => $this->Renungan_model->get_allLimit5(),
		);
		$this->load->view('detail_renungan',$data);
	}

	public function list_renungan()
	{
		$jml = $this->db->get('tbl_renungan');
		$config['base_url'] = base_url().'Menu-Renungan.getor';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = '10';
		$config['num_links'] = '5';
		$config['first_page'] = 'Awal';
		$config['last_page'] = 'Akhir';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['list_gallery'] = $this->upload_model->paging_data($config['per_page'], $id);
		$list_renungan = $this->Renungan_model->paging_data();

		$data = array(
			'list_renungan' => $list_renungan,
		);
		$this->load->view('renungan', $data);
	}

	#functon admin
	public function list_renunganAdmin()
	{
		 // if($this->session->userdata('status') != "login"){
   //     redirect(base_url("index.php/welcome/login"));
   // }
		$list_renungan = $this->Renungan_model->get_all();

		$data = array(
			'list_renungan' => $list_renungan,
		);
		$this->load->view('Halaman_utamanAdmin', $data);
	}

	public function Tambah_renungan()
	{
		 // if($this->session->userdata('status') != "login"){
   //     redirect(base_url("index.php/welcome/login"));
   // }
		$this->load->view('tambah_renungan');
	}

	public function action_renungan(){
   // if($this->session->userdata('status') != "login"){
   //     redirect(base_url("index.php/welcome/login"));
   // }
		$this->load->library('upload');
		$nmfile = "renungan_".time();
       $config['upload_path'] = 'assets/images/images-Renungan'; //path folder
       $config['allowed_types'] = 'jpg|png|jpeg';
       $config['max_size'] = '512';
       $config['max_width']  = '1000';
       $config['max_height']  = '1000';
       $config['file_name'] = $nmfile; 

       $this->upload->initialize($config);

       if($_FILES['gambar3']['name'])
       {
       	if ($this->upload->do_upload('gambar3'))
       	{
       		$gbr = $this->upload->data();
       		$data = array(
       			'id' => "R-".time(),
       			'isi_renungan' => $this->input->post('renungan',TRUE),
       			'judul_renungan' => $this->input->post('judul',TRUE),
       			'slug_renungan' => slug($this->input->post('judul',TRUE)),
       			'created_by' => "imanuel",
       			'created_date' => date('Y-m-d H:i:s'),
       			'images_renungan' => $gbr['file_name'],
       		);
              $this->Renungan_model->insert_renungan($data); //akses model untuk menyimpan ke database
              $this->session->set_flashdata('message', 'sukses');
              redirect(site_url('Tambah-Renungan.getor'));
          }else{
          	echo"gagal";
          }
      }
  }
}