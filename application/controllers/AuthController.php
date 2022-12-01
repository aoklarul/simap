<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('username')) {
      redirect('dashboard');
    }

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'SIMAP | Login';
      $this->load->view('auth/index', $data);
    } else {
      $this->_process();
    }
  }

  private function _process()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['username' => $username])->row_array();

    if (!$user) {
      $this->session->set_flashdata('message', "Usename atau password yang anda masukkan salah!");
      redirect('login');
      return;
    }

    if (!password_verify($password, $user['password'])) {
      $this->session->set_flashdata('message', "Usename atau password yang anda masukkan salah!");
      redirect('login');
      return;
    }

    if ($user['status'] !== 'Aktif') {
      $this->session->set_flashdata('message', "Akun tidak aktif");
      redirect('login');
      return;
    }

    $data = [
      'username' => $user['username'],
      'email' => $user['email'],
      'level_user' => $user['level_user']
    ];

    $this->session->set_userdata($data);
    redirect('dashboard');
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('level_user');

    $this->session->set_flashdata('message', 'Kamu Berhasil Logout');
    redirect('login');
  }

  public function blocked()
  {
    $this->load->view('blocked');
  }
}
