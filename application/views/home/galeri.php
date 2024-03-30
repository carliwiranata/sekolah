<section id="berita">
    <div class="container mt-5">
        <div class="section-title">
            <h2>Galeri <?= $title ?></h2>
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
                            <th>Title</th>
                            <th>Subtitle</th>

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

                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



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
                    <img src="<?= base_url('assets/img/galeri/' . $g['foto']) ?>" class="img-fluid foto" alt="">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>