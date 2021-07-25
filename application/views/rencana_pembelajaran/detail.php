<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Rencana Pembelajaran</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p class="card-text" style="color: black;">Nama Kurikulum</p>
                </div>
                <div class="col">
                    <p class="card-text" style="color: black;"><?= $rencana_pembelajaran[0]['NAMA_KURIKULUM']; ?></p>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col">
                    <p class="card-text" style="color: black;">Periode</p>
                </div>
                <div class="col">
                    <p class="card-text" style="color: black;"><?= $rencana_pembelajaran[0]['PERIODE']; ?></p>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col">
                    <p class="card-text" style="color: black;">Minggu ke-</p>
                </div>
                <div class="col">
                    <p class="card-text" style="color: black;"><?= $rencana_pembelajaran[0]['MINGGU']; ?></p>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col">
                    <p class="card-text" style="color: black;">Tema Pembelajaran</p>
                </div>
                <div class="col">
                    <p class="card-text" style="color: black;"><?= $rencana_pembelajaran[0]['TEMA']; ?></p>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col">
                    <p class="card-text" style="color: black;">Keterangan</p>
                </div>
                <div class="col">
                    <p class="card-text" style="color: black;"><?= $rencana_pembelajaran[0]['KETERANGAN']; ?></p>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="row">
                    <?php if ($rencana_pembelajaran[0]['KETERANGAN'] == "BELUM DIVALIDASI") { ?>
                        <div class="col">
                            <a href="<?= base_url(); ?>rencana_pembelajaran/terima_rp/<?= $rencana_pembelajaran[0]['ID_RENCANA_PEMBELAJARAN']; ?>" class="btn btn-info btn-block">TERIMA</a>
                        </div>
                        <div class="col">
                            <a href="<?= base_url(); ?>rencana_pembelajaran/tolak_rp/<?= $rencana_pembelajaran[0]['ID_RENCANA_PEMBELAJARAN']; ?>" class="btn btn-danger btn-block">TOLAK</a>
                        </div>
                    <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>