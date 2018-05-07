<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Renungan_model');
		$this->load->model('Sejarah_model');
		$this->load->model('Pelayan_model');
		$this->load->model('Kumpulan_model');
		$this->load->model('Pengumuman_model');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		$data['list_renungan'] = $this->Renungan_model->get_all();
		$data['sejarah'] = $this->Sejarah_model->get_all();
		$data['pelayan'] = $this->Pelayan_model->get_all();
		$data['kumpulan'] = $this->Kumpulan_model->get_all();
		$data['tanggal'] = $this->Pelayan_model->get_tanggal_minggu();
		$data['pengumuman'] = $this->Pengumuman_model->get_all();
		$this->load->view('Halaman_utamaAdmin',$data);
	}

	#sejarah gereja

	public function Edit_sejarah($id) 
	{
		$row = $this->Sejarah_model->get_by_id($id);
		$data = array(
			'id'=>$row->id,
			'isi_sejarah'=>$row->isi_sejarah,
			'created_by'=>$row->created_by,
			'created_date'=>$row->update_date,
		);
		$this->load->view('edit_sejarahGereja',$data);
	}

	public function ActionEdit_sejarah() 
	{
		$data = array(
			'isi_sejarah'=>$this->input->post('sejarah',TRUE),
			'created_by'=>$this->input->post('created_by',TRUE),
			'update_date'=>$this->input->post('update_date',TRUE),
		);
		$this->Sejarah_model->update($this->input->post('id',TRUE), $data);
		$this->session->set_flashdata('message', 'Berhasil Update Sejarah Gereja. Silakan Cek di Menu Sejarah');
		redirect(site_url('Halaman_admin'));
	}

	#end Sejarah Gereja

#tanggal kebaktian
	public function ActionEdit_tanggal() 
	{
		$data = array(
			'tanggal'=>$this->input->post('tanggal',TRUE),
		);
		$this->Pelayan_model->update_tanggal($this->input->post('id',TRUE), $data);
		$this->session->set_flashdata('message', 'Berhasil Update Tanggal Ibadah. Silakan Cek di Menu Pelayan');
		redirect(site_url('Halaman_admin'));
	}

#tambah pelayan
	public function Tambah_pelayan() 
	{
		$data = array(
			'nama_ibadah'=>$this->input->post('nama_ibadah'),
			'waktu'=>$this->input->post('waktu'),
			'Pelayan_Firman'=>$this->input->post('pelayan_firman'),
			'Keterangan'=>$this->input->post('keterangan'),
		);
		$this->Pelayan_model->insert($data);
		$this->session->set_flashdata('message', 'Berhasil Tambah Pelayan. Silakan Cek di Menu Pelayan');
		redirect(site_url('Halaman_admin'));
	}

	public function ajax_edit($id)
	{
		$data = $this->Pelayan_model->get_by_id($id);
		echo json_encode($data);
	}

	public function Editpelayan() 
	{
		$data = array(
			'nama_ibadah'=>$this->input->post('namaibadah'),
			'waktu'=>$this->input->post('waktu'),
			'Pelayan_Firman'=>$this->input->post('pelayanfirman'),
			'Keterangan'=>$this->input->post('keterangan'),
		);
		$ok = $this->Pelayan_model->update($this->input->post('idpelayan'), $data);
		$this->session->set_flashdata('message', 'Berhasil Edit Pelayan. Silakan Cek di Menu Pelayan');
		redirect(site_url('Halaman_admin'));
	}

	public function deletePelayan($id)
	{
		$data = $this->Pelayan_model->delete($id);
		$this->session->set_flashdata('message', 'Berhasil Hapus Pelayan. Cek di Menu Pelayan');
		redirect(site_url('Halaman_admin'));
	}

	#end Pelayan

	#tambah kumpulan
	public function Tambah_kumpulan() 
	{
		$data = array(
			'nama_ibadah'=>$this->input->post('nama_ibadah'),
			'tempat'=>$this->input->post('tempat'),
			'tanggal'=>$this->input->post('tanggal'),
			'pelayan'=>$this->input->post('pelayan'),
		);
		$this->Kumpulan_model->insert($data);
		$this->session->set_flashdata('message', '<script>swal("success!", "Berhasil Tambah Data Kumpulan, Silakan cek di Menu Kumpulan", "success")</script>');
		redirect(site_url('Halaman_admin'));
	}

	public function ajax_editkumpulan($id)
	{
		$data = $this->Kumpulan_model->get_by_id($id);
		echo json_encode($data);
	}

	public function Editkumpulan() 
	{
		$data = array(
			'nama_ibadah'=>$this->input->post('nama_ibadah'),
			'tempat'=>$this->input->post('tempat'),
			'tanggal'=>$this->input->post('tanggal'),
			'pelayan'=>$this->input->post('pelayan'),
			'kategori'=>$this->input->post('ketegori'),
		);
		$ok = $this->Kumpulan_model->update($this->input->post('idpelayan'), $data);
		$this->session->set_flashdata('message', 'Berhasil Edit Kumpulan. Silakan Cek di Menu Kumpulan');
		redirect(site_url('Halaman_admin'));
	}

	public function deletekumpulan($id)
	{
		$data = $this->Kumpulan_model->delete($id);
		$this->session->set_flashdata('message', 'Berhasil Hapus Kumpulan. Silakan Cek di Menu Kumpulan');
		redirect(site_url('Halaman_admin'));
	}

	#end kumpulan



	#start pengumuman
	public function Tambah_pengumuman() 
	{
		$data = array(
			'Judul_pengumuman'=>$this->input->post('judul_pengumuman'),
			'Isi_pengumuman'=>$this->input->post('isi_pengumuman'),
			'tanggal_acara'=>$this->input->post('tanggal'),
			'created_by'=>'admin',
			'created_date'=>date('Y-m-d H:i:s'),
		);
		$this->Pengumuman_model->insert($data);
		$this->session->set_flashdata('message', 'Berhasil Tambah Pengumuman');
		redirect(site_url('Halaman_admin'));
	}

	public function ajax_editPengumuman($id)
	{
		$data = $this->Pengumuman_model->get_by_id($id);
		echo json_encode($data);
	}

	public function Editpengumuman() 
	{
		$data = array(
			'Judul_pengumuman'=>$this->input->post('judul_pengumuman'),
			'Isi_pengumuman'=>$this->input->post('isi_pengumuman'),
			'tanggal_acara'=>$this->input->post('tanggal'),
			'created_by'=>'admin',
			'created_date'=>date('Y-m-d H:i:s'),
		);
		$this->Pengumuman_model->update($this->input->post('idpengumuman'), $data);
		$this->session->set_flashdata('message', 'Berhasil Tambah Pelayan');
		redirect(site_url('Halaman_admin'));
	}

	public function deletePengumuman($id)
	{
		$data = $this->Pengumuman_model->delete($id);
		$this->session->set_flashdata('message', 'Berhasil Hapus Pelayan');
		redirect(site_url('Halaman_admin'));
	}

}
