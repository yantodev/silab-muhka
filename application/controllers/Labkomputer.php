<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Labkomputer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Admin_labkom');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('labkomputer/index');
        $this->load->view('layout/footer');
    }

    public function datakomputer()
    {
        $data['title'] = 'Data Komputer';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Admin_labkom->getAllDataKomputer();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('labkomputer/data-komputer', $data);
        $this->load->view('layout/footer');
    }

    public function peminjam()
    {
        $data['title'] = 'Peminjam';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Admin_labkom->getAllDataPeminjam();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('labkomputer/peminjam', $data);
        $this->load->view('layout/footer');
    }
}
