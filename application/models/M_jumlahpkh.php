<?php

class M_jumlahpkh extends CI_model
{
    public function ambilSemuaJumlahpkh()
    {
        $query = $this->db->select('jumlah, tahun, bulan, nama, jumlah_pkh.id, idKecamatan')
            ->from('jumlah_pkh')
            ->join('kecamatan', 'jumlah_pkh.idKecamatan = kecamatan.id')
            ->order_by('tahun, kecamatan.nama')
            ->get()->result_array();
        return $query;
    }

    public function tambahJumlahpkh()
    {
        $data = [
            "idKecamatan" => $this->input->post('kecamatan', true),
            // "idKelurahan" => $this->input->post('kelurahan', true),
            "bulan" => $this->input->post('bulan', true),
            "tahun" => $this->input->post('tahun', true),
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->insert('jumlah_pkh', $data);
    }

    public function ambilIdJumlahpkh($idJumlah_pkh)
    {

        $query = $this->db->select('jumlah, tahun, bulan, nama, jumlah_pkh.id, idKecamatan')
            ->from('jumlah_pkh')
            ->join('kecamatan', 'jumlah_pkh.idKecamatan = kecamatan.id')
            ->where('jumlah_pkh.id', $idJumlah_pkh)
            ->order_by('tahun, kecamatan.nama')
            ->get()->row_array();
        return $query;
    }

    public function ubahJumlahpkh()
    {
        $data = [
            "jumlah" => $this->input->post('jumlah', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jumlah_pkh', $data);
    }

    public function hapusJumlahpkh($idJumlah_pkh)
    {
        $this->db->where('id', $idJumlah_pkh);
        $this->db->delete('jumlah_pkh');
    }
}
