<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pelaksaan Pembelajaran Baru</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pelaksanaan_pembelajaran/simpan'); ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Nama Sarpras</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="id_sarpras">
                                <option selected="selected" value="" disabled="">-Pilih sarpras-</option>
                                <?php foreach ($sarpras as $data) { ?>
                                    <option value="<?php echo $data['ID_SARPRAS']; ?>"><?php echo $data['NAMA_SARPRAS']; ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Tema Pembelajaran</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="id_rencana_pembelajaran">
                                <option selected="selected" value="" disabled="">-Pilih tema pembelajaran-</option>
                                <?php foreach ($rencana_pembelajaran as $data) { ?>
                                    <option value="<?php echo $data['ID_RENCANA_PEMBELAJARAN']; ?>"><?php echo $data['TEMA']; ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Kategori Jenjang</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="id_jenjang">
                                <option selected="selected" value="" disabled="">-Pilih tema pembelajaran-</option>
                                <?php foreach ($jenjang as $data) { ?>
                                    <option value="<?php echo $data['ID_JENJANG']; ?>"><?php echo $data['KATEGORI_JENJANG']; ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label class="control-label">Nama Pegawai</label>
                        </div>
                        <div class="col-8">
                            <select class="form-control" name="id_pegawai">
                                <option selected="selected" value="" disabled="">-Pilih nama pegawai-</option>
                                <?php foreach ($pegawai as $data) { ?>
                                    <option value="<?php echo $data['ID_PEGAWAI']; ?>"><?php echo $data['NAMA']; ?></option>
                                <?php }; ?>
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
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>