<div class="container-fluid">

    <!-- Page Heading 
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>-->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pembayaran Pendaftaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>Nama Siswa Terdaftar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pendaftaran as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['TGL_PENDAFTARAN']; ?></td>
                                <td><?= $p['NAMA_TERDAFTAR']; ?></td>
                                <td><?= $p['STATUS_SISWA']; ?></td>
                                <td>
                                    <?php if ($pembayaran == null) { ?>
                                        <a href="<?= base_url(); ?>pembayaran/bayar/<?= $p['ID_PENDAFTARAN']; ?>" class="btn btn-info">Bayar</a>

                                    <?php  } else { ?>
                                        <a href="<?= base_url(); ?>pembayaran/lihat_detail_ortu/<?= $p['ID_PENDAFTARAN']; ?>" class="btn btn-info">Detail</a>
                                    <?php }; ?>
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