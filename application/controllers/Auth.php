<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Admin | Login';
			$this->load->view('auth/layout/header', $data);
			$this->load->view('auth/index');
			$this->load->view('auth/layout/footer');
		} else {
			//validation succes
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

		//jika ada user
		if ($user) {
			//jika user aktif
			if ($user['is_active'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'level_id' => $user['level_id']
					];
					$this->session->set_userdata($data);
					if ($user['level_id'] == 1) {
						redirect('Administrator');
					} else if ($user['level_id'] == 2) {
						redirect('Labkomputer');
					} else {
						redirect('LabTKRO');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!!!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktifkan! Silahkan hubungi <b>Administrtor</b></div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!!!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nbm', 'NBM', 'required|numeric|trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
			'is_unique' => 'Email sudah terdaftar!!!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password tidak sama!!!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Admin | Registratiion';
			$this->load->view('auth/layout/header', $data);
			$this->load->view('auth/registration');
			$this->load->view('auth/layout/footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nbm' => htmlspecialchars($this->input->post('nbm', true)),
				'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'level_id' => htmlspecialchars($this->input->post('level_id', true)),
				'is_active' => 0,
				'date_created' => time()
			];

			$this->db->insert('tbl_user', $data);

			// $this->_sendEmail();

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat!!! Akun Anda berhasil ditambahkan.</div>');
			redirect('auth');
		}
	}

	// private function _sendEmail()
	// {
	// 	$config = [
	// 		'protocol' => 'smtp',
	// 		'smtp_host' => 'ssl://smtp.googlemail.com',
	// 		'smtp_user' => 'ekocahyanto007@gmail.com',
	// 		'smtp_pass' => 'Cahya1993',
	// 		'smtp_port' => 465,
	// 		'mailtype' => 'html',
	// 		'starttls'  => true,
	// 		'charset' => 'utf-8',
	// 		'newlina' => "\r\n",
	// 	];

	// 	$this->load->library('email', $config);

	// 	$this->email->from('ekocahyanto007@gmail.com', 'Eko Cahyanto');
	// 	$this->email->to('cahya93@smkmuhkarangmojo.sch.id');
	// 	$this->email->subject('Testing');
	// 	$this->email->message('Hello World!');

	// 	if ($this->email->send()) {
	// 		return true;
	// 	} else {
	// 		echo $this->email->print_debugger();
	// 		die;
	// 	}
	// }

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat!!! Anda berhasil logout!!!</div>');
		redirect('auth');
	}

	public function blocked()
	{
		$data['title'] = 'Page Not Found';
		$this->load->view('auth/layout/header', $data);
		$this->load->view('auth/blocked');
		$this->load->view('auth/layout/footer');
	}
}
