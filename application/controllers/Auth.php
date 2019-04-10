<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

	public function index()
	{
        $data['title'] = 'Login Page';
        $this->load->view('auth/_templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('auth/_templates/auth_footer');
        
    }
    
    public function register()
    {
        if($this->form_validation->run()==false){
            $data['title'] = 'Registration Page';
            $this->load->view('auth/_templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('auth/_templates/auth_footer');
        }
        else{
            redirect('auth');
        }
    }

    public function logout()
    {

    }

	
}