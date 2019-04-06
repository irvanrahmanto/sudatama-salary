<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    }

	public function index()
	{
        $data['title'] = 'Login Page';
        $this->load->view('auth/_templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('auth/_templates/auth_footer');
        
	}

	
}