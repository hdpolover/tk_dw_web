<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
    </div>
    <div class="card-body">
      <?php foreach ($payment as $p) : ?>
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col">
                <p class="card-text" style="color: black;">Participant Name</p>
              </div>
              <div class="col">
                <p class="card-text" style="color: black;"><?= $p['full_name']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="card-text" style="color: black;">Account Name</p>
              </div>
              <div class="col">
                <p class="card-text" style="color: black;"><?= $p['account_name']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="card-text" style="color: black;">Bank Name</p>
              </div>
              <div class="col">
                <p class="card-text" style="color: black;"><?= $p['bank_name']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="card-text" style="color: black;">Participant Date</p>
              </div>
              <div class="col">
                <p class="card-text" style="color: black;"><?= $p['payment_date']; ?></p>
              </div>
            </div>
          </div>
          <div class="col">
            <img src="<?= base_url('assets/img/payments/') . $p['id_payment_type'] . "/" . $p['payment_proof']; ?>" class="card-img border">
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>