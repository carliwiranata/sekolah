<div class="section-header">
    <h1>Prestasi</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Data Prestasi</h4>
                    <a href="<?= base_url('admin/tambahprestasi') ?>" class="btn btn-primary "><i class="fas fa-plus"></i> Tambah Prestasi</a>
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
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($prestasi as $p) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td> <button class="btn" data-toggle="modal" data-target="#foto<?= $p['id_prestasi'] ?>"><img src="<?= base_url('assets/img/prestasi/' . $p['foto']) ?>" alt="" class="img-fluid" width="50" height="50"></button></td>

                                        <td><?= $p['judul'] ?></td>
                                        <td><?= tanggal_indonesia_pendek($p['tgl_awal']) ?></td>
                                        <td><?= tanggal_indonesia_pendek($p['tgl_akhir']) ?></td>
                                        <td><?= $p['alamat'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/editprestasi/' . $p['id_prestasi']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $p['id_prestasi'] ?>"><i class="fas fa-trash-alt"></i></button>
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail<?= $p['id_prestasi'] ?>"><i class="fas fa-info-circle"></i></button>
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
<?php foreach ($prestasi as $p) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="foto<?= $p['id_prestasi'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Foto prestasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/prestasi/' . $p['foto']) ?>" class="img-fluid" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- modal hapus -->
<?php foreach ($prestasi as $p) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="hapus<?= $p['id_prestasi'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/hapusprestasi/' . $p['id_prestasi']) ?>" method="post">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin hapus prestasi <b><?= $p['judul'] ?></b> ?</p>
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
<?php foreach ($prestasi as $p) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="detail<?= $p['id_prestasi'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $p['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $p['keterangan'] ?>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>