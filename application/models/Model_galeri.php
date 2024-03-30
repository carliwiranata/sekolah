<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_galeri extends CI_Model
{
    public function getgaleri10()
    {
        $query = "SELECT * FROM tb_galeri LIMIT 10";
        return $this->db->query($query);
    }
    public function getgaleri11()
    {
        $query = "SELECT * FROM tb_galeri LIMIT 1 OFFSET 10";
        return $this->db->query($query);
    }
    public function getgaleri12()
    {
        $query = "SELECT * FROM tb_galeri LIMIT 11, 9999999999999999";
        return $this->db->query($query);
    }
}

/* End of file Model_galeri.php */
