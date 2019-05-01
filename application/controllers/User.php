<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('User_model');
        $this->load->model('M_admin');
        $this->load->model('M_user');
    }

    public function index()
    {
        // $this->load->model('User_model');
        // $data = $this->User_model->getadmin();
        $data['title'] = 'User Dashboard';
        $data['karyawan'] = $this->M_admin->viewkaryawan();
        $data['gajikary'] = $this->M_admin->viewgaji();
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['datakar'] = $this->User_model->getkaryawan();
        // $data['dataadmin'] = $this->User_model->getadmin();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    // public function absenpegawai()
    // {
    //     $data = [
    //         'idAbsen' => $this->input->post('absen'),
    //         'idKaryawan' => $this->input->post('idkary'),
    //         'idJam' => $this->input->post('jam'),
    //         'tanggal' => $this->input->post('tanggal')
    //     ];
    // }

    // public function pegawai()
    // {
    //     $data = [
    //         'idKaryawan' => $this->input->post('idkar'),
    //         'idManage' => $this->input->post('idman'),
    //         'namaKaryawan' => $this->input->post('namak'),
    //         'passkaryawan' => $this->input->post('passk'),
    //         'usernameK' => $this->input->post('usernamek'),
    //         'emailK' => $this->input->post('emailk')
    //     ];
    // }
}
