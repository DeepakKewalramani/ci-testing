<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(['form_validation', 'session']);
		$this->load->database('default');
		$this->load->model('First_model');
		$this->load->library('upload');
	}
	public function index()
	{
		if ($this->session->has_userdata('DATA')){
			$this->form_validation->set_rules('new_name', 'NAME', 'trim|required');
			$this->form_validation->set_rules('new_username', 'USERNAME', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('new_password', 'PASSWORD', 'trim|required|min_length[8]');

			if ($this->form_validation->run() == FALSE) {
				$id = $this->session->userdata('ID');
				$this->db->where('ID', $id);
				$data = $this->db->get('users')->row();
				$this->load->view('home', [
					'data' => $data
				]);
			} else {
				$id = $this->session->userdata('ID');
				$name = $this->input->post('new_name');
				$username = $this->input->post('new_username');
				$password = md5($this->input->post('new_password'));
				$data = array(
					'ID' => $id,
					'NAME' => $name,
					'USERNAME' => $username,
					'PASSWORD' => $password
				);
				if ($this->First_model->check_username($username,$id) == 0)  {
					
					if ($result = $this->First_model->update_user($data)) {
						$session=array('status'=>'TRUE','DATA'=>$data);
					
						$this->session->set_userdata($session);
						$this->session->set_flashdata('status', '<div class="alert alert-success text-center">Change Successfully!</div>');
						redirect('home/index');
						
					} else {
						$this->session->set_flashdata('status', '<div class="alert alert-success text-center">Something want wrong!</div>');
						redirect('login/index');
					}
				} else {
					$this->session->set_flashdata('status', '<div class="alert alert-danger text-center">Username already exsits</div>');
					redirect('home/index');
				}
			}
		} else {
			redirect('login/index');
		}
	}
	public function upload(){
		redirect('upload');
		// if($this->input->method()=='POST'){
			
		// 	$img=$this->input->post('file');
		// 	print_r($img);

		// }
		
	}


	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('status', '<div class="alert alert-success text-center">Log Out!</div>');
		
		redirect('home/index');
	}


	public function delete()
	{
		$data = $this->First_model->delete($this->session->userdata['DATA']->ID);
		if ($data) {
			$this->session->set_flashdata('status', '<div class="alert alert-success text-center">Account Delete Successfull!</div>');
			redirect('login/index');

			
		}
	}
}
