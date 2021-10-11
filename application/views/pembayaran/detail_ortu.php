<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pembayaran</h6>
        </div>
        <div class="card-body">
            <?php foreach ($pembayaran as $p) : ?>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Pembayaran Untuk</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $pendaftaran[0]['NAMA_TERDAFTAR']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Tanggal Pembayaran</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['TGL_PEMBAYARAN']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Tujuan Pembayaran</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['TUJUAN_PEMBAYARAN']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Nama Pengirim</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NAMA_PENGIRIM']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Nomor Pengirim</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NOMOR_PENGIRIM']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Nominal</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['NOMINAL']; ?></p>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <p class="card-text" style="color: black;">Status Pembayaran</p>
                            </div>
                            <div class="col">
                                <p class="card-text" style="color: black;"><?= $p['STATUS_PEMBAYARAN']; ?></p>
                            </div>
                        </div>
                        </br>
                    </div>
                    <div class="col">
                        <img src="<?php echo base_url('assets/img/bukti_pembayaran/') . $p['BUKTI_PEMBAYARAN']; ?>" class="img-thumbnail">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>