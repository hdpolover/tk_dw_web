<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan Bulanan Baru</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('laporan_bulanan/simpan'); ?>">
                <div class="form-group row">
                    <label for="bulan" class="col-sm-4 col-form-label">Bulan</label>
                    <div class="col-sm-8">
                        <input type="number" name="bulan" class="form-control" id="bulan" min="1" max="12">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tp" class="col-sm-4 col-form-label">Tahun Pelajaran</label>
                    <div class="col-sm-8">
                        <input type="number" name="tp" class="form-control" id="tp">
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