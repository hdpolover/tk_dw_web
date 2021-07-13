<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <a href="<?= base_url();?>others/add_new_summit" class="btn btn-primary mb-4">Add New Summit</a>

    <?php echo $this->session->flashdata('message'); ?>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Summits</h6>
        </div>

      

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Summit Name</th>
                            <th>Registration Fee</th>
                            <th>Program Fee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($summits as $s): ?>
                        <tr>
                            <th scope="row"><?= $i;?></th>
                            <td><?= $s['desc'];?></td>
                            <td><?= $s['regist_fee'];?></td>
                            <td><?= $s['program_fee'];?></td>
                            <td><?= $s['status'] == 0 ? "Inactive" : "Active";?></td>
                            <td>
                              <a href="<?= base_url(); ?>others/summit_detail/<?= $s['id_summit']; ?>"
                                  class="badge badge-info">Edit</a>
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
