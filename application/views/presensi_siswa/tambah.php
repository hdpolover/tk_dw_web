<div class="container-fluid">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Presensi Siswa</h6>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('presensi_siswa/simpan'); ?>">
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
                            <th hidden>ID_SISWA</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($siswa); $i++) { ?>
                            <?php $i = 1; ?>
                            <?php foreach ($siswa as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td hidden><input type="text" name="ID[]" value="<?= $p['ID_SISWA']; ?>"></td>
                                    <td><?= $p['NISN']; ?></td>
                                    <td><?= $p['NAMA_SISWA']; ?></td>
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
        </div>
    </div>