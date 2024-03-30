<div class="section-header">
    <h1>Sarana</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Sarana</h4>
                </div>
                <form action="<?= base_url('admin/editsarana/' . $sarana['id_sarana']) ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Judul <span class="text-danger">*</span></label>
                            <input type="text" name="judul" value="<?= $sarana['judul'] ?>" class="form-control">
                            <small class="text-danger"><?= form_error('judul')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Keterangan <span class="text-danger">*</span></label>
                            <textarea class="summernote" name="keterangan"><?= $sarana['keterangan'] ?></textarea>
                            <small class="text-danger"><?= form_error('keterangan') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Foto <span class="text-danger">*</span></label><br>
                            <input type="hidden" name="foto_lama" value="<?= $sarana['foto'] ?>">
                            <img src="<?= base_url('assets/img/sarana/' . $sarana['foto']) ?>" class="img-fluid mb-3 foto" alt="">
                            <input type="file" name="foto" class="form-control">
                            <small>Ukuran foto maksimal 2MB</small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary float-right mb-3">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
</section>
</div>