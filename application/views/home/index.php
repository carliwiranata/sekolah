<!-- hero area -->
<section id="hero-area">
    <div id="slider-hero-nav"></div>
    <div class="owl-carousel" id="slider-hero">
        <?php foreach ($banner as $b) : ?>
            <div class="slider-item ">
                <div class="slider-item-img">
                    <img src="<?= base_url('assets/img/banner/' . $b['foto']) ?>" alt="">
                </div>
                <div class="slider-item-content">
                    <h1><?= $b['judul'] ?></h1>
                    <p><?= $b['keterangan'] ?></p>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</section>
<!-- end  hero area-->

<!-- sambutan -->

<section id="sambutan">
    <div class="container">
        <h2>PROFIL SEKOLAH</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="video-wrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pmJRVYosuQ0?si=wV3O7V1uW4ChdZna" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Sambutan Kepala Sekolah</h3>
                <p><?= $identitas['sambutan'] ?></p>
                <a href="<?= base_url('home/sambutan') ?>" class="btn btn-hijau">Baca Selengkapnya <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- end sambutan -->


<section id="prestasi">
    <div class="container">
        <div class="section-title">
            <h2>Prestasi Terbaru</h2>
        </div>
        <?php foreach ($prestasi as $p) : ?>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6">
                        <img class="section-item-thumnail" src="<?= base_url('assets/img/prestasi/' . $p['foto']) ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="section-item-title">
                            <h3><?= $p['judul'] ?></h3>
                            <div class="section-item-meta">
                                <span><i class="fas fa-calendar-alt"></i> <?= tanggal_indonesia($p['tgl_awal']) ?> - <?= tanggal_indonesia($p['tgl_akhir']) ?></span>
                                <span><i class="fas fa-map-marked-alt"></i> <?= $p['alamat'] ?></span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <?= $p['keterangan'] ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>


        <div class="tombol-selengkapnya">
            <a href="<?= base_url('home/prestasi') ?>" class="btn btn-more">Lihat Prestasi Lainnya</a>
        </div>
    </div>
</section>

<!-- ekstrakulikuler -->

<section id="ekstrakulikuler">
    <div class="container">
        <div class="section-title">
            <h2>Ekstrakulikuler</h2>
        </div>
        <div class="section-body">
            <div class="row">
                <?php foreach ($eskul as $e) : ?>
                    <div class="col-md-4">
                        <a href="<?= base_url('home/eskul/' . $e['id_ekskul']) ?>" class="nav-link">
                            <div class="section-body-item">
                                <h4><?= $e['nama_ekskul'] ?></h4>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>

<!-- tenaga pendidikan -->

<section id="tenaga-pendidikan">
    <div class="container">
        <div class="section-title">
            <h2>Tenaga Pendidikan</h2>
        </div>
        <div class="section-body">
            <div id="slider-tools-1"></div>
            <div class="owl-carousel" id="tenaga-pendidikan-slider">
                <?php foreach ($guru as $g) : ?>
                    <div class="section-item-slider">
                        <img class="foto-guru" src="<?= base_url('assets/img/guru/' . $g['foto']) ?>" alt="">
                        <div class="section-item-caption">
                            <h5><?= $g['nama'] ?>, <?= $g['gelar'] ?></h5>
                            <h6>Guru <?= $g['mapel'] ?></h6>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
</section>

<!-- alumni -->
<section id="alumni">
    <div class="container">
        <div class="section-title">
            <h2>Alumni Sekolah</h2>
        </div>
        <div class="section-body">
            <div id="slider-tools-2"></div>
            <div class="owl-carousel" id="alumni-slider">
                <?php foreach ($alumni as $a) : ?>
                    <div class="section-item-slider">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="foto-alumni" src="<?= base_url('assets/img/alumni/' . $a['foto']) ?>" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="section-item-content">
                                    <h3><?= $a['nama'] ?></h3>
                                    <p>
                                        <?= $a['keterangan']  ?>
                                    </p>
                                    <a href="#" data-toggle="modal" data-target="#detailalumni<?= $a['id_alumni'] ?>" class="more">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>

<!-- dokumentasi / galeri -->

<section id="tenaga-pendidikan">
    <div class="container">
        <div class="section-title">
            <h2>Galeri / Dokumentasi</h2>
        </div>
        <div class="section-body">
            <div id="slider-tools-3"></div>
            <div class="owl-carousel" id="galeri-slider">
                <?php foreach ($galeri as $g) : ?>
                    <div class="section-item-slider">
                        <img class="foto-guru" src="<?= base_url('assets/img/galeri/' . $g['foto']) ?>" alt="">
                        <div class="section-item-caption">
                            <h5><?= $g['title'] ?></h5>
                            <h6><?= $g['subtitle'] ?></h6>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="tombol-selengkapnya mt-5">
            <a href="<?= base_url('home/galeri') ?>" class="btn btn-more">Lihat Galeri Lainnya</a>
        </div>

    </div>
</section>

<!-- berita -->

<section id="berita">
    <div class="container">
        <div class="section-title">
            <h2>Berita Terbaru</h2>
        </div>
        <div class="section-body">
            <div class="row">
                <?php foreach ($berita as $b) : ?>
                    <?php
                    $tanggal = explode('-', $b['tanggal']);
                    $tahun = $tanggal[0];
                    $bulan = $tanggal[1];
                    $tanggal = $tanggal[2];
                    ?>
                    <div class="col-md-4">
                        <div class="section-thumnail">
                            <img src="<?= base_url('assets/img/berita/' . $b['foto']) ?>" alt="">
                            <div class="tanggal">
                                <span class="tgl"><?= $tanggal ?></span>
                                <span class="tgl-2"><?= bulan_panjang($bulan) ?>, <?= $tahun ?></span>
                            </div>
                        </div>
                        <div class="section-content">
                            <h3><?= $b['judul'] ?></h3>
                            <p><?= $b['keterangan'] ?></p>
                            <a href="#" data-toggle="modal" data-target="#detail<?= $b['id_berita'] ?>" class="btn btn-hijau"> Selengkapnya <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="tombol-selengkapnya mt-5">
            <a href="<?= base_url('home/berita') ?>" class="btn btn-more">Lihat Berita Lainnya</a>
        </div>
    </div>
</section>

<!-- modal detail berita-->
<?php foreach ($berita as $b) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="detail<?= $b['id_berita'] ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $b['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/berita/' . $b['foto']) ?>" class="img-fluid foto mb-3" alt="">
                    <br>
                    <?= $b['keterangan'] ?><br>
                    <?= $b['keterangan_lanjut'] ?>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!-- modal detail alumni-->
<?php foreach ($alumni as $a) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="detailalumni<?= $a['id_alumni'] ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $a['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg">
                            <img src="<?= base_url('assets/img/alumni/' . $a['foto']) ?>" class="img-fluid foto" alt="">
                        </div>
                        <div class="col-lg">
                            <table class="table">
                                <tr>
                                    <td>Nama </td>
                                    <td>:</td>
                                    <td><?= $a['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin </td>
                                    <td>:</td>
                                    <td><?= $a['jenis_kelamin'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    <p class="mb-3"><?= $a['keterangan'] ?></p>
                    <?= $a['keterangan_lanjut'] ?>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>