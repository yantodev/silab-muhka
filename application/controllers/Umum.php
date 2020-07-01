<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umum extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Umum';
        $this->load->view('umum/index', $data);
    }
}
