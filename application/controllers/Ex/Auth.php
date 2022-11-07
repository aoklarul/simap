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
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'SIMAP | Login';
            $this->load->view('auth/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            #Usernya aktif
            if ($user['status'] == 'Aktif') {
                #cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'level_user' => $user['level_user']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['level_user'] == 'Admin') {
                        $this->session->set_flashdata('login', 'Anda berhasil masuk kedalam sistem');
                        redirect('dashboard');
                    } else {
                        $this->session->set_flashdata('login', 'Anda berhasil masuk kedalam sistem');
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('pesan', "Password Salah");
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', "Username tidak aktif");
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', "Username belum terdaftar");
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level_user');

        $this->session->set_flashdata('logout', 'Kamu Berhasil Logout');
        redirect('auth');
    }

    public function blokir()
    {
        $this->load->view('auth/blokir_akses');
    }
}
