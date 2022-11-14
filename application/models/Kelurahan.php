<?php

class Kelurahan extends CI_model
{
  private $_table = 'kelurahan';
  private $_primaryKey = 'id';

  public function get()
  {
    $this->db->select('kelurahan.id as id, kecamatan.nama as kecamatan, kelurahan.nama as kelurahan, idKecamatan, kelurahan.geojson as geojson');
    $this->db->from($this->_table);
    $this->db->join('kecamatan', 'kecamatan.id = kelurahan.idKecamatan');
    $query = $this->db->get();

    return $query;
  }

  public function find($id)
  {
    $this->db->select('kelurahan.id as id, kecamatan.nama as kecamatan, kelurahan.nama as kelurahan, idKecamatan, kelurahan.geojson as geojson');
    $this->db->from($this->_table);
    $this->db->join('kecamatan', 'kecamatan.id = kelurahan.idKecamatan');
    $this->db->where('kelurahan.id', $id);
    $query = $this->db->get();

    return $query;
  }

  public function add($data)
  {
    $this->db->insert($this->_table, $data);
  }

  public function edit($data, $id)
  {
    $this->db->where($this->_primaryKey, $id);
    $this->db->update($this->_table, $data);
  }

  public function delete($id)
  {
    $this->db->where($this->_primaryKey, $id);
    $this->db->delete($this->_table);
  }
}
