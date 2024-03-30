<section id="berita">
    <div class="container mt-5">
        <div class="section-title">
            <h2><?= $profil1['judul'] ?></h2>
        </div>
        <div class="section-body">
            <img src="<?= base_url('assets/img/profil/' . $profil1['foto']) ?>" class="img-fluid foto"><br>
            <p><?= $profil1['keterangan'] ?></p>
        </div>
    </div>
</section>