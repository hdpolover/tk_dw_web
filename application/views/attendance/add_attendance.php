<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <?php echo $this->session->flashdata('message'); ?>

  <!-- Basic Card Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Add Attendance</h6>
    </div>
    <div class="card-body">
      <?= form_open_multipart('summit_content/save_new_content'); ?>

      <div class="form-group row">
        <label for="desc" class="col-sm-4 col-form-label">Participants</label>
        <div class="col-sm-8">
          <select class="form-control" id="summit" name="summit">
            <?php foreach ($summit as $s) { ?>
              <option value="<?php echo $s['id_summit']; ?>"><?php echo $s['description']; ?> </option>
            <?php } ?>
          </select>
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
        <label for="desc" class="col-sm-4 col-form-label">Meal Type</label>
        <div class="col-sm-8">
          <select class="form-control" id="summit" name="summit">
            <?php foreach ($summit as $s) { ?>
              <option value="<?php echo $s['id_summit']; ?>"><?php echo $s['description']; ?> </option>
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="timespan" class="col-sm-4 col-form-label">Check In Time</label>
        <div class="col-sm-8">
        </div>
      </div>
      <div class="row">
        <div class="col align-self-end">
          <button type="submit" class="btn btn-primary btn-user btn-block">
            Add Attendance
          </button>
        </div>
      </div>
      </form>
    </div>
  </div>