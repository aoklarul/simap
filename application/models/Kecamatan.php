<?php

class Kecamatan extends CI_model
{
  private $_table = 'kecamatan';
  private $_primaryKey = 'id';

  public function get()
  {
    $query = $this->db->get($this->_table);

    return $query;
  }

  public function find($id)
  {
    $query = $this->db->get_where($this->_table, [$this->_primaryKey => $id]);

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
