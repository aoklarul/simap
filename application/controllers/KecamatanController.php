<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KecamatanController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Kecamatan');
  }

  public function index()
  {
    $this->template->load('main/app', 'kecamatan/index', [
      'title' => 'Kecamatan',
      'page_title' => 'Data Kecamatan',
      'kecamatan' => $this->Kecamatan->get()->result()
    ]);
  }

  public function create()
  {
    $this->form_validation->set_rules('nama', 'Kecamatan', 'required|trim');
    if (empty($_FILES['geojson']['name'])) {
      $this->form_validation->set_rules('geojson', 'Geojson', 'required|trim');
    }

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'kecamatan/create', [
        'title' => 'Kecamatan',
        'page_title' => 'Tambah Data Kecamatan'
      ]);
    } else {
      if (!empty($_FILES['geojson']['name'])) {
        $config['upload_path']          = './assets/geojson/kecamatan/';
        $config['allowed_types']        = 'geojson';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('geojson')) {
          echo $this->upload->display_errors();
          die;
        } else {
          $file_name = $this->upload->data('file_name');
          $nama = $this->input->post('nama');

          $data = [
            'nama' => $nama,
            'geojson' => $file_name
          ];
        }

        $this->Kecamatan->add($data);
        $this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
        redirect('kecamatan');
      }
    }
  }
}
