<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('username')) {
      redirect('login');
    }

    $this->load->library('form_validation');
    $this->load->model('Users');
  }

  public function index()
  {
    $this->template->load('main/app', 'profil/index', [
      'title' => 'Profil',
      'user' => $this->Users->checkLogin()->row(),
      'page_title' => 'Profile'
    ]);
  }

  public function edit()
  {
    $checkUser = $this->Users->checkLogin()->row();

    $this->form_validation->set_rules('name', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'profil/edit', [
        'title' => 'Kelurahan',
        'user' => $this->Users->checkLogin()->row(),
        'page_title' => 'Edit Profil'
      ]);
    } else {
      if (!empty($_FILES['image']['name'])) {
        $config['upload_path']          = './assets/users/';
        $config['allowed_types']        = 'png|jpg|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
          echo $this->upload->display_errors();
          die;
        } else {
          $old_image = $checkUser->image;
          unlink(FCPATH . 'assets/users/' . $old_image);

          $file_name = $this->upload->data('file_name');
          $name = $this->input->post('name');
          $email = $this->input->post('email');

          $data = [
            'name' => $name,
            'email' => $email,
            'image' => $file_name
          ];
        }
      }

      if (empty($_FILES['image']['name'])) {
        $name = $this->input->post('name');
        $email = $this->input->post('email');

        $data = [
          'name' => $name,
          'email' => $email
        ];
      }

      $this->Users->edit_profil($data);
      $this->session->set_flashdata('message', 'Data berhasil diubah!');
      redirect('profil');
    }
  }

  public function edit_password()
  {
    $checkUser = $this->Users->checkLogin()->row();

    $this->form_validation->set_rules('currentPassword', 'Password Saat Ini', 'required|trim');
    $this->form_validation->set_rules('newPassword', 'Password Baru', 'required|trim');
    $this->form_validation->set_rules('confirmPassword', 'Ulangi Password', 'required|trim|matches[newPassword]');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'profil/index', [
        'title' => 'User',
        'user' => $this->Users->checkLogin()->row(),
        'page_title' => 'Profile'
      ]);
    } else {
      $password_sekarang = $this->input->post('currentPassword');
      $password_baru = $this->input->post('newPassword');

      if (!password_verify($password_sekarang, $checkUser->password)) {
        $this->session->set_flashdata('pesan', "Password Sekarang Salah!");
        redirect('profil');
      } else {
        if ($password_sekarang == $password_baru) {
          $this->session->set_flashdata('pesan', "Password tidak boleh sama dengan password lama");
          redirect('profil');
        } else {
          // password sudah ok
          $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

          $this->Users->edit_password($password_hash);
          $this->session->set_flashdata('message', "Password berhasil diubah");
          redirect('profil');
        }
      }
    }
  }
}
