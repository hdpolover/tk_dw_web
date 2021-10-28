<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Status Siswa</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('data_siswa/simpan_edit'); ?>">
            <input type="text" hidden name="id_daftar" class="form-control" id="id_daftar" value="<?= $siswa[0]['ID_PENDAFTARAN']; ?>">
                <div class="form-group row">
                    <div class="col-sm-8">
                        <input type="text" hidden name="id" class="form-control" id="id" value="<?= $siswa[0]['ID_SISWA']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama Siswa</label>
                    <div class="col-sm-8">
                        <input type="text" disabled name="nama" class="form-control" id="nama" value="<?= $siswa[0]['NAMA_SISWA']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Status</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="STATUS">
                                <option selected="selected" value="" disabled="">-Pilih Status-</option>
                                <option value="AKTIF">Aktif</option>
                                <option value="LULUS">Lulus</option>
                                <option value="KELUAR">Keluar</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Jenjang</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="JENJANG">
                                <option selected="selected" value="" disabled="">-Pilih Jenjang-</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
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
                                SIMPAN
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>