<div class="section-header">
    <h1>Tenaga Pendidikan</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Data Tenaga Pendidikan</h4>
                    <a href="<?= base_url('admin/tambahtenagapendidikan') ?>" class="btn btn-primary "><i class="fas fa-user-plus"></i> Tambah Tenaga Pendidikan</a>
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
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($guru as $g) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td> <button class="btn" data-toggle="modal" data-target="#foto<?= $g['id_guru'] ?>"><img src="<?= base_url('assets/img/guru/' . $g['foto']) ?>" alt="" class="img-fluid" width="50" height="50"></button></td>

                                        <td>
                                            <?php if ($g['nip'] == null) : ?>
                                                -
                                            <?php else : ?>
                                                <?= $g['nip'] ?>
                                            <?php endif ?>
                                        </td>
                                        <td><?= $g['nama'] ?> <?= $g['gelar'] ?></td>
                                        <td><?= $g['jenis_kelamin'] ?></td>
                                        <td><?= $g['mapel'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/edittenagapendidikan/' . $g['id_guru']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $g['id_guru'] ?>"><i class="fas fa-trash-alt"></i></button>
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
<?php foreach ($guru as $g) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="foto<?= $g['id_guru'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Foto Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/guru/' . $g['foto']) ?>" class="img-fluid" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- modal hapus -->
<?php foreach ($guru as $g) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="hapus<?= $g['id_guru'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/hapustenagapendidikan/' . $g['id_guru']) ?>" method="post">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin hapus guru <b><?= $g['nama'] ?></b> ?</p>
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