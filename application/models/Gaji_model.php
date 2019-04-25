<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gaji_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getall()
    {
        $query = $this->db->get('kelolagaji');
        return $query->result_array();
    }

    public function get_gaji($id_gaji)
    {
        $query = $this->db->where('id_gaji', $id_gaji);
        return $query->row_array();
    }

    public function inputgaji($data)
    {
        $query = $this->db->insert('kelolagaji', $data);
        return $query;
        // return $query->result_array();
    }
}
