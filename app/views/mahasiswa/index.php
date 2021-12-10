<div class="container">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASE_URL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary ">Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>