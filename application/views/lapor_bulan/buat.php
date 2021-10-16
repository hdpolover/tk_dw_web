<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan Bulanan Baru</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('laporan_bulanan/simpan'); ?>">
                <?php echo form_error('jenis_laporan'); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Jenis Laporan</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="jenis_laporan">
                                <option selected="selected" value="" disabled="">-Pilih Jenis Laporan-</option>
                                <option value="1">Lapor Bulan</option>
                                <option value="2">Personalia</option>
                                <option value="3">Daftar Hadir Pegawai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php echo form_error('bulan'); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Bulan</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="bulan">
                                <option selected="selected" value="" disabled="">-Pilih Bulan-</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <?php echo form_error('tp'); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Tahun Pelajaran</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="tp">
                                <option selected="selected" value="" disabled="">-Pilih Tahun Pelajaran-</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
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
                                Buat Laporan
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>