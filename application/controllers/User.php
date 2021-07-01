<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        } elseif ($this->session->userdata('level_user') !== 'Admin') {
            redirect('auth/blokir');
        }
        $this->load->model('M_user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Kelola Data Pengguna';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->M_user->ambilSemuaUser();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('user/user', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Pengguna';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['level_user'] = ['Admin', 'Pengawas'];

        $this->form_validation->set_rules(
            'name',
            'Nama Pengguna',
            'required|trim',
            array('required' => 'Nama pengguna tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[user.username]|min_length[5]',
            array(
                'required' => 'Username tidak boleh kosong',
                'is_unique' => 'Username telah digunakan',
                'min_length' => 'Mohon masukkan username minimal 5 karakter'
            )
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[4]',
            array(
                'min_length' => 'Mohon masukkan password dengan minimal 4 karakter',
                'required' => 'Password tidak boleh kosong'
            )
        );
        $this->form_validation->set_rules(
            'password2',
            'Ulangi password',
            'trim|matches[password1]',
            array('matches' => 'Password tidak sesuai.')
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim',
            array('required' => 'Email tidak boleh kosong')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar');
            $this->load->view('user/tambah_user', $data);
            $this->load->view('template/footer');
        } else {
            $upload_gambar = $_FILES['image']['name'];

            if ($upload_gambar) {
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['max_size']         = 4048;
                $config['upload_path']      = './assets/assets/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['user']['image'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/assets/img/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->M_user->tambahUser($upload_gambar);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('user');
        }
    }

    public function ubah($idUser)
    {
        $data['judul'] = 'Ubah Data Pengguna';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->M_user->ambilIdUser($idUser);
        $data['level_user'] = ['Admin', 'Pegawai'];
        $data['status'] = ['Aktif', 'Tidak Aktif'];

        $this->form_validation->set_rules(
            'name',
            'Nama user',
            'required|trim',
            array('required' => 'Nama user tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim',
            array('required' => 'Email tidak boleh kosong')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar');
            $this->load->view('user/ubahuser', $data);
            $this->load->view('template/footer');
        } else {
            $upload_gambar = $_FILES['image']['name'];

            if ($upload_gambar) {
                $config['allowed_types']    = 'jpg|png|jpeg';
                $config['max_size']         = 4048;
                $config['upload_path']      = './assets/assets/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['users']['image'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/assets/img/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->M_user->ubahUser();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user');
        }
    }

    public function hapus($idUser)
    {
        $data['users'] = $this->M_user->ambilIdUser($idUser);

        $gambar_lama = $data['users']['image'];
        if ($gambar_lama != 'default.jpg') {
            unlink(FCPATH . 'assets/assets/img/' . $gambar_lama);
        }

        $this->M_user->hapusUser($idUser);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('user');
    }

    public function reset_password($idUser)
    {
        $data['judul'] = 'Reset Password Pengguna';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->M_user->ambilIdUser($idUser);

        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[4]|max_length[16]',
            array(
                'min_length' => 'Mohon masukkan password dengan minimal 4 karakter',
                'required' => 'Password tidak boleh kosong'
            )
        );
        $this->form_validation->set_rules(
            'password2',
            'Ulangi password',
            'trim|matches[password1]',
            array('matches' => 'Password tidak sesuai.')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar');
            $this->load->view('user/resetpassword', $data);
            $this->load->view('template/footer');
        } else {

            $this->M_user->resetPassword();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user');
        }
    }
}
