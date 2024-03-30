<section id="berita">
    <div class="container mt-5">
        <div class="section-title">
            <h2><?= $eskul['nama_ekskul'] ?></h2>
        </div>
        <div class="section-body">
            <img src="<?= base_url('assets/img/ekskul/' . $eskul['foto']) ?>" class="img-fluid foto"><br>
            <p><?= $eskul['keterangan'] ?></p>
        </div>
    </div>
</section>