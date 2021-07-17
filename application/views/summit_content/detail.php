<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Summit Content Detail</h6>
    </div>
    <div class="card-body">
      <?php foreach ($summit_content as $sc) : ?>
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col">
                <p class="card-text" style="color: black;">Title</p>
              </div>
              <div class="col">
                <p class="card-text" style="color: black;"><?= $sc['title']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="card-text" style="color: black;">Description</p>
              </div>
              <div class="col">
                <p class="card-text" style="color: black;"><?= $sc['description']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p class="card-text" style="color: black;">Created Date</p>
              </div>
              <div class="col">
                <p class="card-text" style="color: black;"><?= $sc['created_date']; ?></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <embed type="application/pdf" src="<?= base_url('assets/img/summit_contents/') . $sc['id_summit'] . "/" . $sc['file_path'] . "#toolbar=0&navpanes=0&scrollbar=0"; ?> " width="100%" height="100%"></embed>
            </div>
            </br>

          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>