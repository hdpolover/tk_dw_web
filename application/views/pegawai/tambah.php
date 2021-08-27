<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pegawai</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pegawai/simpan'); ?>">
                <div class="form-group row">
                    <label for="nip" class="col-sm-4 col-form-label">Nomor Induk Pegawai (NIP) / NUPTK</label>
                    <div class="col-sm-8">
                        <input type="number" name="nip" class="form-control" id="nip" placeholder="Masukan nomor induk pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan nama pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                    <div class="col-8">
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukan tempat lahir pegawai">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="TANGGAL_LAHIR">Tanggal Lahir</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control <?php echo form_error('TANGGAL_LAHIR') ? 'is-invalid' : '' ?>" type="date" name="TANGGAL_LAHIR" min="0" placeholder="Pilih tanggal lahir pegawai" />
                            <div class="invalid-feedback">
                                <?php echo form_error('TANGGAL_LAHIR') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="JENIS_KELAMIN">Jenis Kelamin </label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="JENIS_KELAMIN" id="JENIS_KELAMIN">
                                <option selected="selected" value="" disabled="">-Pilih Jenis Kelamin-</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-laki</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Agama</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="agama">
                                <option selected="selected" value="" disabled="">-Pilih agama-</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="buddha">Buddha</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ijazah_terakhir" class="col-sm-4 col-form-label">Ijazah Terakhir</label>
                    <div class="col-sm-8">
                        <input type="text" name="ijazah_terakhir" class="form-control" id="ijazah_terakhir" placeholder="Masukan ijazah terakhir pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                        <input type="text" name="status" class="form-control" id="status" placeholder="Masukan status pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
                    <div class="col-sm-8">
                        <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukan jabatan pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="golongan" class="col-sm-4 col-form-label">Golongan</label>
                    <div class="col-sm-8">
                        <input type="text" name="golongan" class="form-control" id="golongan" placeholder="Masukan golongan pegawai">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ruang" class="col-sm-4 col-form-label">Ruang</label>
                    <div class="col-sm-8">
                        <input type="text" name="ruang" class="form-control" id="ruang" placeholder="Masukan Ruang (Huruf saja)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomor_sk" class="col-sm-4 col-form-label">Nomor SK Terakhir</label>
                    <div class="col-sm-8">
                        <input type="text" name="nomor_sk" class="form-control" id="nomor_sk" placeholder="Masukan nomor SK terakhir">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="TGL_SK">Tanggal SK Terakhir</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="date" name="TGL_SK" placeholder="Pilih tanggal nomor SK" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="TGL_MULAI">Tanggal Mulai Kerja</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="date" name="TGL_MULAI" placeholder="Pilih tanggal mulai kerja" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Status Kepegawaian</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="status_kepegawaian">
                                <option selected="selected" value="" disabled="">-Pilih Status-</option>
                                <option value="PNS Dpk">PNS Dpk</option>
                                <option value="Guru Bantu">Guru Bantu</option>
                                <option value="GTY">GTY</option>
                                <option value="GTT">GTT</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="masa_kerja_tahun" class="col-sm-4 col-form-label">Masa Kerja Seluruhnya</label>
                    <div class="col">
                        <input type="number" name="masa_kerja_tahun" class="form-control" id="masa_kerja_tahun" placeholder=".....">
                    </div>
                    <div class="col">
                        Tahun
                    </div>
                    <div class="col">
                        <input type="number" name="masa_kerja_bulan" class="form-control" id="masa_kerja_bulan" placeholder=".....">
                    </div>
                    <div class="col">
                        Bulan
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Mengajar Kelompok</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="mengajar_kelompok">
                                <option selected="selected" value="" disabled="">-Pilih kelompok-</option>
                                <option value="A">Kelompok A</option>
                                <option value="B">Kelompok B</option>
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