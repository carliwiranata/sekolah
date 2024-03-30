<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/bootstrap.min.css">
    <!-- awl carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/owl.carousel.min.css">
    <!-- font awesome / icon -->
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>fontawesome/css/all.min.css">
    <!-- css custom -->
    <link rel="stylesheet" href="<?= base_url('assets/home/') ?>css/style.css">
    <!-- logo -->
    <link rel="shortcut icon" href="<?= base_url('assets/img/identitas/' . $logo) ?>" type="image/x-icon">
    <!-- data table -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
</head>

<body>

    <section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="top-contact">
                        <li><a target="_blank" href="https://wa.me/<?= $identitas['nohp'] ?>"><i class="fas fa-phone"></i> <?= $identitas['nohp'] ?></a></li>
                        <li><a target="_blank" href="mailto:<?= $identitas['email'] ?>"><i class="fas fa-envelope"></i> <?= $identitas['email'] ?></a></li>
                        <?php $tahun = date('Y') + 1 ?>
                        <li><a target="_blank" href="<?= $identitas['link_ppdb'] ?>"><i class="fas fa-bullhorn"></i> PPDB TA <?= date('Y') ?>/<?= $tahun ?> Telah dibuka!</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="sosmed">
                        <li><a target="_blank" href="<?= $identitas['link_fb'] ?>"><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a target="_blank" href="<?= $identitas['link_ig'] ?>"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="<?= $identitas['link_yt'] ?>"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="brand">
                        <img src="<?= base_url('assets/img/identitas/' . $identitas['logo']) ?>" alt="" class="img-fluid" width="90">
                        <div class="brand-name">
                            <h1><?= $identitas['nama_sekolah'] ?></h1>
                            <h3><?= $identitas['slogan'] ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- navbar -->

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-hijau ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item beranda">
                        <a class="nav-link" href="<?= base_url('home') ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <div class="dropdown-menu ">
                            <?php foreach ($profil as $p) :  ?>
                                <a class="dropdown-item" href="<?= base_url('home/profil/' . $p['id_profil']) ?>"><?= $p['judul'] ?></a>
                            <?php endforeach ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Jurusan
                        </a>
                        <div class="dropdown-menu ">
                            <?php foreach ($jurusan as $j) : ?>
                                <a class="dropdown-item" href="<?= base_url('home/jurusan/' . $j['id_jurusan']) ?>"><?= $j['nama_jurusan'] ?></a>
                            <?php endforeach ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Sarana & Prasarana
                        </a>
                        <div class="dropdown-menu">
                            <?php foreach ($sarana as $s) : ?>
                                <a class="dropdown-item" href="<?= base_url('home/sarana/' . $s['id_sarana']) ?>"><?= $s['judul'] ?></a>
                            <?php endforeach ?>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home') ?>#ekstrakulikuler">Ekstrakulikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home') ?>#prestasi">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home') ?>#berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home/galeri') ?>">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home') ?>#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- end navbar -->