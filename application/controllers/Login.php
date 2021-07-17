<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(['form_validation','session']);
        $this->load->database('default');
        $this->load->model('First_model');
    }
    function index(){
        $this->form_validation->set_rules('username','USERNAME','trim|required|min_length[5]');
        $this->form_validation->set_rules('password','PASSWORD','trim|required|min_length[8]');
        if($this->form_validation->run()==FALSE){
            $this->load->view('login');
        }
        else{
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $data=['USERNAME'=>$username, 'PASSWORD'=>md5($password)];
        
        if($result=$this->First_model->check_user($data)){
            $sdata=array('STATUS'=>'TRUE','DATA'=>$result);
            
            $this->session->set_userdata($sdata);
            $this->session->set_flashdata('status','<div class="alert alert-success text-center">Login Successfully</div>');
            redirect('home/index');
        }else{
            $this->session->set_flashdata('status','<div class="alert alert-danger text-center">Please enter a valid username and password!!!</div>');
                redirect('login/index');
        }
        
    }
    }
}