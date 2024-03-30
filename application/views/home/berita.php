<section id="berita">
    <div class="container mt-5">
        <div class="section-title">
            <h2>Berita <?= $title ?></h2>
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
                        foreach ($berita as $b) : ?>
                            <tr>
                                <td class="text-center">
                                    <?= $no++ ?>
                                </td>
                                <td> <button class="btn" data-toggle="modal" data-target="#foto<?= $b['id_berita'] ?>"><img src="<?= base_url('assets/img/berita/' . $b['foto']) ?>" alt="" class="img-fluid foto" width="50" height="50"></button></td>

                                <td><?= $b['judul'] ?></td>
                                <td><?= tanggal_indonesia_pendek($b['tanggal']) ?></td>
                                <td>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#detail<?= $b['id_berita'] ?>"><i class="fas fa-info-circle"></i> Detail</button>
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
                    <img src="<?= base_url('assets/img/berita/' . $b['foto']) ?>" class="img-fluid foto" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
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