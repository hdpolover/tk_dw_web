<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Pembelajaran</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <p class="card-text" style="color: black;">Tema Pembelajaran</p>
                        </div>
                        <div class="col">
                            <p class="card-text" style="color: black;"><?= $pelaksanaan_pembelajaran[0]['TEMA']; ?></p>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col">
                            <p class="card-text" style="color: black;">Kategori Jenjang</p>
                        </div>
                        <div class="col">
                            <p class="card-text" style="color: black;"><?= $pelaksanaan_pembelajaran[0]['KATEGORI_JENJANG']; ?></p>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col">
                            <p class="card-text" style="color: black;">Periode</p>
                        </div>
                        <div class="col">
                            <p class="card-text" style="color: black;"><?= $pelaksanaan_pembelajaran[0]['PERIODE']; ?></p>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col">
                            <p class="card-text" style="color: black;">Minggu ke</p>
                        </div>
                        <div class="col">
                            <p class="card-text" style="color: black;"><?= $pelaksanaan_pembelajaran[0]['MINGGU']; ?></p>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col">
                            <p class="card-text" style="color: black;">Nama Pegawai</p>
                        </div>
                        <div class="col">
                            <p class="card-text" style="color: black;"><?= $pelaksanaan_pembelajaran[0]['NAMA']; ?></p>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col">
                            <p class="card-text" style="color: black;">Nama Sarpras</p>
                        </div>
                        <div class="col">
                            <p class="card-text" style="color: black;"><?= $pelaksanaan_pembelajaran[0]['NAMA_SARPRAS']; ?></p>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col">
                            <p class="card-text" style="color: black;">Keterangan</p>
                        </div>
                        <div class="col">
                            <p class="card-text" style="color: black;"><?= $pelaksanaan_pembelajaran[0]['KETERANGAN']; ?></p>
                        </div>
                    </div>
                    </br>
                </div>
            </div>
            </br>
            <p class="card-text" style="color: black;">Daftar Siswa</p>
            </br>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pembelajaran as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $p['NAMA_SISWA']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </br>
        </div>
    </div>
</div>