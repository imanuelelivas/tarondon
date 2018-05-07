<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan_doa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //load library
        $this->load->library(array('recaptcha','form_validation'));
        $this->load->model('Permohonan_doa_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = array(
            'recaptcha_html' => $this->recaptcha->render()
        );
        //set form validation
        $this->form_validation->set_rules('g-recaptcha-response', '<strong>Captcha</strong>', 'callback_getResponseCaptcha');
        //set message form validation
        $this->form_validation->set_message('required', '{field} is required.');
        $this->form_validation->set_message('callback_getResponseCaptcha', '{field} {g-recaptcha-response} harus diisi. ');
        if($this->form_validation->run() == TRUE)
        {

            //kondisi jika recaptcha dan form validasi terpenusi

        }else{
            $this->load->view('Permohonan-Doa',$data);
        }
    }

    public function getResponseCaptcha($str)
    {
        $this->load->library('recaptcha');
        $response = $this->recaptcha->verifyResponse($str);
        if ($response['success'])
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('getResponseCaptcha', '%s is required.' );
            return false;
        }
    }

    public function Add_permohonanDoa()
    {
    	$data = array(
    		'nama'=>$this->input->post('nama', TRUE),
    		'alamat'=>$this->input->post('alamat', TRUE),
    		'email'=>$this->input->post('email', TRUE),
    		'no_telpon'=>$this->input->post('no_telpon', TRUE),
    		'pokok_doa'=>$this->input->post('pokok_doa', TRUE),
    		'created_date'=>date('Y-m-d H:i:s'),
    	);
    	$this->Permohonan_doa_model->insert($data);
    	$this->session->set_flashdata('message', '<script>swal("success!", "Berhasil Melakukan Permohonan Doa", "success")</script>');
		redirect(site_url('Permohonan-Doa.getor'));
    }

    #function untuk admin

    public function view_data()
    {
        $data = array(
            'list_permohonan'=>$this->Permohonan_doa_model->get_all(),
        );
        $this->load->view('list_permohonan_doa', $data);
    }

    public function delete($id)
    {
        $this->Permohonan_doa_model->delete($id);
        $this->session->set_flashdata('message', '<script>swal("success!", "Berhasil Melakukan Hapus Permohonan Doa", "success")</script>');
        redirect(site_url('Data-Permohonan-Doa.getor'));
    }
}