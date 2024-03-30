<div class="section-header">
    <h1>Berita</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Data Berita</h4>
                    <a href="<?= base_url('admin/tambahberita') ?>" class="btn btn-primary "><i class="fas fa-plus"></i> Tambah Berita</a>
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
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($berita as $b) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td> <button class="btn" data-toggle="modal" data-target="#foto<?= $b['id_berita'] ?>"><img src="<?= base_url('assets/img/berita/' . $b['foto']) ?>" alt="" class="img-fluid" width="50" height="50"></button></td>

                                        <td><?= $b['judul'] ?></td>
                                        <td><?= tanggal_indonesia_pendek($b['tanggal']) ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/editberita/' . $b['id_berita']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $b['id_berita'] ?>"><i class="fas fa-trash-alt"></i></button>
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail<?= $b['id_berita'] ?>"><i class="fas fa-info-circle"></i></button>
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



</div>
</section>
</div>



<!-- modal foto -->
<?php foreach ($berita as $b) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="foto<?= $b['id_berita'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Foto berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/berita/' . $b['foto']) ?>" class="img-fluid" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- modal hapus -->
<?php foreach ($berita as $b) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="hapus<?= $b['id_berita'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/hapusberita/' . $b['id_berita']) ?>" method="post">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin hapus berita <b><?= $b['judul'] ?></b> ?</p>
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
<?php foreach ($berita as $b) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="detail<?= $b['id_berita'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $b['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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