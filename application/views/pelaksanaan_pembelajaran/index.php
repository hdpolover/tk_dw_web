<div class="container-fluid">


    <a href="<?= base_url(); ?>pelaksanaan_pembelajaran/tambah" class="btn btn-primary mb-4">Tambah Pelaksanaan Pembelajaran</a>


    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelaksanaan Pembelajaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kategori Jenjang</th>
                            <th>Tema Pembelajaran</th>
                            <th>Nama Pegawai</th>
                            <th>Nama Sarpras</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pelaksanaan_pembelajaran as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['KATEGORI_JENJANG']; ?></td>
                                <td><?= $p['TEMA']; ?></td>
                                <td><?= $p['NAMA']; ?></td>
                                <td><?= $p['NAMA_SARPRAS']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>pelaksanaan_pembelajaran/detail/<?= $p['ID_PELAKSANAAN_PEMBELAJARAN']; ?>" class="btn btn-info">Lihat</a>
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