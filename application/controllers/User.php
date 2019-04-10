<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');

    }

	public function index()
	{
        $data['title'] = 'Dashboard';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('émail')])->row_array();

        $this->load->view('user/index');
        // $this->load->view('auth/_templates/auth_header', $data);
    }

	
}