<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rencana Pembelajaran</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('rencana_pembelajaran/simpan'); ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Nama Kurikulum</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="id_kurikulum">
                                <option selected="selected" value="" disabled="">-Pilih kurikulum-</option>
                                <?php foreach ($kurikulum as $data) { ?>
                                    <option value="<?php echo $data['ID_KURIKULUM']; ?>"><?php echo $data['NAMA_KURIKULUM']; ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Periode</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="periode">
                                <option selected="selected" value="" disabled="">-Pilih Periode-</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Minggu Ke</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="minggu">
                                <option selected="selected" value="" disabled="">-Pilih Minggu-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tema" class="col-sm-4 col-form-label">Tema Pembelajaran</label>
                    <div class="col-sm-8">
                        <input type="text" name="tema" class="form-control" id="tema" placeholder="Masukan tema pembelajaran">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col-8">
                        <div class="text-align-right">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>