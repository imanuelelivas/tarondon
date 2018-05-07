<?php 
class Upload extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('upload_model'); //load model upload model
		$this->load->library('upload'); //load library upload 
		date_default_timezone_set('Asia/Jakarta');
	}

	function list_gallery($id=NULL){
		// $data ['list_gallery'] = $this->upload_model->get_all_images();
		$jml = $this->db->get('tbl_gallery');
		$config['base_url'] = base_url().'List-Gallery.getor';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = '15';
		$config['num_links'] = '5';
		$config['first_page'] = 'Awal';
		$config['last_page'] = 'Akhir';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		$data['list_gallery'] = $this->upload_model->paging_data($config['per_page'], $id);
		$this->load->view('list_gallery', $data);
	}

	function tambah_foto(){
		$data ['nama_album'] = $this->upload_model->get_nama_album();
		$this->load->view('upload_view',$data);
	}

	function do_upload(){
		$config['upload_path'] = './assets/images/folder_gallery/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //Allowing types
	    $config['encrypt_name'] = TRUE; //encrypt file name
	    $config[ 'max_size'] = '5000'; // maximal size gamabar dalam kb
        $config['max_width'] = '3000'; // lebar gamabar yang akan kita upload dalam px
        $config['max_height'] = '3000'; // tinggi gambar dalam px 

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){

        	if ($this->upload->do_upload('filefoto')){

        		$data   = $this->upload->data();
	            $nama_foto  = $data['file_name']; //get file name
	            $nama_album	= slug($this->input->post('nama_album'));
	            $this->upload_model->upload_image($nama_foto,$nama_album);
	            echo "Upload Successful";

	        }else{
	        	echo "Upload failed. Image file must be gif|jpg|png|jpeg|bmp";
	        }

	    }else{
	    	echo "Failed, Image file is empty.";
	    }

	}

	public function ok()
	{
		$config['upload_path'] = './assets/images/folder_gallery/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){

        	if ($this->upload->do_upload('filefoto')){
        		$data = $this->upload->data();
                //Compress Image
        		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        		$config['encrypt_name'] = TRUE;
        		$config['image_library']='gd2';
        		$config['source_image']='./assets/images/folder_gallery/'.$data['file_name'];
        		$config['create_thumb']= FALSE;
        		$config['maintain_ratio']= FALSE;
        		$config['quality']= '50%';
        		$config['width']= 1920;
        		$config['height']= 1080;
        		$config['new_image']= './assets/images/folder_gallery/'.$data['file_name'];
        		$this->load->library('image_lib', $config);
        		$this->image_lib->resize();

        		$nama_foto  = $data['file_name']; //get file name
        		$nama_album	= $this->input->post('nama_album');
        		$keterangan	= $this->input->post('keterangan');
        		$this->upload_model->upload_image($nama_foto,$nama_album,$keterangan);
        		echo "Image berhasil diupload";
        	}else{
				$this->session->set_flashdata('message', '<script>swal("warning!", "Upload Gambar Gagal. Gambar harus bertipe jpg|png|jpeg dan ukuran foto Maks. 1920 X 1080", "warning")</script>');
				redirect(site_url('Tambah-Gallery.getor'));
        	}

        }else{
        	$this->session->set_flashdata('message', '<script>swal("warning!", "Teliti roko sidik ces.. Tae pa mu pilei tu foto lamu upload :)", "warning")</script>');
				redirect(site_url('Tambah-Gallery.getor'));
        }

	}
	
	public function Deletefoto($id){
		$delete = $this->upload_model->Delete_gallery($id);
			$this->session->set_flashdata('message', '<script>swal("success!", "Gambar Berhasil Dihapus", "success")</script>');
				redirect(site_url('List-Gallery.getor'));
		
	}

}