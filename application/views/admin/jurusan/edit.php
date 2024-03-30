<div class="section-header">
    <h1>Jurusan</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Jurusan</h4>
                </div>
                <form action="<?= base_url('admin/editjurusan/' . $jurusan['id_jurusan']) ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Jurusan <span class="text-danger">*</span></label>
                            <input type="text" name="nama_jurusan" value="<?= $jurusan['nama_jurusan'] ?>" class="form-control">
                            <small class="text-danger"><?= form_error('nama_jurusan')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Keterangan <span class="text-danger">*</span></label>
                            <textarea class="summernote-simple" name="keterangan"><?= $jurusan['keterangan'] ?></textarea>
                            <small class="text-danger"><?= form_error('keterangan') ?></small>
                        </div>
                        <div class="form-group">
                            <label>Foto <span class="text-danger">*</span></label><br>
                            <input type="hidden" name="foto_lama" value="<?= $jurusan['foto'] ?>">
                            <img src="<?= base_url('assets/img/jurusan/' . $jurusan['foto']) ?>" class="img-fluid mb-3" alt="">
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