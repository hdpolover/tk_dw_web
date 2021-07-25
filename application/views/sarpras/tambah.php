<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sarpras Baru</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('sarpras/simpan'); ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama Sarpras</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama sarpras">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="jenis">Jenis</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="jenis" id="jenis">
                                <option selected="selected" value="" disabled="">-Pilih Jenis sarpras-</option>
                                <option value="ruangan">Ruangan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                    <div class="col-sm-8">
                        <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Masukan jumlah sarpras">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Keadaan</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="keadaan">
                                <option selected="selected" value="" disabled="">-Pilih keadaan-</option>
                                <option value="baik">Baik</option>
                                <option value="buruk">Buruk</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Status</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="status">
                                <option selected="selected" value="" disabled="">-Pilih status-</option>
                                <option value="milik">Milik Sendiri</option>
                                <option value="sewa">Sewa</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Hak Milik</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="hak">
                                <option selected="selected" value="" disabled="">-Pilih hak milik-</option>
                                <option value="hak">Hak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal" class="col-sm-4 col-form-label">Asal Sarpras</label>
                    <div class="col-sm-8">
                        <input type="text" name="asal" class="form-control" id="asal" placeholder="Masukan asal sarpras">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                    <div class="col-sm-8">
                        <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan keterangan sarpras">
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