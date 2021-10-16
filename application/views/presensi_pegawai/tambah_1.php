<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Presensi Pegawai</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('presensi_pegawai/simpan'); ?>">
                <?php echo form_error('TGL_PRESENSI'); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="TGL_PRESENSI">Tanggal Presensi</label>
                        </div>
                        <div class="col-8">
                            <input class="form-control" type="date" name="TGL_PRESENSI" placeholder="Pilih tanggal presensi" />
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th hidden>ID</th>
                            <th>NIP/NUPTK</th>
                            <th>Nama Pegawai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($pegawai); $i++) { ?>
                            <?php $i = 1; ?>
                            <?php foreach ($pegawai as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td hidden><input type="text" name="ID[]" value="<?= $p['ID_PEGAWAI']; ?>"></td>
                                    <td><?= $p['NIP_NUPTK']; ?></td>
                                    <td><?= $p['NAMA']; ?></td>
                                    <td>
                                        <select class="form-control" name="STATUS[]" id="STATUS[]">
                                            <option value="2">Hadir</option>
                                            <option value="1">Tidak Hadir</option>
                                            <option value="3">Sakit</option>
                                            <option value="4">Ijin</option>
                                        </select>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <br>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col-3">
                        <div class="text-align-right">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                SIMPAN
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>