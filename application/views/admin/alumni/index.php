<div class="section-header">
    <h1>Alumni</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Data Alumni</h4>
                    <a href="<?= base_url('admin/tambahalumni') ?>" class="btn btn-primary "><i class="fas fa-user-plus"></i> Tambah alumni</a>
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
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($alumni as $a) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td> <button class="btn" data-toggle="modal" data-target="#foto<?= $a['id_alumni'] ?>"><img src="<?= base_url('assets/img/alumni/' . $a['foto']) ?>" alt="" class="img-fluid" width="50" height="50"></button></td>

                                        <td><?= $a['nama'] ?></td>
                                        <td><?= $a['jenis_kelamin'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/editalumni/' . $a['id_alumni']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $a['id_alumni'] ?>"><i class="fas fa-trash-alt"></i></button>
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail<?= $a['id_alumni'] ?>"><i class="fas fa-info-circle"></i></button>
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
<?php foreach ($alumni as $a) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="foto<?= $a['id_alumni'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Foto alumni</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/alumni/' . $a['foto']) ?>" class="img-fluid" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- modal hapus -->
<?php foreach ($alumni as $a) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="hapus<?= $a['id_alumni'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/hapusalumni/' . $a['id_alumni']) ?>" method="post">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin hapus alumni <b><?= $a['nama'] ?></b> ?</p>
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
<?php foreach ($alumni as $a) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="detail<?= $a['id_alumni'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $a['nama'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= $a['keterangan'] ?><br>
                    <?= $a['keterangan_lanjut'] ?>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>