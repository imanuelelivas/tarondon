<?php 
class Slide_Show extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('upload_model'); 
		$this->load->library('upload');
		date_default_timezone_set('Asia/Jakarta');
	}

	function list_gallery(){
		$data ['list_gallery'] = $this->upload_model->get_all_admin_images();
		$this->load->view('list_gallery',$data);
	}

	function halaman_tambahSlide(){
		$data ['nama_album'] = $this->upload_model->get_nama_album();
		$this->load->view('upload_slide',$data);
	}

	function upload_slide()
	{
		$config['upload_path'] = './assets/images/folder_slide/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){

        	if ($this->upload->do_upload('filefoto')){
        		$data = $this->upload->data();
                //Compress Image
        		$config['allowed_types'] = 'jpg|png|jpeg';
        		$config['encrypt_name'] = TRUE;
        		$config['image_library']='gd2';
        		$config['source_image']='./assets/images/folder_slide/'.$data['file_name'];
        		$config['create_thumb']= FALSE;
        		$config['maintain_ratio']= FALSE;
        		$config['quality']= '50%';
        		$config['width']= 1220;
        		$config['height']= 600;
        		$config['new_image']= './assets/images/folder_slide/'.$data['file_name'];
        		$this->load->library('image_lib', $config);
        		$this->image_lib->resize();

        		$nama_slide_show  = $data['file_name'];
        		$pesan	= $this->input->post('pesan');
        		$tanggal_create	= date('Y-m-d H:i:s');
        		$this->upload_model->upload_slider($nama_slide_show,$pesan,$tanggal_create);
        		$this->session->set_flashdata('message', '<script>swal("success!", "Upload Slide Berhasil", "success")</script>');
		        redirect(site_url('Tambah-Slide.getor'));
        	}else{
                $this->session->set_flashdata('message', '<script>swal("success!", "Upload failed. Image file must be jpg|png|jpeg atau ukuran foto Max 1920 X 1080", "success")</script>');
		        redirect(site_url('Tambah-Slide.getor'));
        	}

        }else{
            $this->session->set_flashdata('message', '<script>swal("success!", "Image yang diupload kosong", "success")</script>');
		        redirect(site_url('Tambah-Slide.getor'));
        }

    }

}