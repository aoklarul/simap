<?php

class M_user extends CI_model
{
    public function ambilSemuaUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function tambahUser($upload_gambar)
    {
        $data = [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'name' => htmlspecialchars($this->input->post('name', true)),
            'image' => $upload_gambar,
            'email' => htmlspecialchars($this->input->post('email', true)),
            'level_user' => $this->input->post('level_user', true),
            'status' => 'Aktif'
        ];

        $this->db->insert('user', $data);
    }

    public function ambilIdUser($idUser)
    {
        return $this->db->get_where('user', ['id' => $idUser])->row_array();
    }

    public function ubahUser()
    {
        $data = [

            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'level_user' => $this->input->post('level_user', true),
            'status' => $this->input->post('status', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function resetPassword()
    {
        $data = [
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function hapusUser($idUser)
    {
        $this->db->where('id', $idUser);
        $this->db->delete('user');
    }

    public function ubahProfil($data)
    {
        $this->db->set('name', $data['name']);
        $this->db->set('email', $data['email']);
        $this->db->where('username', $data['username']);
        $this->db->update('user');
    }

    public function ubahPassword($password_hash)
    {
        $this->db->set('password', $password_hash);
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('user');
    }
}
