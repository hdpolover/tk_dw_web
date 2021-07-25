<div class="container-fluid">

    <!-- Page Heading 
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>-->
    <a href="<?= base_url(); ?>rencana_pembelajaran/tambah" class="btn btn-primary mb-4">Tambah Rencana Pembelajaran</a>

    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rencana Pembelajaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kurikulum</th>
                            <th>Periode</th>
                            <th>Minggu Ke</th>
                            <th>Tema Pembelajaran</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($rencana_pembelajaran as $rp) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $rp['NAMA_KURIKULUM']; ?></td>
                                <td><?= $rp['PERIODE']; ?></td>
                                <td><?= $rp['MINGGU']; ?></td>
                                <td><?= $rp['TEMA']; ?></td>
                                <td><?= $rp['KETERANGAN']; ?></td>
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