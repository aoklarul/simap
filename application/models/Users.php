<?php

class Users extends CI_model
{
  private $_table = 'user';
  private $_primaryKey = 'id';

  public function checkLogin()
  {
    $query = $this->db->get_where($this->_table, ['username' => $this->session->userdata('username')]);

    return $query;
  }

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

  public function reset_password($data, $id)
  {
    $this->db->set('password', $data);
    $this->db->where($this->_primaryKey, $id);
    $this->db->update($this->_table);
  }

  public function delete($id)
  {
    $this->db->where($this->_primaryKey, $id);
    $this->db->delete($this->_table);
  }
}
