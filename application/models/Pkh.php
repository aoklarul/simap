<?php

class Pkh extends CI_model
{
  private $_table = 'jumlah_pkh';
  private $_primaryKey = 'id';

  public function get()
  {
    $this->db->select('jumlah_pkh.id as id, idKelurahan, bulan, tahun, jumlah, kelurahan.nama as kelurahan, kecamatan.nama as kecamatan');
    $this->db->from($this->_table);
    $this->db->join('kelurahan', 'kelurahan.id = jumlah_pkh.idKelurahan');
    $this->db->join('kecamatan', 'kecamatan.id = kelurahan.idKecamatan');
    $this->db->order_by('idKelurahan', 'ASC');
    $this->db->order_by('tahun', 'ASC');
    $this->db->order_by('bulan', 'ASC');
    $query = $this->db->get();

    return $query;
  }

  public function find($id)
  {
    $this->db->select('jumlah_pkh.id as id, idKelurahan, bulan, tahun, jumlah, kelurahan.nama as kelurahan, kecamatan.nama as kecamatan');
    $this->db->from($this->_table);
    $this->db->join('kelurahan', 'kelurahan.id = jumlah_pkh.idKelurahan');
    $this->db->join('kecamatan', 'kecamatan.id = kelurahan.idKecamatan');
    $this->db->where('jumlah_pkh.id', $id);
    $query = $this->db->get();

    return $query;
  }

  public function findByKelurahan($cariKelurahan = NULL)
  {
    $this->db->select('bulan, tahun, jumlah, kelurahan.nama as kelurahan, kecamatan.nama as kecamatan');
    $this->db->from($this->_table);
    $this->db->join('kelurahan', 'kelurahan.id = jumlah_pkh.idKelurahan');
    $this->db->join('kecamatan', 'kecamatan.id = kelurahan.idKecamatan');
    if ($cariKelurahan == NULL) {
      $this->db->where('kelurahan.id', '1');
    } else {
      $this->db->where('kelurahan.id', $cariKelurahan);
    }
    $this->db->order_by('tahun', 'ASC');
    $this->db->order_by('bulan', 'ASC');
    $query = $this->db->get();

    return $query;
  }

  public function findByKecamatan($cariKecamatan = NULL)
  {
    $this->db->select('bulan, tahun, SUM(jumlah) as jumlah, kecamatan.nama as kecamatan, kelurahan.nama as kelurahan');
    $this->db->from($this->_table);
    $this->db->join('kelurahan', 'kelurahan.id = jumlah_pkh.idKelurahan');
    $this->db->join('kecamatan', 'kecamatan.id = kelurahan.idKecamatan');
    if ($cariKecamatan == NULL) {
      $this->db->where('kecamatan.id', '3');
    } else {
      $this->db->where('kecamatan.id', $cariKecamatan);
    }
    $this->db->group_by('tahun, bulan, kecamatan.id');
    $this->db->order_by('tahun', 'ASC');
    $this->db->order_by('bulan', 'ASC');
    $query = $this->db->get();

    return $query;
  }

  public function add($data)
  {
    $this->db->insert($this->_table, $data);
  }

  public function edit($data, $id)
  {
    $this->db->set('jumlah', $data);
    $this->db->where($this->_primaryKey, $id);
    $this->db->update($this->_table);
  }

  public function delete($id)
  {
    $this->db->where($this->_primaryKey, $id);
    $this->db->delete($this->_table);
  }
}
