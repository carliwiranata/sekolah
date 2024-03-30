<div class="section-header">
    <h1>Berita</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Berita</h4>
                </div>
                <form action="<?= base_url('admin/tambahberita') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Judul <span class="text-danger">*</span></label>
                            <input type="text" name="judul" value="<?= set_value('judul') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('judul')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Tanggal <span class="text-danger">*</span></label>
                            <input type="date" name="tanggal" value="<?= set_value('tanggal') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('tanggal')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Keterangan <span class="text-danger">*</span></label>
                            <textarea id="inputText" class="form-control" name="keterangan"><?= set_value('keterangan') ?></textarea>
                            <small class="text-danger"><?= form_error('keterangan') ?></small>
                            <span id="characterCount" class="text-secondary">280 karakter tersisa</span>
                        </div>
                        <div class="form-group">
                            <label>Keterangan lanjut<span class="text-danger">*</span></label>
                            <textarea class="summernote-simple" name="keterangan_lanjut"><?= set_value('keterangan_lanjut') ?></textarea>
                            <small class="text-danger"><?= form_error('keterangan_lanjut') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Foto <span class="text-danger">*</span></label>
                            <input required type="file" name="foto" class="form-control">
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