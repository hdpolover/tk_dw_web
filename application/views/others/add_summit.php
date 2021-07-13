
  <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>

      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Summit</h6>
        </div>
        <div class="card-body">
        <form method="post" action="<?= base_url('others/create_new_summit'); ?>">
              <div class="form group mb-2">
                <label for="desc" class="form-label">Summit Description/Name</label>
                <input type="text" name="desc" class="form-control" id="desc">
              </div>
              <div class="form group mb-2">
                <label for="regist_fee" class="form-label">Registration Fee</label>
                <input type="number" name="regist_fee" class="form-control" id="regist_fee">
              </div>
              <div class="form group mb-2">
                <label for="program_fee" class="form-label">Program Fee</label>
                <input type="number" name="program_fee" class="form-control" id="program_fee">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                <option value="0">Inactive</option>
                <option value="1">Active</option>
                </select>
              </div>
        
            </div>
            <button type="submit" class="btn btn-primary">Create</button>

  </div>