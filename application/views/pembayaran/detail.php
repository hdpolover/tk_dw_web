<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
        </div>
        <div class="card-body">
          <?php foreach ($pembayaran as $p): ?>
            <h5 class="card-title"><?= $p['full_name']; ?></h5>
            <h6 class="card-title"><?= $p['account_name']; ?></h6>
            <p class="card-text"><?= $p['bank_name']; ?></p>
            <p class="card-text"><?= $p['email']; ?></p>
            <p class="card-text"><?= $p['desc']; ?></p>
            <p class="card-text"><?= $p['description']; ?></p>
            <p class="card-text"><?= $p['payment_date']; ?></p>
            <p class="card-text"><?= $p['proof']; ?></p>
            <p class="card-text"><?= $p['payment_status']; ?></p>
            <a href="<?= base_url(); ?>pembayaran" class="btn btn-primary">Kembali</a>
          <?php endforeach ?>
        </div>
    </div>
</div>
