<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(['form_validation', 'session']);
		$this->load->database('default');
		$this->load->model('First_model');
	}

    public function index(){
        $this->load->view('upload');
    }
    public function upload_file(){
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        //$config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload('file')){
            $result=$this->upload->data();
            $full_path= $result['file_name'];
            $op=$this->First_model->upload_img($this->session->userdata['DATA']->ID,$full_path);
            if($op){
                $this->session->set_flashdata('status', '<div class="alert alert-success text-center">Upload Successfully!</div>');
                redirect('home/index');
            }
        }else{
            $error= $this->upload->display_errors();
            $this->session->set_flashdata('status','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!! '.$error.'</div>');
            redirect('home/index');
            
        }
        
    }

}

?>