<div class="container-fluid">

    <!-- Page Heading 
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>-->

    <?= $this->session->flashdata('message'); ?>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Nama Siswa Terdaftar</th>
                            <th>Tujuan Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($pembayaran as $p): ?>
                        <tr>
                            <th scope="row"><?= $i;?></th>
                            <td><?= $p['TGL_PEMBAYARAN'];?></td>
                            <td><?= $p['NAMA_TERDAFTAR'];?></td>
                            <td><?= $p['TUJUAN_PEMBAYARAN'];?></td>
                            <td><?= $p['STATUS_PEMBAYARAN'];?></td>
                            <td>
                              <a href="<?= base_url(); ?>pembayaran/lihat_detail_admin/<?= $p['ID_PEMBAYARAN']; ?>"
                                  class="btn btn-info">Lihat</a>
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
