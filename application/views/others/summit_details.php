<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <form method="post" action="<?= base_url(); ?>others/update_summit/<?= $summit['id_summit']; ?>">
        <div class="form-group row">
          <label for="desc" class="col-sm-4 col-form-label">Summit Description/Name</label>
          <div class="col-sm-8">
            <input type="text" name="desc" class="form-control" id="desc" placeholder="<?php echo $summit['desc']; ?>" value="<?php echo $summit['desc']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="regist_fee" class="col-sm-4 col-form-label">Registration Fee</label>
          <div class="col-sm-8">
            <input type="number" name="regist_fee" class="form-control" id="regist_fee" value="<?php echo $summit['regist_fee']; ?>" placeholder="<?php echo $summit['regist_fee']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="program_fee" class="col-sm-4 col-form-label">Program Fee</label>
          <div class="col-sm-8">
            <input type="number" name="program_fee" class="form-control" id="program_fee" value="<?php echo $summit['program_fee']; ?>"placeholder="<?php echo $summit['program_fee']; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="status" class="col-sm-4 col-form-label">Summit Status</label>
          <div class="col-sm-8">
            <select class="form-control" id="status" name="status">
              <option value="0">Inactive</option>
              <option value="1">Active</option>
            </select>
          </div>
        </div>
        <div class="text-align-right">
          <button type="submit" class="btn btn-primary btn-user btn-block">
            SAVE
          </button>
        </div>
    </div>
  </div>

  <script>
    document.getElementById('status').value="<?php echo set_value($summit['status']); ?>";
 </script>