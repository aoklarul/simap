<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
        $this->load->model('M_jumlahpkh');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('M_jumlahpkh');

        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['jumlah_pkh'] = $this->M_jumlahpkh->ambilIdPerhitungan();

        if ($this->input->get('kecamatan')) {
            $data['jumlah_pkh'] = $this->M_jumlahpkh->cariData();
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('dashboard/dashboard', $data);
        $this->load->view('template/footer');
    }
}
