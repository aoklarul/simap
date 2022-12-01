<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('username')) {
      redirect('login');
    } elseif ($this->session->userdata('level_user') !== 'Admin') {
      redirect('blocked');
    }

    $this->load->library('form_validation');
    $this->load->model('Users');
  }

  public function index()
  {
    $this->load->model('Kelurahan');
    $this->template->load('main/app', 'user/index', [
      'title' => 'User',
      'user' => $this->Users->checkLogin()->row(),
      'page_title' => 'Data User',
      'users' => $this->Users->get()->result(),
      'kelurahan' => $this->Kelurahan->get()->result()
    ]);
  }

  public function create()
  {
    $this->form_validation->set_rules('name', 'Nama', 'required|trim');
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'user/create', [
        'title' => 'User',
        'user' => $this->Users->checkLogin()->row(),
        'page_title' => 'Tambah User'
      ]);
    } else {

      $name = $this->input->post('name');
      $password = $this->input->post('password');
      $username = $this->input->post('username');
      $email = $this->input->post('email');

      $data = [
        'name' => $name,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'username' => $username,
        'email' => $email,
        'image' => 'default.jpg',
        'status' => 'Aktif',
        'level_user' => 'Pengawas'
      ];

      $this->Users->add($data);
      $this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
      redirect('user');
    }
  }

  public function reset_password($id)
  {
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    $this->form_validation->set_rules('confirmPassword', 'Konfirmasi Password', 'required|trim|matches[password]');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'user/reset', [
        'title' => 'User',
        'user' => $this->Users->checkLogin()->row(),
        'page_title' => 'Reset Password User',
        'users' => $this->Users->find($id)->row()
      ]);
    } else {

      $password = $this->input->post('password');

      $data = password_hash($password, PASSWORD_DEFAULT);

      $this->Users->reset_password($data, $id);
      $this->session->set_flashdata('message', 'Data berhasil diubah!');
      redirect('user');
    }
  }

  public function delete($id)
  {
    $this->Users->delete($id);
    $this->session->set_flashdata('message', 'Data berhasil dihapus!');
    redirect('user');
  }

  public function aktif($id)
  {
    $this->db->set('status', 'Aktif');
    $this->db->where('id', $id);
    $this->db->update('user');
    $this->session->set_flashdata('message', 'Akun berhasil diaktifkan!');
    redirect('user');
  }

  public function nonaktif($id)
  {
    $this->db->set('status', 'Nonaktif');
    $this->db->where('id', $id);
    $this->db->update('user');
    $this->session->set_flashdata('message', 'Akun berhasil dinonaktifkan!');
    redirect('user');
  }
}
