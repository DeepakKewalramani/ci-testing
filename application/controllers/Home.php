<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->library(['form_validation','session']);
        $this->load->database('default');
		$this->load->model('First_model');
	}
	public function index()
	{
		if(isset($this->session->userdata['DATA']->USERNAME) && isset($this->session->userdata['DATA']->PASSWORD)){ 
        $this->form_validation->set_rules('new_name','NAME','trim|required|min_length[5]');
        $this->form_validation->set_rules('new_username', 'USERNAME', 'trim|required');
		$this->form_validation->set_rules('new_password', 'PASSWORD', 'trim|required|min_length[8]');
		if($this->form_validation->run()==FALSE){
			$data=$this->session->userdata['DATA'];
			$this->load->view('home',$data);
        }else{
			$id = $this->session->userdata['DATA']->ID;
            $name = $this->input->post('new_name');
            $username = $this->input->post('new_username');
			$password = md5($this->input->post('new_password'));
			$data=array(
                'ID'=>$id,
                'NAME'=>$name,
                'USERNAME'=>$username,
				'PASSWORD'=>$password
			);
			if($this->First_model->check_username($username)==0){
				if($result=$this->First_model->update_user($data)){
				$this->session->set_flashdata('status','<div class="alert alert-success text-center">Change Successfully!</div>');
				$this->session->set_userdata('DATA',$result);
                redirect('home/index');
			}else{
				$this->session->set_flashdata('status','<div class="alert alert-success text-center">Something want wrong!</div>');
                redirect('home/index');
			}
			}else{
					$this->session->set_flashdata('status','<div class="alert alert-danger text-center">Username already exsits</div>');
					redirect('home/index');
				
				
			}}
		}else{
			redirect('login/index');
		 }
		}
		public function logout(){
			$this->session->set_flashdata('status','<div class="alert alert-success text-center">Log Out!</div>');
			$this->session->sess_destroy();
			redirect('login/index');
			
		
		}
		public function delete(){
			$data=$this->First_model->delete($this->session->userdata['DATA']->ID);
			if($data){
				redirect('login');
				
				$this->session->set_flashdata('status','<div class="alert alert-success text-center">Account Delete Successfull!</div>');
		}
	}
}
