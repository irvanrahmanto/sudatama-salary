<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Gaji_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('émail')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function admin()
    {
        $data = [
            'idAdmin' => $this->input->post('id'),
            'namaAdmin' => $this->input->post('namaadmin'),
            'passAdmin' => $this->input->post('passadmin'),
            'kontakAdmin' => $this->input->post('kontakadmin')
        ];
    }

    public function gaji()
    {
        $data = [
            'id_gaji' => $this->input->post('id'),
            'gaji_default' => $this->input->post('gaji'),
            'gaji_lembur' => $this->input->post('lembur'),
            'totalgaji' => $this->input->post('total')
        ];

        $inputgaji = $this->Gaji_model->inputgaji($data);
        if ($inputgaji) {
            $this->session->set_flashdata('message', 'Input gaji berhasil');
        } else {
            $this->session->set_flashdata('message', 'Input gaji gagal');
        }
    }
}
