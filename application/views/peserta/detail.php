<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Peserta </h6>
        </div>
        <div class="card-body">
          <?php foreach ($peserta as $p): ?>
            <h5 class="card-title">Full Name : <?= $p['full_name']; ?></h5>
            <h6 class="card-title">Email : <?= $p['email']; ?></h6>
            <p class="card-text">Summit : <?= $p['desc']; ?></p>
            <p class="card-text">Status : <?= $p['status']; ?></p>
            <p class="card-text">Portal Password : <?= $p['portal_password']; ?></p>
            <p class="card-text">QR CODE : <?= $p['qr_code']; ?></p>
            <p class="card-text">Created at : <?= $p['created_date']; ?></p>
            <p class="card-text">Fully Funded : <?php
            if ($p['is_fully_funded'] == 1) {
              echo "Yes";
            }else {
              echo "No";
            }?></p>
            <p class="card-text">Birth Date : <?= $p['birth_date']; ?></p>
            <p class="card-text">Info YBB : <?= $p['info_ybb']; ?></p>
            <a href="<?= base_url(); ?>peserta" class="btn btn-primary">Kembali</a>
          <?php endforeach ?>
        </div>
    </div>
</div>
