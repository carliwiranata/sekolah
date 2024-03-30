<div class="section-header">
    <h1>Tenaga Pendidikan</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Tenaga Pendidikan</h4>
                </div>
                <form action="<?= base_url('admin/tambahtenagapendidikan') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="number" name="nip" value="<?= set_value('nip') ?>" class="form-control">
                            <small>NIP diisi jika ada, jika tidak ada kosongkan saja</small>
                            <small class="text-danger"><?= form_error('nip')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Nama <span class="text-danger">*</span></label>
                            <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('nama')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin <span class="text-danger">*</span></label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" <?= set_value('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="Perempuan" <?= set_value('jenis_kelamin') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                            <small class="text-danger"><?= form_error('jenis_kelamin')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Mata Pelajaran <span class="text-danger">*</span></label>
                            <input type="text" name="mapel" value="<?= set_value('mapel') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('mapel')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Gelar</label>
                            <input type="text" name="gelar" value="<?= set_value('gelar') ?>" class="form-control">
                            <small>Gelar diisi jika ada, jika tidak ada kosongkan saja</small>
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