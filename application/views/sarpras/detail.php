<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Sarpras</h6>
        </div>
        <div class="card-body">
            <?php foreach ($sarpras as $p) : ?>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Nama</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NAMA_SARPRAS']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Jenis</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['JENIS_SARPRAS']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Jumlah</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['JUMLAH_SARPRAS'] .  " buah"; ?> </p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Keadaan</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['KEADAAN']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Status</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['STATUS_SARPRAS']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Hak Milik</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['HAK_MILIK']; ?></p>
                            </div>
                        </div>
                        </br>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Asal Sarpras</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['ASAL_SARPRAS']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Keterangan</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['KETERANGAN']; ?></p>
                            </div>
                        </div>
                        </br>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>