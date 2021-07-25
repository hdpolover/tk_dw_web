<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kurikulum Baru</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('kurikulum/simpan'); ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama Kurikulum</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="periode" class="col-sm-4 col-form-label">Periode</label>
                    <div class="col-sm-8">
                        <input type="number" name="periode" class="form-control" id="periode">
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