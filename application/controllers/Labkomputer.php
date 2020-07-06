<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Labkomputer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Admin_labkom');
        $this->load->model('Administrator_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pc'] = $this->Admin_labkom->PC();
        $data['laptop'] = $this->Admin_labkom->Laptop();
        $data['alat'] = $this->Admin_labkom->hitungAlat();
        $data['bahan'] = $this->Admin_labkom->hitungBahan();
        $data['proker'] = $this->Administrator_model->Proker();

        $data['title'] = 'Dashboard';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('labkomputer/index', $data);
        $this->load->view('layout/footer');
    }
    public function editProker($id)
    {
        $data['title'] = 'Edit Program Kerja';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['proker'] = $this->Administrator_model->Proker();
        $data['proker'] = $this->Administrator_model->getProkerById($id);
        $data['status'] = ['Sudah', 'Belum'];

        $this->form_validation->set_rules('status', 'status', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('labkomputer/edit-proker', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Admin_labkom->editProker();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Program Kerja Berhasil diupdate!!!</div>');
            redirect('labkomputer');
        }
    }

    public function datakomputer()
    {
        $data['title'] = 'Data Komputer';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Admin_labkom->getAllDataKomputer();
        $data['ruang'] = ['R01-Lab. Komputer Barat', 'R02-Lab. Komputer Timur', 'R03-Lab. Bahasa', 'R04-Lab. Akuntansi'];

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

    public function alat()
    {
        $data['title'] = 'Alat';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alat'] = $this->Admin_labkom->getAlat();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('labkomputer/alat', $data);
        $this->load->view('layout/footer');
    }

    public function bahan()
    {
        $data['title'] = 'Bahan';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bahan'] = $this->Admin_labkom->getBahan();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('labkomputer/bahan', $data);
        $this->load->view('layout/footer');
    }

    public function AlatBahan()
    {
        $data['title'] = 'Alat & Bahan';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pilih'] = ['Alat', 'Bahan'];
        $data['perangkat'] = $this->Admin_labkom->getAlatBahan();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('labkomputer/alat-bahan', $data);
        $this->load->view('layout/footer');
    }
}
