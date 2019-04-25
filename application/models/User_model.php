<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getadmin()
    {
        $query = $this->db->get('admin');
        return $query->result_array();
    }

    public function getkaryawan()
    {
        $query = $this->db->get('karyawan');
        return $query->result_array();
    }
}
