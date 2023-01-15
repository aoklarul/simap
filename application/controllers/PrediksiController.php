<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrediksiController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('username')) {
      redirect('login');
    }

    $this->load->model('Users');
    $this->load->model('Pkh');
    $this->load->model('Kecamatan');
    $this->load->model('Kelurahan');
    $this->load->library('Ses');
  }

  public function index()
  {
    $this->template->load('main/app', 'dashboard/index', [
      'title' => 'Dashboard',
      'user' => $this->Users->checkLogin()->row(),
      'page_title' => 'Pemetaan'
    ]);
  }

  public function kecamatan()
  {
    $cariKecamatan = $this->input->get('cari');

    $jumlah_pkh = $this->Pkh->findByKecamatan($cariKecamatan)->result_array();

    $ex = new Ses();
    $hasil = $ex->hitung($jumlah_pkh);

    $this->template->load('main/app', 'prediksi/kecamatan/index', [
      'title' => 'Prediksi Kecamatan',
      'page_title' => 'Prediksi',
      'user' => $this->Users->checkLogin()->row(),
      'kecamatan' => $this->Kecamatan->get()->result(),
      'jumlah_pkh' => $jumlah_pkh,
      'hasil' => $hasil
    ]);
  }

  public function kelurahan()
  {
    $cariKelurahan = $this->input->get('cari');

    $jumlah_pkh = $this->Pkh->findByKelurahan($cariKelurahan)->result_array();

    $ex = new Ses();
    $hasil = $ex->hitung($jumlah_pkh);

    $this->template->load('main/app', 'prediksi/kelurahan/index', [
      'title' => 'Prediksi Kelurahan',
      'page_title' => 'Prediksi',
      'user' => $this->Users->checkLogin()->row(),
      'kelurahan' => $this->Kelurahan->get()->result(),
      'jumlah_pkh' => $jumlah_pkh,
      'hasil' => $hasil
    ]);
  }
}
