<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(['form_validation','session']);
        $this->load->database('default');
        $this->load->model('First_model');
    }
    function index(){
        $this->form_validation->set_rules('name', 'NAME', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('username','USERNAME','trim|required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        if($this->form_validation->run()==FALSE){
            $this->load->view('signup');
        }else{
            $name = $this->input->post('name');
            $user = $this->input->post('username');
            $pass = md5($this->input->post('password'));
           if($this->First_model->check_username($user)==0){
            $data=array(
                'USERNAME'=>$user,
                'PASSWORD'=>$pass,
                'NAME'=>$name,
                'PROFILE_PATH'=>'user-picture.png'
            ); 
            if($this->First_model->create_user($data)){
                $this->session->set_flashdata('status','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
                redirect('signup/index');
            }else
            {
                // error
                $this->session->set_flashdata('status','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('signup/index');
            }
        }else{
            $this->session->set_flashdata('status','<div class="alert alert-danger text-center">Username already exsits</div>');
            redirect('signup/index');
        }
    }
       
        
    }

}