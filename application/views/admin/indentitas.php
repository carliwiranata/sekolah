<div class="section-header">
    <h1>Identitas Sekolah</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Identitas Sekolah</h4>
                </div>
                <form action="<?= base_url('admin/identitas') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $identitas['id_identitas'] ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Nama Sekolah <span class="text-danger">*</span></label>
                                    <input type="text" name="nama_sekolah" value="<?= $identitas['nama_sekolah'] ?>" class="form-control">
                                    <small class="text-danger"><?= form_error('nama_sekolah')  ?></small>
                                </div>

                                <div class="form-group">
                                    <label>Slogan <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="slogan"><?= $identitas['slogan'] ?></textarea>
                                    <small class="text-danger"><?= form_error('slogan') ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Foto <span class="text-danger">*</span></label><br>
                                    <input type="hidden" name="foto_lama" value="<?= $identitas['logo'] ?>">
                                    <img src="<?= base_url('assets/img/identitas/' . $identitas['logo']) ?>" class="img-fluid mb-3" alt="">
                                    <input type="file" name="foto" class="form-control">
                                    <small>Ukuran foto maksimal 2MB</small>
                                </div>
                                <div class="form-group">
                                    <label>No HP / WA <span class="text-danger">*</span></label>
                                    <input type="number" name="nohp" value="<?= $identitas['nohp'] ?>" class="form-control">
                                    <small class="text-danger"><?= form_error('nohp')  ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="<?= $identitas['email'] ?>" class="form-control">
                                    <small class="text-danger"><?= form_error('email')  ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Penutup <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="5" name="penutup"><?= $identitas['penutup'] ?></textarea>
                                    <small class="text-danger"><?= form_error('penutup') ?></small>
                                </div>

                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label>Link PPDB <span class="text-danger">*</span></label>
                                    <input type="text" name="link_ppdb" value="<?= $identitas['link_ppdb'] ?>" class="form-control">
                                    <small class="text-danger"><?= form_error('link_ppdb')  ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Link Facebook <span class="text-danger">*</span></label>
                                    <input type="text" name="link_fb" value="<?= $identitas['link_fb'] ?>" class="form-control">
                                    <small class="text-danger"><?= form_error('link_fb')  ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Link Instagram <span class="text-danger">*</span></label>
                                    <input type="text" name="link_ig" value="<?= $identitas['link_ig'] ?>" class="form-control">
                                    <small class="text-danger"><?= form_error('link_ig')  ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Link Youtube <span class="text-danger">*</span></label>
                                    <input type="text" name="link_yt" value="<?= $identitas['link_yt'] ?>" class="form-control">
                                    <small class="text-danger"><?= form_error('link_yt')  ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Sambutan Kepala Sekolah <span class="text-danger">*</span></label>
                                    <textarea id="inputText" class="form-control" rows="5" name="sambutan"><?= $identitas['sambutan'] ?></textarea>
                                    <small class="text-danger"><?= form_error('sambutan') ?></small>
                                    <span id="characterCount" class="text-secondary">280 karakter tersisa</span>
                                </div>
                                <div class="form-group">
                                    <label>Sambutan lanjut<span class="text-danger">*</span></label>
                                    <textarea class="summernote-simple" name="sambutan_lanjutan"><?= $identitas['sambutan_lanjutan'] ?></textarea>
                                    <small class="text-danger"><?= form_error('sambutan_lanjutan') ?></small>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary float-right mb-3">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
</section>
</div>