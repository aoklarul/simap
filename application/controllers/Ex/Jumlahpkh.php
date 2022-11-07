<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jumlahpkh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_jumlahpkh');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Kelola Data Jumlah PKH';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['jumlah_pkh'] = $this->M_jumlahpkh->ambilSemuaJumlahpkh();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('jumlahpkh/jumlahpkh', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['judul'] = 'Tambah Data Jumlah PKH';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        // $data['kelurahan'] = $this->db->get('kelurahan')->result_array();
        $data['bulan'] = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        // $data['jenis_bantuan'] = ['Kesehatan', 'Pendidikan', "Kesejahteraan Sosial"];

        $this->form_validation->set_rules(
            'kecamatan',
            'Kecamatan',
            'required|trim|callback_kecamatan_check',
            array('required' => 'Kecamatan tidak boleh kosong')
        );
        // $this->form_validation->set_rules(
        //     'kelurahan',
        //     'Kelurahan',
        //     'required|trim',
        //     array('required' => 'Kelurahan tidak boleh kosong')
        // );
        $this->form_validation->set_rules(
            'bulan',
            'Bulan',
            'required|trim',
            array('required' => 'Bulan tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'tahun',
            'Tahun',
            'required|trim',
            array('required' => 'Tahun tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'jumlah',
            'Jumlah',
            'required|trim|numeric',
            array(
                'required' => 'Jumlah PKH tidak boleh kosong',
                'numeric' => 'Jumlah PKH harus angka'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar');
            $this->load->view('jumlahpkh/tambah_jmlpkh', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_jumlahpkh->tambahJumlahpkh();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('jumlahpkh');
        }
    }

    function kecamatan_check()
    {
        $post = $this->input->post(NULL, TRUE);
        $query = $this->db->query("SELECT * FROM jumlah_pkh WHERE tahun = '$post[tahun]' AND idKecamatan = '$post[kecamatan]' AND bulan = '$post[bulan]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('kecamatan_check', 'Data sudah ada');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function ubah($idJumlah_pkh)
    {
        $data['judul'] = 'Ubah Data Jumlah PKH';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['jumlah_pkh'] = $this->M_jumlahpkh->ambilIdJumlahpkh($idJumlah_pkh);

        $this->form_validation->set_rules(
            'jumlah',
            'Jumlah',
            'required|trim|numeric',
            array(
                'required' => 'Jumlah PKH tidak boleh kosong',
                'numeric' => 'Jumlah PKH harus angka'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('template/sidebar');
            $this->load->view('jumlahpkh/ubah_jumlahpkh', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_jumlahpkh->ubahJumlahpkh();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('jumlahpkh');
        }
    }

    public function hapus($idJumlah_pkh)
    {
        $this->M_jumlahpkh->hapusJumlahpkh($idJumlah_pkh);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jumlahpkh');
    }
}
