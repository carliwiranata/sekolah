<section id="prestasi">
    <div class="container mt-5">
        <div class="section-title">
            <h2>Prestasi <?= $title ?></h2>
        </div>
        <div class="section-body">
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
                        foreach ($prestasi as $p) : ?>
                            <tr>
                                <td class="text-center">
                                    <?= $no++ ?>
                                </td>
                                <td> <button class="btn" data-toggle="modal" data-target="#foto<?= $p['id_prestasi'] ?>"><img src="<?= base_url('assets/img/prestasi/' . $p['foto']) ?>" alt="" class="img-fluid foto" width="50" height="50"></button></td>

                                <td><?= $p['judul'] ?></td>
                                <td><?= tanggal_indonesia_pendek($p['tgl_awal']) ?> - <?= tanggal_indonesia_pendek($p['tgl_akhir'])  ?></td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detail<?= $p['id_prestasi'] ?>"><i class="fas fa-info-circle"></i> Detail</button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

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
                    <img src="<?= base_url('assets/img/prestasi/' . $p['foto']) ?>" class="img-fluid foto" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- modal detail prestasi-->
<?php foreach ($prestasi as $p) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="detail<?= $p['id_prestasi'] ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $p['judul'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/prestasi/' . $p['foto']) ?>" class="img-fluid foto mb-3" alt="">
                    <br>
                    <h3><?= $p['judul'] ?></h3>
                    <div class="section-item-meta">
                        <span class="mx-2"><i class="fas fa-calendar-alt"></i> <?= tanggal_indonesia($p['tgl_awal']) ?> - <?= tanggal_indonesia($p['tgl_akhir']) ?></span>
                        <span><i class="fas fa-map-marked-alt"></i> <?= $p['alamat'] ?></span>
                    </div><br>
                    <?= $p['keterangan'] ?><br>

                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>