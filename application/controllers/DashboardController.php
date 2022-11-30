<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pkh');
        $this->load->library('Ses_pemetaan');
    }

    public function index()
    {

        $kecamatans = $this->kecamatan();
        $kelurahans = $this->kelurahan();
        // var_dump($kelurahans);
        // die;



        $this->template->load('main/app', 'dashboard/index', [
            'title' => 'Dashboard',
            'page_title' => 'Pemetaan',
            'kelurahan' => $kelurahans,
            'kecamatan' => $kecamatans
        ]);
    }

    public function kecamatan()
    {
        $this->load->model('Kecamatan');
        $ex = new Ses_pemetaan();

        $kec = array();

        $getKecamatan = $this->Kecamatan->get()->result_array();

        foreach ($getKecamatan as $kecamatan) {
            $data = $this->Pkh->byKecamatan($kecamatan['nama'])->result_array();
            array_push($kec, $ex->hitung($data));
        }

        return $kec;
    }

    public function kelurahan()
    {
        $this->load->model('Kelurahan');
        $ex = new Ses_pemetaan();

        $kel = array();

        $getKelurahan = $this->Kelurahan->get()->result_array();

        foreach ($getKelurahan as $kelurahan) {
            $data = $this->Pkh->byKelurahan($kelurahan['kelurahan'])->result_array();
            array_push($kel, $ex->hitung($data));
        }

        return $kel;
    }
}
