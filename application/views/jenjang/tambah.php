<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jenjang Baru</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('jenjang/simpan'); ?>">
                <div class="form-group row">
                    <label for="kategori" class="col-sm-4 col-form-label">Kategori Jenjang</label>
                    <div class="col-sm-8">
                        <input type="text" name="kategori" class="form-control" id="kategori" placeholder="Masukan kategori jenjang">
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
        </br>
    </div>
</div>