<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pegawai</h6>
        </div>
        <div class="card-body">
            <?php foreach ($pegawai as $p) : ?>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">NIP NUPTK</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NIP_NUPTK']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Nama Lengkap</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NAMA']; ?></p>
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
                                <p class="card-text" style="color: black;"><?= $p['JK']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Agama</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['AGAMA']; ?></p>
                            </div>
                        </div>
                        </br>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Ijazah Terakhir</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['IJAZAH_TERAKHIR']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Golongan</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['GOLONGAN']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Jabatan</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['JABATAN']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Status Kepegawaian</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['STATUS']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Masa Kerja</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['MASA_KERJA_TAHUN']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Tanggal Mulai Kerja</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['TGL_MULAI_KERJA']; ?></p>
                            </div>
                        </div>
                        </br>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>