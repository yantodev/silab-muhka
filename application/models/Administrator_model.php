<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('tbl_user')->result_array();
    }
}
