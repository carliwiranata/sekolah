<div class="section-header">
    <h1>Galeri</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h4>Data Galeri</h4>
                    <a href="<?= base_url('admin/tambahgaleri') ?>" class="btn btn-primary "><i class="fas fa-plus"></i> Tambah galeri</a>
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
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($galeri as $g) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no++ ?>
                                        </td>
                                        <td> <button class="btn" data-toggle="modal" data-target="#foto<?= $g['id_galeri'] ?>"><img src="<?= base_url('assets/img/galeri/' . $g['foto']) ?>" alt="" class="img-fluid" width="50" height="50"></button></td>

                                        <td><?= $g['title'] ?></td>
                                        <td><?= $g['subtitle'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/editgaleri/' . $g['id_galeri']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $g['id_galeri'] ?>"><i class="fas fa-trash-alt"></i></button>
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
        <div class="col-sm-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Gallery Sekolah</h4>
                </div>
                <div class="card-body">
                    <div class="gallery gallery-md" data-item-height="100">
                        <?php foreach ($galeri10 as $g) : ?>
                            <div class="gallery-item" data-image="<?= base_url('assets/img/galeri/' . $g['foto']) ?>" data-title="<?= $g['title'] ?>"></div>
                            <?php $jumlah = count($galeri) ?>
                        <?php endforeach; ?>
                        <?php if ($jumlah > 10) : ?>
                            <?php $hasil = $jumlah - 11 ?>
                            <div class="gallery-item gallery-more" data-image="<?= base_url('assets/img/galeri/' . $galeri11['foto']) ?>" data-title="<?= $galeri11['title'] ?>">
                                <div><?= "+$hasil" ?></div>
                            </div>
                            <?php foreach ($galeri12 as $g) : ?>
                                <div class="gallery-item gallery-hide" data-image="<?= base_url('assets/img/galeri/' . $g['foto']) ?>" data-title="<?= $g['title'] ?>"></div>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</section>
</div>



<!-- modal foto -->
<?php foreach ($galeri as $g) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="foto<?= $g['id_galeri'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Foto galeri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/galeri/' . $g['foto']) ?>" class="img-fluid" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- modal hapus -->
<?php foreach ($galeri as $g) : ?>
    <div class="modal fade" tabindex="-1" role="dialog" id="hapus<?= $g['id_galeri'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/hapusgaleri/' . $g['id_galeri']) ?>" method="post">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin hapus galeri <b><?= $g['title'] ?></b> ?</p>
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