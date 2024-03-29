<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('username')) {
            redirect('login');
        }

        $this->load->model('Pkh');
        $this->load->model('Users');
        $this->load->library('Ses_pemetaan');
        $this->load->model('Kecamatan');
        $this->load->model('Kelurahan');
    }

    public function index()
    {

        $kecamatan1 = $this->kecamatan(0.1);
        $kecamatan2 = $this->kecamatan(0.2);
        $kecamatan3 = $this->kecamatan(0.3);
        $kecamatan4 = $this->kecamatan(0.4);
        $kecamatan5 = $this->kecamatan(0.5);
        $kecamatan6 = $this->kecamatan(0.6);
        $kecamatan7 = $this->kecamatan(0.7);
        $kecamatan8 = $this->kecamatan(0.8);
        $kecamatan9 = $this->kecamatan(0.9);

        $kelurahan1 = $this->kelurahan(0.1);
        $kelurahan2 = $this->kelurahan(0.2);
        $kelurahan3 = $this->kelurahan(0.3);
        $kelurahan4 = $this->kelurahan(0.4);
        $kelurahan5 = $this->kelurahan(0.5);
        $kelurahan6 = $this->kelurahan(0.6);
        $kelurahan7 = $this->kelurahan(0.7);
        $kelurahan8 = $this->kelurahan(0.8);
        $kelurahan9 = $this->kelurahan(0.9);

        $this->template->load('main/app', 'dashboard/index', [
            'title' => 'Dashboard',
            'user' => $this->Users->checkLogin()->row(),
            'page_title' => 'Pemetaan',
            'kelurahan1' => $kelurahan1,
            'kelurahan2' => $kelurahan2,
            'kelurahan3' => $kelurahan3,
            'kelurahan4' => $kelurahan4,
            'kelurahan5' => $kelurahan5,
            'kelurahan6' => $kelurahan6,
            'kelurahan7' => $kelurahan7,
            'kelurahan8' => $kelurahan8,
            'kelurahan9' => $kelurahan9,
            'kecamatan1' => $kecamatan1,
            'kecamatan2' => $kecamatan2,
            'kecamatan3' => $kecamatan3,
            'kecamatan4' => $kecamatan4,
            'kecamatan5' => $kecamatan5,
            'kecamatan6' => $kecamatan6,
            'kecamatan7' => $kecamatan7,
            'kecamatan8' => $kecamatan8,
            'kecamatan9' => $kecamatan9

        ]);
    }

    public function kecamatan($konstanta)
    {
        $this->load->model('Kecamatan');
        $ex = new Ses_pemetaan();

        $kec = array();

        $getKecamatan = $this->Kecamatan->get()->result_array();

        foreach ($getKecamatan as $kecamatan) {
            $data = $this->Pkh->byKecamatan($kecamatan['nama'])->result_array();
            array_push($kec, $ex->hitung($data, $konstanta));
        }

        return $kec;
    }

    public function kelurahan($konstanta)
    {
        $this->load->model('Kelurahan');
        $ex = new Ses_pemetaan();

        $kel = array();

        $getKelurahan = $this->Kelurahan->get()->result_array();

        foreach ($getKelurahan as $kelurahan) {
            $data = $this->Pkh->byKelurahan($kelurahan['kelurahan'])->result_array();
            array_push($kel, $ex->hitung($data, $konstanta));
        }

        return $kel;
    }

    public function grafik_kecamatan()
    {
        $this->load->library('Ses');

        $cariKecamatan = $this->input->get('cari');

        $jumlah_pkh = $this->Pkh->findByKecamatan($cariKecamatan)->result_array();

        $ex = new Ses();
        $hasil1 = $ex->hitung($jumlah_pkh, 0.1);
        $hasil2 = $ex->hitung($jumlah_pkh, 0.2);
        $hasil3 = $ex->hitung($jumlah_pkh, 0.3);
        $hasil4 = $ex->hitung($jumlah_pkh, 0.4);
        $hasil5 = $ex->hitung($jumlah_pkh, 0.5);
        $hasil6 = $ex->hitung($jumlah_pkh, 0.6);
        $hasil7 = $ex->hitung($jumlah_pkh, 0.7);
        $hasil8 = $ex->hitung($jumlah_pkh, 0.8);
        $hasil9 = $ex->hitung($jumlah_pkh, 0.9);

        $this->template->load('main/app', 'dashboard/grafik_kecamatan', [
            'title' => 'Dashboard',
            'user' => $this->Users->checkLogin()->row(),
            'page_title' => 'Grafik Kecamatan',
            'kecamatan' => $this->Kecamatan->get()->result(),
            'hasil1' => $hasil1,
            'hasil2' => $hasil2,
            'hasil3' => $hasil3,
            'hasil4' => $hasil4,
            'hasil5' => $hasil5,
            'hasil6' => $hasil6,
            'hasil7' => $hasil7,
            'hasil8' => $hasil8,
            'hasil9' => $hasil9
        ]);
    }

    public function grafik_kelurahan()
    {
        $this->load->library('Ses');

        $cariKelurahan = $this->input->get('cari');

        $jumlah_pkh = $this->Pkh->findByKelurahan($cariKelurahan)->result_array();

        $ex = new Ses();
        $hasil1 = $ex->hitung($jumlah_pkh, 0.1);
        $hasil2 = $ex->hitung($jumlah_pkh, 0.2);
        $hasil3 = $ex->hitung($jumlah_pkh, 0.3);
        $hasil4 = $ex->hitung($jumlah_pkh, 0.4);
        $hasil5 = $ex->hitung($jumlah_pkh, 0.5);
        $hasil6 = $ex->hitung($jumlah_pkh, 0.6);
        $hasil7 = $ex->hitung($jumlah_pkh, 0.7);
        $hasil8 = $ex->hitung($jumlah_pkh, 0.8);
        $hasil9 = $ex->hitung($jumlah_pkh, 0.9);

        $this->template->load('main/app', 'dashboard/grafik_kelurahan', [
            'title' => 'Dashboard',
            'user' => $this->Users->checkLogin()->row(),
            'page_title' => 'Grafik Kelurahan',
            'kelurahan' => $this->Kelurahan->get()->result(),
            'hasil1' => $hasil1,
            'hasil2' => $hasil2,
            'hasil3' => $hasil3,
            'hasil4' => $hasil4,
            'hasil5' => $hasil5,
            'hasil6' => $hasil6,
            'hasil7' => $hasil7,
            'hasil8' => $hasil8,
            'hasil9' => $hasil9
        ]);
    }
}
