<div class="section-header">
    <h1>Banner</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Data Banner</h4>
                    <a href="<?= base_url('admin/tambahbanner') ?>" class="btn btn-primary "><i class="fas fa-plus"></i> Tambah Banner</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($banner as $b) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td> <button class="btn" data-toggle="modal" data-target="#foto<?= $b['id_banner'] ?>"><img src="<?= base_url('assets/img/banner/' . $b['foto']) ?>" alt="" class="img-fluid" width="50" height="50"></button></td>

                                        <td><?= $b['judul'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/editbanner/' . $b['id_banner']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $b['id_banner'] ?>"><i class="fas fa-trash-alt"></i></button>
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail<?= $b['id_banner'] ?>"><i class="fas fa-info-circle"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    <h4>Banner Sekolah <?= $title ?></h4>
                </div>
                <div class="card-body">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php $nilai_terkecil = null; ?>
                            <?php foreach ($banner as $b) : ?>
                                <?php
                                $id_banner = $b['id_banner'];

                                // Membandingkan nilai id_banner dengan nilai terkecil yang ditemukan sejauh ini
                                if ($nilai_terkecil === null || $id_banner < $nilai_terkecil) {
                                    $nilai_terkecil = $id_banner;
                                }

                                ?>
                                <?php if ($nilai_terkecil == $b['id_banner']) : ?>
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?= base_url('assets/img/banner/' . $b['foto']) ?>" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5><?= $b['judul'] ?></h5>
                                            <p><?= $b['keterangan'] ?></p>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?= base_url('assets/img/banner/' . $b['foto']) ?>" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5><?= $b['judul'] ?></h5>
                                            <p><?= $b['keterangan'] ?></p>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</section>
</div>



<!-- modal foto -->
<?php foreach ($banner as $b) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="foto<?= $b['id_banner'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Foto banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/banner/' . $b['foto']) ?>" class="img-fluid" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- modal hapus -->
<?php foreach ($banner as $b) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="hapus<?= $b['id_banner'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/hapusbanner/' . $b['id_banner']) ?>" method="post">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin hapus banner <b><?= $b['judul'] ?></b> ?</p>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- modal detail -->
<?php foreach ($banner as $b) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="detail<?= $b['id_banner'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $b['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $b['keterangan'] ?>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>