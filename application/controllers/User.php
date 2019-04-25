<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function pegawai()
    {
        $data = [
            'idKaryawan' => $this->input->post('idkar'),
            'idManage' => $this->input->post('idman'),
            'namaKaryawan' => $this->input->post('namak'),
            'passkaryawan' => $this->input->post('passk'),
            'usernameK' => $this->input->post('usernamek'),
            'emailK' => $this->input->post('emailk');];
    }
}
