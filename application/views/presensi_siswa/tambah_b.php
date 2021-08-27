<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Presensi Siswa</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('presensi_siswa/simpan'); ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="TGL_PRESENSI">Tanggal Presensi</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="date" name="TGL_PRESENSI" placeholder="Pilih tanggal presensi" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Nama Siswa</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="id_siswa">
                                <option selected="selected" value="" disabled="">-Pilih Siswa-</option>
                                <?php foreach ($siswa as $data) { ?>
                                    <option value="<?php echo $data['ID_SISWA']; ?>"><?php echo $data['NAMA_SISWA']; ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="STATUS">Status </label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="STATUS" id="STATUS">
                                <option selected="selected" value="" disabled="">-Pilih status kehadiran-</option>
                                <option value="1">Tidak Hadir</option>
                                <option value="2">Hadir</option>
                                <option value="3">Sakit</option>
                                <option value="4">Ijin</option>
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
                                TAMBAH
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>