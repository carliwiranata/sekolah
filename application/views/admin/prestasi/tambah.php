<div class="section-header">
    <h1>Prestasi</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Prestasi</h4>
                </div>
                <form action="<?= base_url('admin/tambahprestasi') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Judul <span class="text-danger">*</span></label>
                            <input type="text" name="judul" value="<?= set_value('judul') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('judul')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai <span class="text-danger">*</span></label>
                            <input type="date" name="tgl_awal" value="<?= set_value('tgl_awal') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('tgl_awal')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai <span class="text-danger">*</span></label>
                            <input type="date" name="tgl_akhir" value="<?= set_value('tgl_akhir') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('tgl_akhir')  ?></small>
                        </div>

                        <div class="form-group">
                            <label>Alamat <span class="text-danger">*</span></label>
                            <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control">
                            <small>Alamat jangan terlalu panjang</small>
                            <small class="text-danger"><?= form_error('alamat')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Keterangan <span class="text-danger">*</span></label>
                            <textarea class="summernote-simple" name="keterangan"><?= set_value('keterangan') ?></textarea>
                            <small class="text-danger"><?= form_error('keterangan') ?></small>
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