<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran Peserta</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Account Name</th>
                            <th>Bank Name</th>
                            <th>Summit</th>
                            <th>Payment Type</th>
                            <th>Payment_Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($pembayaran as $pmb): ?>
                        <tr>
                            <th scope="row"><?= $i;?></th>
                            <td><?= $pmb['account_name'];?></td>
                            <td><?= $pmb['bank_name'];?></td>
                            <td><?= $pmb['desc'];?></td>
                            <td><?= $pmb['description'];?></td>
                            <td><?= $pmb['status'];?></td>
                            <td>
                              <a href="<?= base_url(); ?>pembayaran/detail/<?= $pmb['id_participant']; ?>"
                                  class="badge badge-info">Detail</a>
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
