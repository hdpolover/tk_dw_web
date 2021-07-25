<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Formulir Pendaftaran Siswa TK Dharma Wanita</h1>
                                </div>
                                </br>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('pendaftaran/daftar_siswa'); ?>">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="NAMA_TERDAFTAR">Nama Lengkap</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control <?php echo form_error('NAMA_TERDAFTAR') ? 'is-invalid' : '' ?>" type="text" name="NAMA_TERDAFTAR" min="0" placeholder="Masukan nama siswa" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('NAMA_TERDAFTAR') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label class="control-label">Jenjang Pendidikan</label>
                                            </div>
                                            <div class="col">
                                                <select class="form-control" name="jenjang">
                                                    <option selected="selected" value="" disabled="">-Pilih jenjang-</option>
                                                    <?php foreach ($jenjang as $data) { ?>
                                                        <option value="<?php echo $data['ID_JENJANG']; ?>"><?php echo $data['KATEGORI_JENJANG']; ?></option>
                                                    <?php }; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="ALAMAT_TERDAFTAR">Alamat Tinggal</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control <?php echo form_error('ALAMAT_TERDAFTAR') ? 'is-invalid' : '' ?>" type="text" name="ALAMAT_TERDAFTAR" min="0" placeholder="Masukan alamat siswa" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('ALAMAT_TERDAFTAR') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="TEMPAT_LAHIR">Tempat Lahir </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control <?php echo form_error('TEMPAT_LAHIR') ? 'is-invalid' : '' ?>" type="text" name="TEMPAT_LAHIR" min="0" placeholder="Masukan tempat lahir siswa" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('TEMAPT_LAHIR') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="TANGGAL_LAHIR">Tanggal Lahir *(umur siswa saat ini harus antara 4 - 5 tahun)</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control <?php echo form_error('TANGGAL_LAHIR') ? 'is-invalid' : '' ?>" type="date" name="TANGGAL_LAHIR" min="0" placeholder="Pilih tanggal lahir siswa" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('TANGGAL_LAHIR') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="JENIS_KELAMIN">Jenis Kelamin </label>
                                            </div>
                                            <div class="col">
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
                                            <div class="col">
                                                <label for="NAMA_ORTU">Nama Orang Tua </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control <?php echo form_error('NAMA_ORTU') ? 'is-invalid' : '' ?>" type="text" name="NAMA_ORTU" min="0" placeholder="Masukan nama orang tua siswa" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('NAMA_ORTU') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="NIK">Nomor Induk Kependudukan (NIK) Orang Tua</label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control <?php echo form_error('NIK') ? 'is-invalid' : '' ?>" type="number" name="NIK" min="0" placeholder="Masukan NIK orang tua siswa" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('NIK') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label for="NOMOR_HP">Nomor HP (WhatsApp) Orang Tua </label>
                                            </div>
                                            <div class="col">
                                                <input class="form-control <?php echo form_error('NOMOR_HP') ? 'is-invalid' : '' ?>" type="number" name="NOMOR_HP" min="0" placeholder="Masukan nomor HP nama orang tua siswa" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('NOMOR_HP') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        DAFTAR
                                    </button>

                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>