<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengguna Baru</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pengguna/simpan'); ?>">
                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukan username pengguna">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password Pengguna</label>
                    <div class="col-sm-8">
                        <input type="text" name="password" class="form-control" id="password" placeholder="Masukan password pengguna">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Role Pengguna</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="role">
                                <option selected="selected" value="" disabled="">-Pilih role-</option>
                                <?php foreach ($role as $data) { ?>
                                    <option value="<?php echo $data['ID_ROLE']; ?>"><?php echo $data['KETERANGAN']; ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col-8">
                        <div class="text-align-right">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>