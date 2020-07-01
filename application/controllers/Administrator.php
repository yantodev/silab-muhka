<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Administrator_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('administrator/index');
        $this->load->view('layout/footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('administrator/profile', $data);
        $this->load->view('layout/footer');
    }

    public function adminlevel()
    {
        $data['title'] = 'Admin Level';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['level'] = $this->db->get('user_level')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('administrator/admin-level', $data);
        $this->load->view('layout/footer');
    }

    public function adminaccess($level_id)
    {
        $data['title'] = 'Admin Access';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['level'] = $this->db->get_where('user_level', ['id' => $level_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('administrator/admin-access', $data);
        $this->load->view('layout/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $level_id = $this->input->post('levelId');

        $data = [
            'level_id' => $level_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!!!</div>');
    }

    public function editProfile()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nbm', 'NBM', 'required|trim|numeric');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar', $data);
            $this->load->view('administrator/edit-profile');
            $this->load->view('layout/footer');
        } else {
            $nama = $this->input->post('nama');
            $nbm = $this->input->post('nbm');
            $jabatan = $this->input->post('jabatan');
            $email = $this->input->post('email');

            //Jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_type'] = 'gif|jpg|png';
                $config['max-size']     = '2048';
                $config['upload_path']  =  './assets/images/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['tbl_user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->set('nbm', $nbm);
            $this->db->set('jabatan', $jabatan);
            $this->db->where('email', $email);
            $this->db->update('tbl_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been update!</div>');
            redirect('administrator/profile');
        }
    }

    public function akun()
    {
        $data['title'] = 'Akun';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Administrator_model->getAllUser();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('administrator/akun', $data);
        $this->load->view('layout/footer');
    }

    public function akunAktivasi()
    {
        $data['title'] = 'Aktivasi Akun';
        $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->Administrator_model->getAllUser();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('administrator/akun-aktivasi', $data);
        $this->load->view('layout/footer');
    }
}
