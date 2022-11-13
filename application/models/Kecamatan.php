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

  public function add($data)
  {
    $this->db->insert($this->_table, $data);
  }
}
