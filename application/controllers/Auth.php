<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Gaji_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        // $this->form_validation->set_rules('email', 'Email', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');

        // if ($this->form_validation->run() == false) {
        $data['title'] = 'Login Page';
        $data['input'] = $this->Gaji_model->getall();

        $this->load->view('auth/_templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('auth/_templates/auth_footer');
        // }
    }

    public function register()
    {
        $data['title'] = 'Registration Page';
        $this->load->view('auth/_templates/auth_header', $data);
        $this->load->view('auth/register');
        $this->load->view('auth/_templates/auth_footer');
    }

    public function gaji()
    {
        // $get = $this->user_model->getall();
        // var_dump($get);
        $id = $this->input->post('id');
        $gaji_default = $this->input->post('gaji');
        $gaji_lembur = $this->input->post('lembur');
        $total_gaji = $this->input->post('total');

        $data = [
            'id_gaji' => $id,
            'gaji_default' => $gaji_default,
            'gaji_lembur' => $gaji_lembur,
            'totalgaji' => $total_gaji
        ];
        var_dump($data);

        $inputgaji = $this->Gaji_model->inputgaji('kelolagaji', $data);

        if ($inputgaji > 0) {
            $this->session->set_flashdata('message', 'Input gaji berhasil');
        } else {
            $this->session->set_flashdata('message', 'Input gaji gagal');
        }
        redirect('admin');
    }
}
