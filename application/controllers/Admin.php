<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['title'] = 'Admin Dashboard';
        $data['karyawan'] = $this->M_admin->viewkaryawan();
        $data['gajikaryawan'] = $this->M_admin->viewgaji();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahgaji()
    {
        $confirm = $this->input->post('submit');
        $input = $this->M_admin->validation("addgaji");
        if ($confirm) {
            if ($input) {
                $this->M_admin->addgaji();
                // $this->session->set_flashdata('message', 'Gaji berhasil diinputkan');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Gaji berhasil diinputkan');
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf! Gaji gagal diinputkan');
            }
        }
        $this->load->view('admin/index');
    }

    // public function gaji()
    // {
    //     $data = [
    //         'id_gaji' => $this->input->post('id'),
    //         'gaji_default' => $this->input->post('gaji'),
    //         'gaji_lembur' => $this->input->post('lembur'),
    //         'totalgaji' => $this->input->post('total')
    //     ];

    //     $inputgaji = $this->Gaji_model->inputgaji($data, 'kelolagaji');
    //     if ($inputgaji) {
    //         $this->session->set_flashdata('message', 'Input gaji berhasil');
    //     } else {
    //         $this->session->set_flashdata('message', 'Input gaji gagal');
    //     }
    //     redirect('admin');
    // }
}
