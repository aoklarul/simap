<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PkhController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('username')) {
      redirect('login');
    } elseif ($this->session->userdata('level_user') !== 'Pengawas') {
      redirect('blocked');
    }

    $this->load->library('form_validation');
    $this->load->model('Users');
    $this->load->model('Pkh');
    $this->load->model('Kelurahan');
    $this->load->model('Kecamatan');
  }

  public function index()
  {
    $this->template->load('main/app', 'pkh/index', [
      'title' => 'Jumlah PKH',
      'user' => $this->Users->checkLogin()->row(),
      'page_title' => 'Data Jumlah PKH',
      'jumlah_pkh' => $this->Pkh->get()->result()
    ]);
  }

  public function create()
  {
    $month = $this->listBulan();
    $this->form_validation->set_rules('jumlah', 'Jumlah PKH', 'required|trim');
    $this->form_validation->set_rules('bulan', 'Bulan', 'required|trim');
    $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim');
    $this->form_validation->set_rules('idKelurahan', 'Kelurahan', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'pkh/create', [
        'title' => 'Jumlah PKH',
        'user' => $this->Users->checkLogin()->row(),
        'page_title' => 'Tambah Jumlah PKH',
        'bulan' => $month,
        'kelurahan' => $this->Kelurahan->get()->result()
      ]);
    } else {

      $jumlah = $this->input->post('jumlah');
      $bulan = $this->input->post('bulan');
      $tahun = $this->input->post('tahun');
      $idKelurahan = $this->input->post('idKelurahan');

      if ($this->kelurahan_check($bulan, $tahun, $idKelurahan) == FALSE) {
        $this->session->set_flashdata('error', 'Data sudah ada!');
        redirect('pkh/create');
        return;
      }

      $data = [
        'jumlah' => $jumlah,
        'bulan' => $bulan,
        'tahun' => $tahun,
        'idKelurahan' => $idKelurahan
      ];

      $this->Pkh->add($data);
      $this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
      redirect('pkh');
    }
  }

  public function edit($id)
  {
    $month = $this->listBulan();
    $this->form_validation->set_rules('jumlah', 'Jumlah PKH', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->template->load('main/app', 'pkh/edit', [
        'title' => 'Jumlah PKH',
        'user' => $this->Users->checkLogin()->row(),
        'page_title' => 'Ubah Data Jumlah PKH',
        'bulan' => $month,
        'kelurahan' => $this->Kelurahan->get()->result(),
        'jumlah_pkh' => $this->Pkh->find($id)->row()
      ]);
    } else {

      $jumlah = $this->input->post('jumlah');

      $data = $jumlah;

      $this->Pkh->edit($data, $id);
      $this->session->set_flashdata('message', 'Data berhasil diubah!');
      redirect('pkh');
    }
  }

  public function delete($id)
  {
    $this->Pkh->delete($id);
    $this->session->set_flashdata('message', 'Data berhasil dihapus!');
    redirect('pkh');
  }

  public function kelurahan_check($bulan, $tahun, $idKelurahan)
  {
    $query = $this->db->query("SELECT * FROM jumlah_pkh WHERE bulan = '$bulan' AND tahun = '$tahun' AND idKelurahan = '$idKelurahan'");
    if ($query->num_rows() > 0) {
      return FALSE;
    } else {
      return TRUE;
    }
  }

  public function listBulan()
  {
    return [
      [
        'id' => 1,
        'month' => 'Januari'
      ],
      [
        'id' => 2,
        'month' => 'Februari'
      ],
      [
        'id' => 3,
        'month' => 'Maret'
      ],
      [
        'id' => 4,
        'month' => 'April'
      ],
      [
        'id' => 5,
        'month' => 'Mei'
      ],
      [
        'id' => 6,
        'month' => 'Juni'
      ],
      [
        'id' => 7,
        'month' => 'Juli'
      ],
      [
        'id' => 8,
        'month' => 'Agustus'
      ],
      [
        'id' => 9,
        'month' => 'September'
      ],
      [
        'id' => 10,
        'month' => 'Oktober'
      ],
      [
        'id' => 11,
        'month' => 'November'
      ],
      [
        'id' => 12,
        'month' => 'Desember'
      ],
    ];
  }
}
