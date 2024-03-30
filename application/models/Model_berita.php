<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_berita extends CI_Model
{

    public function getberitaterbaru()
    {
        $query = "SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 6";
        return $this->db->query($query);
    }
    public function getberita()
    {
        $query = "SELECT * FROM tb_berita ORDER BY id_berita DESC";
        return $this->db->query($query);
    }
}

/* End of file Model_berita.php */
