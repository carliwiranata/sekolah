<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $data['prestasi'] = $this->prestasi->getprestasi3()->result_array();
        $data['eskul'] = $this->db->get('tb_ekskul')->result_array();
        $data['guru'] = $this->db->get('tb_guru')->result_array();
        $data['alumni'] = $this->db->get('tb_alumni')->result_array();
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['galeri'] = $this->db->get('tb_galeri')->result_array();
        $data['berita'] = $this->berita->getberitaterbaru()->result_array();
        $data['banner'] = $this->db->get('tb_banner')->result_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/home/footer', $data);
    }

    public function berita()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $data['berita'] = $this->berita->getberita()->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/berita', $data);
        $this->load->view('templates/home/footer', $data);
    }

    public function galeri()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $data['galeri'] = $this->db->get('tb_galeri')->result_array();
        $data['galeri10'] = $this->galeri->getgaleri10()->result_array();
        $data['galeri11'] = $this->galeri->getgaleri11()->row_array();
        $data['galeri12'] = $this->galeri->getgaleri12()->result_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/galeri', $data);
        $this->load->view('templates/home/footer', $data);
    }

    public function jurusan($id = 0)
    {
        $data['jurusan1'] = $this->db->get_where('tb_jurusan', ['id_jurusan' => $id])->row_array();
        if ($data['jurusan1'] == null) {
            redirect('home');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/jurusan', $data);
        $this->load->view('templates/home/footer', $data);
    }

    public function eskul($id = 0)
    {
        $data['eskul'] = $this->db->get_where('tb_ekskul', ['id_ekskul' => $id])->row_array();
        if ($data['eskul'] == null) {
            redirect('home');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/eskul', $data);
        $this->load->view('templates/home/footer', $data);
    }

    public function profil($id = 0)
    {
        $data['profil1'] = $this->db->get_where('tb_profil', ['id_profil' => $id])->row_array();
        if ($data['profil1'] == null) {
            redirect('home');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/profil', $data);
        $this->load->view('templates/home/footer', $data);
    }

    public function sarana($id = 0)
    {
        $data['sarana1'] = $this->db->get_where('tb_sarana', ['id_sarana' => $id])->row_array();
        if ($data['sarana1'] == null) {
            redirect('home');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/sarana', $data);
        $this->load->view('templates/home/footer', $data);
    }

    public function prestasi()
    {
        $data['prestasi'] = $this->prestasi->getprestasi()->result_array();
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/prestasi', $data);
        $this->load->view('templates/home/footer', $data);
    }
    public function sambutan()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();
        $this->load->view('templates/home/navbar', $data);
        $this->load->view('home/identitas', $data);
        $this->load->view('templates/home/footer', $data);
    }
}

/* End of file Home.php */
