<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    // function __construct()
    // {
    //     parent::__construct();
    // }

    public function viewabsen()
    {
        return $this->db->get('absen')->result_array();
    }
}
