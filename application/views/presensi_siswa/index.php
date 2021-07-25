<div class="container-fluid">

    <!-- Page Heading 
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>-->
    <a href="<?= base_url(); ?>presensi_siswa/tambah" class="btn btn-primary mb-4">Tambah Presensi Siswa</a>

    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Presensi Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($presensi_siswa as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['TGL_PRESENSI']; ?></td>
                                <td><?= $p['NISN']; ?></td>
                                <td><?= $p['NAMA_SISWA']; ?></td>
                                <td>
                                    <?php switch ($p['STATUS']) {
                                        case 0:
                                            echo "Tidak hadir";
                                            break;
                                        case 1:
                                            echo "Hadir";
                                            break;
                                        case 2:
                                            echo "Sakit";
                                            break;
                                        case 3:
                                            echo "Ijin";
                                            break;
                                    }; ?>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- End of Main Content -->