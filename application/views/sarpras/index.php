<div class="container-fluid">

    <a href="<?= base_url(); ?>sarpras/tambah" class="btn btn-primary mb-4">Tambah Sarpras</a>

    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Sarpras</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                            <th>Keadaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($sarpras as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['NAMA_SARPRAS']; ?></td>
                                <td><?= $p['JENIS_SARPRAS']; ?></td>
                                <td><?= $p['JUMLAH_SARPRAS']; ?></td>
                                <td><?= $p['KEADAAN']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>sarpras/lihat/<?= $p['ID_SARPRAS']; ?>" class="btn btn-info">Lihat</a>
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