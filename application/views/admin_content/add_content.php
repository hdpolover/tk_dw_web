<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Content</h6>
    </div>
    <div class="card-body">
      <form method="post" action="<?= base_url('admin_content/add_new_content'); ?>">
        <div class="form-group row">
          <label for="desc" class="col-sm-4 col-form-label">Summit</label>
          <div class="col-sm-8">
            <select class="form-control" id="status" name="status">
              <?php foreach ($summit as $s) { ?>
                <option value="<?php echo $s['id_summit']; ?>"><?php echo $s['desc']; ?> </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="desc" class="col-sm-4 col-form-label">Description</label>
          <div class="col-sm-8">
            <input type="text" name="desc" class="form-control" id="desc">
          </div>
        </div>
        <div class="form-group row">
          <label for="desc" class="col-sm-4 col-form-label">Content Status</label>
          <div class="col-sm-8">
            <select class="form-control" id="status" name="status">
              <option value="0">Draft</option>
              <option value="1">Published</option>
              <option value="2">Archived</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col align-self-end">
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Create
            </button>
          </div>

        </div>
    </div>
  </div>