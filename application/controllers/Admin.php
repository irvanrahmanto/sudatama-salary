<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');

    }

	public function index()
	{
        $data['title'] = 'Admin Dashboard';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('émail')])->row_array();

        $this->load->view('admin/index');
        // $this->load->view('auth/_templates/auth_header', $data);
    }

	
}