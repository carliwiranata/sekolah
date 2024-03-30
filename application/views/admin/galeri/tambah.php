<div class="section-header">
    <h1>Galeri</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Galeri</h4>
                </div>
                <form action="<?= base_url('admin/tambahgaleri') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="<?= set_value('title') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('title')  ?></small>
                        </div>
                        <div class="form-group">
                            <label>Subtitle <span class="text-danger">*</span></label>
                            <input type="text" name="subtitle" value="<?= set_value('subtitle') ?>" class="form-control">
                            <small class="text-danger"><?= form_error('subtitle')  ?></small>
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