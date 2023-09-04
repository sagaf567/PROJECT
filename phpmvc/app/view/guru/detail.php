<div class="container mt-5">
<a class="navbar-brand">Detail Guru</a>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['guru']['nama'];?></h5>
            <p class="card-text"><?= $data['guru']['mapel']; ?></p>
            <a href=" <?= BASE_URL; ?>/guru" class="card-link">Kembali</a>
        </div>
    </div>
</div>