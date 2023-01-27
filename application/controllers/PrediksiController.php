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
    $hasil1 = $ex->hitung($jumlah_pkh, 0.1);
    $hasil2 = $ex->hitung($jumlah_pkh, 0.2);
    $hasil3 = $ex->hitung($jumlah_pkh, 0.3);
    $hasil4 = $ex->hitung($jumlah_pkh, 0.4);
    $hasil5 = $ex->hitung($jumlah_pkh, 0.5);
    $hasil6 = $ex->hitung($jumlah_pkh, 0.6);
    $hasil7 = $ex->hitung($jumlah_pkh, 0.7);
    $hasil8 = $ex->hitung($jumlah_pkh, 0.8);
    $hasil9 = $ex->hitung($jumlah_pkh, 0.9);

    $this->template->load('main/app', 'prediksi/kecamatan/index', [
      'title' => 'Prediksi Kecamatan',
      'page_title' => 'Prediksi',
      'user' => $this->Users->checkLogin()->row(),
      'kecamatan' => $this->Kecamatan->get()->result(),
      'jumlah_pkh' => $jumlah_pkh,
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

  public function kelurahan()
  {
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

    $this->template->load('main/app', 'prediksi/kelurahan/index', [
      'title' => 'Prediksi Kelurahan',
      'page_title' => 'Prediksi',
      'user' => $this->Users->checkLogin()->row(),
      'kelurahan' => $this->Kelurahan->get()->result(),
      'jumlah_pkh' => $jumlah_pkh,
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
