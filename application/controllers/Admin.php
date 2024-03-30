<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != 1) {
            $this->session->set_flashdata('gagal', 'Anda harus login terlebih dahulu');
            redirect('auth');
        }
    }


    public function index()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['guru'] = $this->db->get('tb_guru')->result_array();
        $data['alumni'] = $this->db->get('tb_alumni')->result_array();
        $data['prestasi'] = $this->db->get('tb_prestasi')->result_array();
        $data['berita'] = $this->db->get('tb_berita')->result_array();
        $data['ekskul'] = $this->db->get('tb_ekskul')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tenagapendidikan()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['guru'] = $this->db->get('tb_guru')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/guru/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahtenagapendidikan()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('nip', 'nip', 'trim|is_unique[tb_guru.nip]', [
            'is_unique' => 'Nip sudah terdaftar'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'trim|required', [
            'required' => 'Nama wajib diisi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required', [
            'required' => 'Jenis kelamin wajib diisi'
        ]);
        $this->form_validation->set_rules('mapel', 'mapel', 'trim|required', [
            'required' => 'Mata Pelajaran wajib diisi'
        ]);


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/guru/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nip = htmlspecialchars($this->input->post('nip'));
            $nama = htmlspecialchars($this->input->post('nama'));
            $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin'));
            $mapel = htmlspecialchars($this->input->post('mapel'));
            $gelar = htmlspecialchars($this->input->post('gelar'));

            $foto = upload_foto('foto', 'guru');

            $data = [
                'nip' => $nip,
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'mapel' => $mapel,
                'gelar' => $gelar,
                'foto' => $foto
            ];
            $this->db->insert('tb_guru', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/tenagapendidikan');
        }
    }
    public function edittenagapendidikan($id = 0)
    {
        $data['guru'] = $this->db->get_where('tb_guru', ['id_guru' => $id])->row_array();
        if ($data['guru'] == null) {
            redirect('admin/tenagapendidikan');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];


        $this->form_validation->set_rules('nama', 'nama', 'trim|required', [
            'required' => 'Nama wajib diisi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required', [
            'required' => 'Jenis kelamin wajib diisi'
        ]);
        $this->form_validation->set_rules('mapel', 'mapel', 'trim|required', [
            'required' => 'Mata Pelajaran wajib diisi'
        ]);


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/guru/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nip = htmlspecialchars($this->input->post('nip'));
            $nama = htmlspecialchars($this->input->post('nama'));
            $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin'));
            $mapel = htmlspecialchars($this->input->post('mapel'));
            $gelar = htmlspecialchars($this->input->post('gelar'));
            $foto_lama = htmlspecialchars($this->input->post('foto_lama'));

            $foto = update_foto($id, $foto_lama, 'guru');

            $data = [
                'nip' => $nip,
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'mapel' => $mapel,
                'gelar' => $gelar,
                'foto' => $foto
            ];
            $this->db->update('tb_guru', $data, ['id_guru' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/tenagapendidikan');
        }
    }

    public function hapustenagapendidikan($id = 0)
    {
        $data['guru'] = $this->db->get_where('tb_guru', ['id_guru' => $id])->row_array();
        if ($data['guru'] == null) {
            redirect('admin/tenagapendidikan');
        }

        unlink('./assets/img/guru/' . $data['guru']['foto']);

        $this->db->delete('tb_guru', ['id_guru' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus ');
        redirect('admin/tenagapendidikan');
    }

    public function prestasi()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['prestasi'] = $this->prestasi->getprestasi()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/prestasi/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahprestasi()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('tgl_awal', 'tgl awal', 'trim|required');
        $this->form_validation->set_rules('tgl_akhir', 'tgl akhir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/prestasi/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $tgl_awal = htmlspecialchars($this->input->post('tgl_awal'));
            $tgl_akhir = htmlspecialchars($this->input->post('tgl_akhir'));
            $alamat = htmlspecialchars($this->input->post('alamat'));
            $keterangan = $this->input->post('keterangan');

            $foto = upload_foto('foto', 'prestasi');

            $data = [
                'judul' => $judul,
                'tgl_awal' => $tgl_awal,
                'tgl_akhir' => $tgl_akhir,
                'alamat' => $alamat,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->insert('tb_prestasi', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/prestasi');
        }
    }
    public function editprestasi($id = 0)
    {
        $data['prestasi'] = $this->db->get_where('tb_prestasi', ['id_prestasi' => $id])->row_array();
        if ($data['prestasi'] == null) {
            redirect('admin/prestasi');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('judul', 'judul', 'trim|required');
        $this->form_validation->set_rules('tgl_awal', 'tgl awal', 'trim|required');
        $this->form_validation->set_rules('tgl_akhir', 'tgl akhir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/prestasi/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $tgl_awal = htmlspecialchars($this->input->post('tgl_awal'));
            $tgl_akhir = htmlspecialchars($this->input->post('tgl_akhir'));
            $alamat = htmlspecialchars($this->input->post('alamat'));
            $keterangan = $this->input->post('keterangan');
            $foto_lama = $this->input->post('foto_lama');

            $foto = update_foto($id, $foto_lama, 'prestasi');

            $data = [
                'judul' => $judul,
                'tgl_awal' => $tgl_awal,
                'tgl_akhir' => $tgl_akhir,
                'alamat' => $alamat,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->update('tb_prestasi', $data, ['id_prestasi' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/prestasi');
        }
    }

    public function hapusprestasi($id = 0)
    {
        $data['prestasi'] = $this->db->get_where('tb_prestasi', ['id_prestasi' => $id])->row_array();
        if ($data['prestasi'] == null) {
            redirect('admin/prestasi');
        }

        unlink('./assets/img/prestasi/' . $data['prestasi']['foto']);

        $this->db->delete('tb_prestasi', ['id_prestasi' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus ');
        redirect('admin/prestasi');
    }

    public function eskul()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['ekskul'] = $this->db->get('tb_ekskul')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ekskul/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahekskul()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('nama_ekskul', 'Nama ekskul', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/ekskul/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nama_ekskul = htmlspecialchars($this->input->post('nama_ekskul'));
            $keterangan = $this->input->post('keterangan');

            $foto = upload_foto('foto', 'ekskul');
            $data = [
                'nama_ekskul' => $nama_ekskul,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->insert('tb_ekskul', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/eskul');
        }
    }
    public function editekskul($id = 0)
    {
        $data['ekskul'] = $this->db->get_where('tb_ekskul', ['id_ekskul' => $id])->row_array();
        if ($data['ekskul'] == null) {
            redirect('admin/eskul');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('nama_ekskul', 'Nama ekskul', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/ekskul/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nama_ekskul = htmlspecialchars($this->input->post('nama_ekskul'));
            $keterangan = $this->input->post('keterangan');
            $foto_lama = htmlspecialchars($this->input->post('foto_lama'));
            $foto = update_foto($id, $foto_lama, 'ekskul');
            $data = [
                'nama_ekskul' => $nama_ekskul,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->update('tb_ekskul', $data, ['id_ekskul' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/eskul');
        }
    }

    public function hapusekskul($id = 0)
    {
        $data['ekskul'] = $this->db->get_where('tb_ekskul', ['id_ekskul' => $id])->row_array();
        if ($data['ekskul'] == null) {
            redirect('admin/eskul');
        }

        unlink('./assets/img/ekskul/' . $data['ekskul']['foto']);

        $this->db->delete('tb_ekskul', ['id_ekskul' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
        redirect('admin/eskul');
    }

    public function alumni()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['alumni'] = $this->db->get('tb_alumni')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/alumni/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahalumni()
    {

        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required|max_length[280]');
        $this->form_validation->set_rules('keterangan_lanjut', 'Keterangan lanjut', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/alumni/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nama = htmlspecialchars($this->input->post('nama'));
            $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin'));
            $keterangan = $this->input->post('keterangan');
            $keterangan_lanjut = $this->input->post('keterangan_lanjut');
            $foto = upload_foto('foto', 'alumni');

            $data = [
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'keterangan' => $keterangan,
                'keterangan_lanjut' => $keterangan_lanjut,
                'foto' => $foto
            ];

            $this->db->insert('tb_alumni', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/alumni');
        }
    }
    public function editalumni($id = 0)
    {
        $data['alumni'] = $this->db->get_where('tb_alumni', ['id_alumni' => $id])->row_array();
        if ($data['alumni'] == null) {
            redirect('admin/alumni');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required|max_length[280]');
        $this->form_validation->set_rules('keterangan_lanjut', 'Keterangan lanjut', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/alumni/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nama = htmlspecialchars($this->input->post('nama'));
            $jenis_kelamin = htmlspecialchars($this->input->post('jenis_kelamin'));
            $keterangan = $this->input->post('keterangan');
            $keterangan_lanjut = $this->input->post('keterangan_lanjut');
            $foto_lama = htmlspecialchars($this->input->post('foto_lama'));
            $foto = update_foto($id, $foto_lama, 'alumni');


            $data = [
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'keterangan' => $keterangan,
                'keterangan_lanjut' => $keterangan_lanjut,
                'foto' => $foto
            ];

            $this->db->update('tb_alumni', $data, ['id_alumni' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/alumni');
        }
    }

    public function hapusalumni($id = 0)
    {
        $data['alumni'] = $this->db->get_where('tb_alumni', ['id_alumni' => $id])->row_array();
        if ($data['alumni'] == null) {
            redirect('admin/alumni');
        }

        unlink('./assets/img/alumni/' . $data['alumni']['foto']);

        $this->db->delete('tb_alumni', ['id_alumni' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
        redirect('admin/alumni');
    }

    public function galeri()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['galeri'] = $this->db->get('tb_galeri')->result_array();
        $data['galeri10'] = $this->galeri->getgaleri10()->result_array();
        $data['galeri11'] = $this->galeri->getgaleri11()->row_array();
        $data['galeri12'] = $this->galeri->getgaleri12()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/galeri/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahgaleri()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('subtitle', 'Subtitle', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/galeri/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $title = htmlspecialchars($this->input->post('title'));
            $subtitle = htmlspecialchars($this->input->post('subtitle'));
            $foto = upload_foto('foto', 'galeri');

            $data = [
                'title' => $title,
                'subtitle' => $subtitle,
                'foto' => $foto
            ];
            $this->db->insert('tb_galeri', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/galeri');
        }
    }
    public function editgaleri($id = 0)
    {
        $data['galeri'] = $this->db->get_where('tb_galeri', ['id_galeri' => $id])->row_array();
        if ($data['galeri'] == null) {
            redirect('admin/galeri');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('subtitle', 'Subtitle', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/galeri/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $title = htmlspecialchars($this->input->post('title'));
            $subtitle = htmlspecialchars($this->input->post('subtitle'));
            $foto_lama = htmlspecialchars($this->input->post('foto_lama'));
            $foto = update_foto($id, $foto_lama, 'galeri');

            $data = [
                'title' => $title,
                'subtitle' => $subtitle,
                'foto' => $foto
            ];
            $this->db->update('tb_galeri', $data, ['id_galeri' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/galeri');
        }
    }

    public function hapusgaleri($id = 0)
    {
        $data['galeri'] = $this->db->get_where('tb_galeri', ['id_galeri' => $id])->row_array();
        if ($data['galeri'] == null) {
            redirect('admin/galeri');
        }

        unlink('./assets/img/galeri/' . $data['galeri']['foto']);

        $this->db->delete('tb_galeri', ['id_galeri' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
        redirect('admin/galeri');
    }

    public function berita()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['berita'] = $this->berita->getberita()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/berita/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahberita()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required|max_length[280]');
        $this->form_validation->set_rules('keterangan_lanjut', 'Keterangan lanjut', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/berita/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $tanggal = htmlspecialchars($this->input->post('tanggal'));
            $keterangan = $this->input->post('keterangan');
            $keterangan_lanjut = $this->input->post('keterangan_lanjut');

            $foto = upload_foto('foto', 'berita');

            $data = [
                'judul' => $judul,
                'tanggal' => $tanggal,
                'keterangan' => $keterangan,
                'keterangan_lanjut' => $keterangan_lanjut,
                'foto' => $foto
            ];
            $this->db->insert('tb_berita', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil di tambah');
            redirect('admin/berita');
        }
    }
    public function editberita($id = 0)
    {
        $data['berita'] = $this->db->get_where('tb_berita', ['id_berita' => $id])->row_array();
        if ($data['berita'] == null) {
            redirect('admin/berita');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required|max_length[280]');
        $this->form_validation->set_rules('keterangan_lanjut', 'Keterangan lanjut', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/berita/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $tanggal = htmlspecialchars($this->input->post('tanggal'));
            $keterangan = $this->input->post('keterangan');
            $keterangan_lanjut = $this->input->post('keterangan_lanjut');
            $foto_lama = $this->input->post('foto_lama');

            $foto = update_foto($id, $foto_lama, 'berita');

            $data = [
                'judul' => $judul,
                'tanggal' => $tanggal,
                'keterangan' => $keterangan,
                'keterangan_lanjut' => $keterangan_lanjut,
                'foto' => $foto
            ];
            $this->db->update('tb_berita', $data, ['id_berita' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/berita');
        }
    }

    public function hapusberita($id = 0)
    {
        $data['berita'] = $this->db->get_where('tb_berita', ['id_berita' => $id])->row_array();
        if ($data['berita'] == null) {
            redirect('admin/berita');
        }

        unlink('./assets/img/berita/' . $data['berita']['foto']);
        $this->db->delete('tb_berita', ['id_berita' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
        redirect('admin/berita');
    }

    public function gantipassword()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[8]|matches[konfirmasi_password]');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi password', 'trim|required|min_length[5]|max_length[8]|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/gantipassword', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $password = htmlspecialchars($this->input->post('password'));
            $id = $this->session->userdata('id_user');
            $password = password_hash($password, PASSWORD_DEFAULT);
            $data = ['password' => $password];
            $this->db->update('tb_user', $data, ['id_user' => $id]);
            $this->session->set_flashdata('berhasil', 'Password berhasil diganti');
            redirect('admin/gantipassword');
        }
    }

    public function identitas()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['identitas'] = $this->db->get('tb_identitas')->row_array();

        $this->form_validation->set_rules('nama_sekolah', 'Nama sekolah', 'trim|required');
        $this->form_validation->set_rules('slogan', 'Slogan', 'trim|required');
        $this->form_validation->set_rules('nohp', 'No hp /wa', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('penutup', 'Penutup', 'trim|required');
        $this->form_validation->set_rules('link_ppdb', 'Link PPDB', 'trim|required|valid_url');
        $this->form_validation->set_rules('link_fb', 'Link Facebook', 'trim|required|valid_url');
        $this->form_validation->set_rules('link_ig', 'Link Instagram', 'trim|required|valid_url');
        $this->form_validation->set_rules('link_yt', 'Link Youtube', 'trim|required|valid_url');
        $this->form_validation->set_rules('sambutan', 'Sambutan Kepala Sekolah', 'trim|required|min_length[280]');
        $this->form_validation->set_rules('sambutan_lanjutan', 'Sambutan Lanjutan', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/indentitas', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nama_sekolah = htmlspecialchars($this->input->post('nama_sekolah'));
            $slogan = htmlspecialchars($this->input->post('slogan'));
            $nohp = htmlspecialchars($this->input->post('nohp'));
            $email = htmlspecialchars($this->input->post('email'));
            $link_ppdb = htmlspecialchars($this->input->post('link_ppdb'));
            $link_fb = htmlspecialchars($this->input->post('link_fb'));
            $link_ig = htmlspecialchars($this->input->post('link_ig'));
            $link_yt = htmlspecialchars($this->input->post('link_yt'));
            $sambutan = htmlspecialchars($this->input->post('sambutan'));
            $penutup = htmlspecialchars($this->input->post('penutup'));
            $sambutan_lanjutan = $this->input->post('sambutan_lanjutan');
            $foto_lama = $this->input->post('foto_lama');

            $foto = update_foto('', $foto_lama, 'identitas');
            $data = [
                'nama_sekolah' => $nama_sekolah,
                'slogan' => $slogan,
                'logo' => $foto,
                'nohp' => $nohp,
                'email' => $email,
                'link_ppdb' => $link_ppdb,
                'link_fb' => $link_fb,
                'link_ig' => $link_ig,
                'link_yt' => $link_yt,
                'sambutan' => $sambutan,
                'sambutan_lanjutan' => $sambutan_lanjutan,
                'penutup' => $penutup
            ];
            $id =   $this->input->post('id');
            $this->db->update('tb_identitas', $data, ['id_identitas' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/identitas');
        }
    }

    public function jurusan()
    {

        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['jurusan'] = $this->db->get('tb_jurusan')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/jurusan/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahjurusan()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('nama_jurusan', 'Jurusan', 'trim|required|is_unique[tb_jurusan.nama_jurusan]');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/jurusan/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nama_jurusan = htmlspecialchars($this->input->post('nama_jurusan'));
            $keterangan = $this->input->post('keterangan');

            $foto = upload_foto('foto', 'jurusan');
            $data = [
                'nama_jurusan' => $nama_jurusan,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->insert('tb_jurusan', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/jurusan');
        }
    }
    public function editjurusan($id = 0)
    {
        $data['jurusan'] = $this->db->get_where('tb_jurusan', ['id_jurusan' => $id])->row_array();
        if ($data['jurusan'] == null) {
            redirect('admin/jurusan');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('nama_jurusan', 'Jurusan', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/jurusan/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $nama_jurusan = htmlspecialchars($this->input->post('nama_jurusan'));
            $keterangan = $this->input->post('keterangan');
            $foto_lama = $this->input->post('foto_lama');

            $foto = update_foto($id, $foto_lama, 'jurusan');
            $data = [
                'nama_jurusan' => $nama_jurusan,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->update('tb_jurusan', $data, ['id_jurusan' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/jurusan');
        }
    }

    public function hapusjurusan($id = 0)
    {
        $data['jurusan'] = $this->db->get_where('tb_jurusan', ['id_jurusan' => $id])->row_array();
        if ($data['jurusan'] == null) {
            redirect('admin/jurusan');
        }

        unlink('./assets/img/jurusan/' . $data['jurusan']['foto']);

        $this->db->delete('tb_jurusan', ['id_jurusan' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
        redirect('admin/jurusan');
    }

    public function banner()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['banner'] = $this->db->get('tb_banner')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/banner/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahbanner()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required|max_length[280]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/banner/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $keterangan = $this->input->post('keterangan');

            $foto = upload_foto('foto', 'banner');

            $data = [
                'judul' => $judul,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->insert('tb_banner', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/banner');
        }
    }

    public function editbanner($id = 0)
    {
        $data['banner'] = $this->db->get_where('tb_banner', ['id_banner' => $id])->row_array();
        if ($data['banner'] == null) {
            redirect('admin/banner');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required|max_length[280]');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/banner/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $keterangan = $this->input->post('keterangan');
            $foto_lama = $this->input->post('foto_lama');

            $foto = update_foto($id, $foto_lama, 'banner');

            $data = [
                'judul' => $judul,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->update('tb_banner', $data, ['id_banner' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/banner');
        }
    }

    public function hapusbanner($id = 0)
    {
        $data['banner'] = $this->db->get_where('tb_banner', ['id_banner' => $id])->row_array();
        if ($data['banner'] == null) {
            redirect('admin/banner');
        }

        unlink('./assets/img/banner/' . $data['banner']['foto']);

        $this->db->delete('tb_banner', ['id_banner' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
        redirect('admin/banner');
    }

    public function profil()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['profil'] = $this->db->get('tb_profil')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/profil/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahprofil()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['profil'] = $this->db->get('tb_profil')->result_array();

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required|is_unique[tb_profil.judul]');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/profil/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $keterangan = $this->input->post('keterangan');
            $foto = upload_foto('foto', 'profil');
            $data = [
                'judul' => $judul,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->insert('tb_profil', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/profil');
        }
    }
    public function editprofil($id = 0)
    {
        $data['profil'] = $this->db->get_where('tb_profil', ['id_profil' => $id])->row_array();
        if ($data['profil'] == null) {
            redirect('admin/profil');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/profil/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $keterangan = $this->input->post('keterangan');
            $foto_lama = $this->input->post('foto_lama');
            $foto = update_foto($id, $foto_lama, 'profil');
            $data = [
                'judul' => $judul,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->update('tb_profil', $data, ['id_profil' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/profil');
        }
    }

    public function hapusprofil($id = 0)
    {
        $data['profil'] = $this->db->get_where('tb_profil', ['id_profil' => $id])->row_array();
        if ($data['profil'] == null) {
            redirect('admin/profil');
        }

        unlink('./assets/img/profil/' . $data['profil']['foto']);

        $this->db->delete('tb_profil', ['id_profil' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
        redirect('admin/profil');
    }
    public function sarana()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/sarana/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahsarana()
    {
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];
        $data['sarana'] = $this->db->get('tb_sarana')->result_array();

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required|is_unique[tb_sarana.judul]');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/sarana/tambah', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $keterangan = $this->input->post('keterangan');
            $foto = upload_foto('foto', 'sarana');
            $data = [
                'judul' => $judul,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->insert('tb_sarana', $data);
            $this->session->set_flashdata('berhasil', 'Data berhasil ditambah');
            redirect('admin/sarana');
        }
    }
    public function editsarana($id = 0)
    {
        $data['sarana'] = $this->db->get_where('tb_sarana', ['id_sarana' => $id])->row_array();
        if ($data['sarana'] == null) {
            redirect('admin/sarana');
        }
        $identitas = $this->db->get('tb_identitas')->row_array();
        $data['title'] = $identitas['nama_sekolah'];
        $data['logo'] = $identitas['logo'];

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/sarana/edit', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $judul = htmlspecialchars($this->input->post('judul'));
            $keterangan = $this->input->post('keterangan');
            $foto_lama = $this->input->post('foto_lama');
            $foto = update_foto($id, $foto_lama, 'sarana');
            $data = [
                'judul' => $judul,
                'keterangan' => $keterangan,
                'foto' => $foto
            ];
            $this->db->update('tb_sarana', $data, ['id_sarana' => $id]);
            $this->session->set_flashdata('berhasil', 'Data berhasil diedit');
            redirect('admin/sarana');
        }
    }

    public function hapussarana($id = 0)
    {
        $data['sarana'] = $this->db->get_where('tb_sarana', ['id_sarana' => $id])->row_array();
        if ($data['sarana'] == null) {
            redirect('admin/sarana');
        }

        unlink('./assets/img/sarana/' . $data['sarana']['foto']);

        $this->db->delete('tb_sarana', ['id_sarana' => $id]);
        $this->session->set_flashdata('berhasil', 'Data berhasil dihapus');
        redirect('admin/sarana');
    }
}

/* End of file Admin.php */
