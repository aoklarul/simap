<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelurahanController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Kelurahan');
    $this->load->model('Kecamatan');
  }

  public function index()
  {
    $this->template->load('main/app', 'kelurahan/index', [
      'title' => 'Kelurahan',
      'page_title' => 'Data Kelurahan',
      'kelurahan' => $this->Kelurahan->get()->result()
    ]);
  }

  public function create()
  {
    $this->form_validation->set_rules('nama', 'Kelurahan', 'required|trim');
    if (empty($_FILES['geojson']['name'])) {
      $this->form_validation->set_rules('geojson', 'Geojson', 'required|trim');
    }

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'kelurahan/create', [
        'title' => 'Kelurahan',
        'page_title' => 'Tambah Data Kelurahan',
        'kecamatan' => $this->Kecamatan->get()->result()
      ]);
    } else {
      if (!empty($_FILES['geojson']['name'])) {
        $config['upload_path']          = './assets/geojson/kelurahan/';
        $config['allowed_types']        = 'geojson';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('geojson')) {
          echo $this->upload->display_errors();
          die;
        } else {
          $file_name = $this->upload->data('file_name');
          $nama = $this->input->post('nama');
          $idKecamatan = $this->input->post('idKecamatan');
          $warna = $this->input->post('warna');

          $data = [
            'idKecamatan' => $idKecamatan,
            'nama' => $nama,
            'geojson' => $file_name,
            'warna' => $warna
          ];
        }
      }

      $this->Kelurahan->add($data);
      $this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
      redirect('kelurahan');
    }
  }

  public function edit($id)
  {
    $this->form_validation->set_rules('nama', 'Kelurahan', 'required|trim');
    $kelurahan = $this->Kelurahan->find($id)->row_array();

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'kelurahan/edit', [
        'title' => 'Kelurahan',
        'page_title' => 'Ubah Data Kelurahan',
        'kelurahan' => $this->Kelurahan->find($id)->row(),
        'kecamatan' => $this->Kecamatan->get()->result()
      ]);
    } else {
      if (!empty($_FILES['geojson']['name'])) {
        $config['upload_path']          = './assets/geojson/kelurahan/';
        $config['allowed_types']        = 'geojson';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('geojson')) {
          echo $this->upload->display_errors();
          die;
        } else {
          $old_geojson = $kelurahan['geojson'];
          unlink(FCPATH . 'assets/geojson/kelurahan/' . $old_geojson);

          $file_name = $this->upload->data('file_name');
          $nama = $this->input->post('nama');
          $idKecamatan = $this->input->post('idKecamatan');
          $warna = $this->input->post('warna');

          $data = [
            'idKecamatan' => $idKecamatan,
            'nama' => $nama,
            'geojson' => $file_name,
            'warna' => $warna
          ];
        }
      }

      if (empty($_FILES['geojson']['name'])) {
        $nama = $this->input->post('nama');
        $idKecamatan = $this->input->post('idKecamatan');
        $warna = $this->input->post('warna');

        $data = [
          'idKecamatan' => $idKecamatan,
          'nama' => $nama,
          'warna' => $warna
        ];
      }

      $this->Kelurahan->edit($data, $id);
      $this->session->set_flashdata('message', 'Data berhasil diubah!');
      redirect('kelurahan');
    }
  }

  public function delete($id)
  {
    $kelurahan = $this->Kelurahan->find($id)->row_array();

    $old_geojson = $kelurahan['geojson'];
    unlink(FCPATH . 'assets/geojson/kelurahan/' . $old_geojson);

    $this->Kelurahan->delete($id);
    $this->session->set_flashdata('message', 'Data berhasil dihapus!');
    redirect('kelurahan');
  }
}
