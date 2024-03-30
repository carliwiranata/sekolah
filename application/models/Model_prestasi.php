<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_prestasi extends CI_Model
{

    public function getprestasi3()
    {
        $query = "SELECT * FROM tb_prestasi ORDER BY id_prestasi DESC LIMIT 3";
        return $this->db->query($query);
    }
    public function getprestasi()
    {
        $query = "SELECT * FROM tb_prestasi ORDER BY id_prestasi DESC";
        return $this->db->query($query);
    }
}

/* End of file Model_prestasi.php */
