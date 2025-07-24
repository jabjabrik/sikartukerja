<?php

class Monitoring_model extends CI_Model
{
    public function get_all($role = null, $id_user = null, $status = null): array
    {
        $where = "";

        if ($role === 'pemohon') {
            $where .= "AND monitoring.id_user = '$id_user'";
        }

        if ($status) {
            $where .= "AND monitoring.status_bekerja = '$status'";
        }

        $query = "SELECT monitoring.*, user.nama
        FROM monitoring
        JOIN user ON monitoring.id_user = user.id_user
        WHERE 1=1 $where
        ORDER BY monitoring.id_monitoring DESC";
        return  $this->db->query($query)->result();
    }
}
