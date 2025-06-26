<?php

class Monitoring_model extends CI_Model
{
    public function get_all($role, $id_user): array
    {
        $where = "";

        if ($role === 'pemohon') {
            $where .= "AND monitoring.id_user = '$id_user'";
        }

        $query = "SELECT monitoring.*, user.nama
        FROM monitoring
        JOIN user ON monitoring.id_user = user.id_user
        WHERE 1=1 $where";
        return  $this->db->query($query)->result();
    }
}
