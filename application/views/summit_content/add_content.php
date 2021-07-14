<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <?php echo $this->session->flashdata('message'); ?>

  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Summit Content</h6>
    </div>
    <div class="card-body">
      <?= form_open_multipart('summit_content/save_new_content'); ?>
      <div class="form-group row">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <img src="<?php echo base_url('assets/img/profile/default.jpg'); ?>" class="img-thumbnail">
          </div>
          <div class="col-lg-3"></div>
        </div>
        <div class="text-center" style="padding-top: 1vw; margin-left: 7vw;">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image">Choose file</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="desc" class="col-sm-4 col-form-label">Summit</label>
        <div class="col-sm-8">
          <select class="form-control" id="summit" name="summit">
            <?php foreach ($summit as $s) { ?>
              <option value="<?php echo $s['id_summit']; ?>"><?php echo $s['description']; ?> </option>
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
            Create Content
          </button>
        </div>
      </div>
      </form>
    </div>
  </div>