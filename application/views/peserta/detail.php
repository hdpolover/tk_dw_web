<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
        </div>
        <div class="card-body">
          <?php foreach ($peserta as $p): ?>
            <h5 class="card-title"><?= $p['full_name']; ?></h5>
            <h6 class="card-title"><?= $p['email']; ?></h6>
            <p class="card-text"><?= $p['desc']; ?></p>
            <p class="card-text"><?= $p['status']; ?></p>
            <p class="card-text"><?= $p['essay']; ?></p>
            <p class="card-text"><?= $p['birth_date']; ?></p>
            <a href="<?= base_url(); ?>peserta" class="btn btn-primary">Kembali</a>
          <?php endforeach ?>
        </div>
    </div>
</div>
