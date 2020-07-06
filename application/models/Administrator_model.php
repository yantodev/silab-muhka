<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('tbl_user')->result_array();
    }

    //program kerja
    public function Proker()
    {
        return $this->db->get('proker_kepala_laboratorium')->result_array();
    }
    public function getProkerById($id)
    {
        return $this->db->get_where('proker_kepala_laboratorium', ['id' => $id])->row_array();
    }
    public function editProker()
    {
        $data = [
            'kegiatan' => $this->input->post('kegiatan', true),
            'target' => $this->input->post('target', true),
            'waktu' => $this->input->post('waktu', true),
            'status' => $this->input->post('status', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('proker_kepala_laboratorium', $data);
    }
    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('proker_kepala_laboratorium');
    }
}
