<?php

class Dashboard_model extends CI_Model
{
    public function get_total_pemohon(): string
    {
        $query = "SELECT COUNT(user.id_user) AS total FROM user WHERE user.role = 'pemohon'";
        return $this->db->query($query)->row('total');
    }

    public function get_total_pengajuan(): string
    {
        $query = "SELECT COUNT(pendaftaran.id_pendaftaran) AS total FROM pendaftaran WHERE pendaftaran.status = 'divalidasi'";
        return $this->db->query($query)->row('total');
    }

    public function get_total_loker(): string
    {
        $query = "SELECT COUNT(lowongan_kerja.id_lowongan_kerja) AS total FROM lowongan_kerja";
        return $this->db->query($query)->row('total');
    }
}
