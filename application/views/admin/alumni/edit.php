<div class="section-header">
    <h1>Alumni</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Alumni</h4>
                </div>
                <form action="<?= base_url('admin/editalumni/' . $alumni['id_alumni']) ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama <span class="text-danger">*</span></label>
                            <input type="text" name="nama" value="<?= $alumni['nama'] ?>" class="form-control">
                            <small class="text-danger"><?= form_error('nama')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin <span class="text-danger">*</span></label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" <?= $alumni['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="Perempuan" <?= $alumni['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                            <small class="text-danger"><?= form_error('jenis_kelamin')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Keterangan <span class="text-danger">*</span></label>
                            <textarea id="inputText" class="form-control" name="keterangan"><?= $alumni['keterangan'] ?></textarea>
                            <small class="text-danger"><?= form_error('keterangan') ?></small>
                            <span id="characterCount" class="text-secondary">280 karakter tersisa</span>
                        </div>
                        <div class="form-group">
                            <label>Keterangan lanjut <span class="text-danger">*</span></label>
                            <textarea class="summernote-simple" name="keterangan_lanjut"><?= $alumni['keterangan_lanjut'] ?></textarea>
                            <small class="text-danger"><?= form_error('keterangan_lanjut') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Foto <span class="text-danger">*</span></label><br>
                            <input type="hidden" name="foto_lama" value="<?= $alumni['foto'] ?>">
                            <img src="<?= base_url('assets/img/alumni/' . $alumni['foto']) ?>" class="img-fluid mb-3" alt="">
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