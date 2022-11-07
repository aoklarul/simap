<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar', $data);
        $this->load->view('profil/profil', $data);
        $this->load->view('template/footer');
    }

    public function ubah()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar', $data);
            $this->load->view('profil/ubah_profil', $data);
            $this->load->view('template/footer');
        } else {
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $email = $this->input->post('email');

            #Cek ada gambar upload
            $upload_gambar = $_FILES['image']['name'];

            if ($upload_gambar) {
                $config['allowed_types']    = 'gif|jpg|png';
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

            $data = [
                "name" => $name,
                "username" => $username,
                "email" => $email
            ];

            $this->M_user->ubahProfil($data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('profil');
        }
    }

    public function ubah_password()
    {
        $data['judul'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('passwordSekarang', 'Password Saat Ini', 'required|trim');
        $this->form_validation->set_rules(
            'passwordBaru1',
            'Password Baru',
            'required|trim|min_length[4]',
            array(
                'min_length' => 'Mohon masukkan password dengan minimal 4 karakter',
                'max_length' => 'Mohon masukkan password dengan minimal 4 karakter'
            )
        );
        $this->form_validation->set_rules(
            'passwordBaru2',
            'Ulangi Password',
            'required|trim|matches[passwordBaru1]',
            array('matches' => 'Password tidak sesuai.')
        );


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar', $data);
            $this->load->view('profil/profil', $data);
            $this->load->view('template/footer');
        } else {
            $password_sekarang = $this->input->post('passwordSekarang');
            $password_baru = $this->input->post('passwordBaru1');
            if (!password_verify($password_sekarang, $data['user']['password'])) {
                $this->session->set_flashdata('pesan', "Password Sekarang Salah!");
                redirect('profil');
            } else {
                if ($password_sekarang == $password_baru) {
                    $this->session->set_flashdata('pesan', "Password tidak boleh sama dengan password lama");
                    redirect('profil');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $this->M_user->ubahPassword($password_hash);
                    $this->session->set_flashdata('pesan', "Password berhasil diubah");
                    redirect('profil');
                }
            }
        }
    }
}
