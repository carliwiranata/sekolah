<section id="berita">
    <div class="container mt-5">
        <div class="section-title">
            <h2>Jurusan <?= $jurusan1['nama_jurusan'] ?></h2>
        </div>
        <div class="section-body">
            <img src="<?= base_url('assets/img/jurusan/' . $jurusan1['foto']) ?>" class="img-fluid foto"><br>
            <p><?= $jurusan1['keterangan'] ?></p>
        </div>
    </div>
</section>