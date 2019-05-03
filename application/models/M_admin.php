<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    // function __construct()
    // {
    //     parent::__construct();
    // }

    public function viewkaryawan()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function viewgaji()
    {
        // return $this->db->get('kelolagaji')->result_array();
        $this->db->select('gaji_default');
        $this->db->from('kelolagaji');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function validation()
    {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya

        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, NIS tidak harus divalidasi
        // Jadi NIS di validasi hanya ketika menambah data siswa saja
        // if($mode == "save")
        // $this->form_validation->set_rules('input_nis', 'NIS', 'required|numeric|max_length[11]');

        // $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
        // $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
        // $this->form_validation->set_rules('input_telp', 'telp', 'required|numeric|max_length[15]');
        $this->form_validation->set_rules('gaji', 'input_gaji', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    public function addgaji()
    {
        $gaji = $this->input->post('gaji');

        $data = [
            'gaji_default' => $gaji
        ];

        $this->db->insert('kelolagaji', $data);
    }

    public function cari($keyword)
    {
        // $keyword = $_POST['keyword'];
        // $query = $this->db->query("SELECT * FROM karyawan WHERE nama LIKE :keyword");
        // $this->db->bind('keyword', '%$keyword%');
        // return $this->db->resultSet();
        $this->db->like('namaKaryawan', $keyword);
        $query = $this->db->get('karyawan');
        return $query->result();
    }
}
