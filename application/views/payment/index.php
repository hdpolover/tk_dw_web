<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Participant Payment</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Payment Date</th>
                            <th>Participant Name</th>
                            <th>Summit</th>
                            <th>Payment Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($payment as $p): ?>
                        <tr>
                            <th scope="row"><?= $i;?></th>
                            <td><?= $p['payment_date'];?></td>
                            <td><?= $p['full_name'];?></td>
                            <td><?= $p['summit'];?></td>
                            <td><?= $p['payment_type'];?></td>
                            <td>
                            <?php switch ($p['payment_status']) {
                                        case 0:
                                            echo 'Pending';
                                            break;
                                        case 1:
                                            echo 'Valid';
                                            break;
                                        case 2:
                                            echo 'Invalid';
                                            break;
                                    } ?>
                            </td>
                            <td>
                              <a href="<?= base_url(); ?>payment/detail/<?= $p['id_payment']; ?>"
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
