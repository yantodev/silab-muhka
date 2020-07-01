<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_labkom extends CI_Model
{
    public function getAllDataKomputer()
    {
        return $this->db->get('data_komputer')->result_array();
    }

    public function getAllDataPeminjam()
    {
        return $this->db->get('peminjaman')->result_array();
    }
}
