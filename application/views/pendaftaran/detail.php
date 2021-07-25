<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pendaftaran Siswa</h6>
        </div>
        <div class="card-body">
            <?php foreach ($pendaftaran as $p) : ?>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Jenjang Siswa</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $jenjang[0]['KATEGORI_JENJANG']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Nama Siswa</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NAMA_TERDAFTAR']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Alamat Siswa </p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['ALAMAT_TERDAFTAR']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Tempat Lahir</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['TEMPAT_LAHIR']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Tanggal Lahir</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['TGL_LAHIR']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Jenis Kelamin</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['JENIS_KELAMIN']; ?></p>
                            </div>
                        </div>
                        </br>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Tanggal Pendaftaran</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['TGL_PENDAFTARAN']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Nama Orang Tua</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NAMA_ORTU']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">NIK Orang Tua </p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NIK']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Nomor HP (WhatsApp) OrTu</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NOMOR_HP']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Status Siswa</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['STATUS_SISWA']; ?></p>
                            </div>
                        </div>
                        </br>
                        </br>
                        <div class="row">
                            <?php if ($p['STATUS_SISWA'] == "BELUM DIVALIDASI") { ?>
                                <div class="col">
                                    <a href="<?= base_url(); ?>pendaftaran/terima_pendaftaran/<?= $p['ID_PENDAFTARAN']; ?>" class="btn btn-info btn-block">TERIMA</a>
                                </div>
                                <div class="col">
                                    <a href="<?= base_url(); ?>pendaftaran/tolak_pendaftaran/<?= $p['ID_PENDAFTARAN']; ?>" class="btn btn-danger btn-block">TOLAK</a>
                                </div>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>