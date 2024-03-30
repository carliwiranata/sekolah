<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <div class="flash-datagagal" data-flashdata="<?= $this->session->flashdata('gagal') ?>"></div>
            <div class="flash-databerhasil" data-flashdata="<?= $this->session->flashdata('berhasil') ?>"></div>
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">


                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="<?= base_url('assets/') ?>img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="<?= base_url('admin/gantipassword') ?>" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Ganti Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="<?= base_url('admin') ?>"><?= $title ?></a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="<?= base_url('admin') ?>">GLG</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li><a class="nav-link" href="<?= base_url('admin') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                    <li class="menu-header">Master Data</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th-large"></i> <span>Master Data</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="<?= base_url('admin/tenagapendidikan') ?>">Tenaga Pendidikan</a></li>
                            <li><a class="nav-link" href="<?= base_url('admin/prestasi') ?>">Prestasi</a></li>
                            <li><a class="nav-link" href="<?= base_url('admin/eskul') ?>">Ekstrakulikuler</a></li>
                            <li><a class="nav-link" href="<?= base_url('admin/alumni') ?>">Alumni</a></li>
                            <li><a class="nav-link" href="<?= base_url('admin/galeri') ?>">Galeri / Dokumentasi</a></li>
                            <li><a class="nav-link" href="<?= base_url('admin/berita') ?>">Berita</a></li>
                            <li><a class="nav-link" href="<?= base_url('admin/jurusan') ?>">Jurusan</a></li>
                            <li><a class="nav-link" href="<?= base_url('admin/identitas') ?>">Identitas</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="<?= base_url('admin/banner') ?>"><i class="fas fa-th-large"></i> <span>Banner</span></a></li>
                    <li><a class="nav-link" href="<?= base_url('admin/profil') ?>"><i class="fas fa-th-large"></i> <span>Profil</span></a></li>
                    <li><a class="nav-link" href="<?= base_url('admin/sarana') ?>"><i class="fas fa-th-large"></i> <span>Sarana dan Prasarana</span></a></li>



                </ul>




            </aside>
        </div>


        <!-- Main Content -->
        <div class="main-content">

            <section class="section">