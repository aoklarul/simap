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
          $warna = $this->input->post('warna');

          $data = [
            'nama' => $nama,
            'geojson' => $file_name,
            'warna' => $warna
          ];
        }
      }

      $this->Kecamatan->add($data);
      $this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
      redirect('kecamatan');
    }
  }

  public function edit($id)
  {
    $this->form_validation->set_rules('nama', 'Kecamatan', 'required|trim');
    $kecamatan = $this->Kecamatan->find($id)->row_array();

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'kecamatan/edit', [
        'title' => 'Kecamatan',
        'page_title' => 'Ubah Data Kecamatan',
        'kecamatan' => $this->Kecamatan->find($id)->row()
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
          $old_geojson = $kecamatan['geojson'];
          unlink(FCPATH . 'assets/geojson/kecamatan/' . $old_geojson);

          $file_name = $this->upload->data('file_name');
          $nama = $this->input->post('nama');

          $data = [
            'nama' => $nama,
            'geojson' => $file_name
          ];
        }
      }

      if (empty($_FILES['geojson']['name'])) {
        $nama = $this->input->post('nama');

        $data = [
          'nama' => $nama
        ];
      }

      $this->Kecamatan->edit($data, $id);
      $this->session->set_flashdata('message', 'Data berhasil diubah!');
      redirect('kecamatan');
    }
  }

  public function delete($id)
  {
    $kecamatan = $this->Kecamatan->find($id)->row_array();

    $old_geojson = $kecamatan['geojson'];
    unlink(FCPATH . 'assets/geojson/kecamatan/' . $old_geojson);

    $this->Kecamatan->delete($id);
    $this->session->set_flashdata('message', 'Data berhasil dihapus!');
    redirect('kecamatan');
  }
}
