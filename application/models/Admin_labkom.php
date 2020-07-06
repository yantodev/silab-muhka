<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_labkom extends CI_Model
{
    public function getAllDataKomputer()
    {
        return $this->db->get('data_komputer')->result_array();
    }
    //getTotalPC
    public function PC()
    {
        $sql = "SELECT count(if(jenis='Personal Computer', jenis, NULL)) as jenis FROM data_komputer";
        $result = $this->db->query($sql);
        return $result->row();
    }
    //total Laptop
    public function Laptop()
    {
        $sql = "SELECT count(if(jenis='laptop', jenis, NULL)) as jenis FROM data_komputer";
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function getAllDataPeminjam()
    {
        return $this->db->get('peminjaman')->result_array();
    }

    //alat
    public function getAlat()
    {
        return $this->db->get('alat_labkom')->result_array();
    }
    public function hitungAlat()
    {
        $query = $this->db->get('alat_labkom');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    //bahan
    public function getBahan()
    {
        return $this->db->get('bahan_labkom')->result_array();
    }
    public function hitungBahan()
    {
        $query = $this->db->get('bahan_labkom');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    //jenis Alat dan Bahan
    public function getAlatBahan()
    {
        return $this->db->get('jenisperangkat_labkom')->result_array();
    }

    //proker
    public function editProker()
    {
        $data = [
            'status' => $this->input->post('status', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('proker_kepala_laboratorium', $data);
    }
}
