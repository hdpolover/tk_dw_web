<div class="container-fluid">

    <!-- Page Heading -->
     <!--<h1 class="h3 mb-4 text-gray-800"><?= $title?></h1> -->
    <a href="<?= base_url();?>participant/tambah" class="btn btn-primary mb-4">Tambah Data Peserta</a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Summit</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($participants as $p): ?>
                        <tr>
                            <th scope="row"><?= $i;?></th>
                            <td><?= $p['full_name'];?></td>
                            <td><?= $p['email'];?></td>
                            <td><?= $p['desc'];?></td>
                            <td><?= $p['status'];?></td>
                            <td>
                              <a href="<?= base_url(); ?>peserta/detail/<?= $p['id_participant']; ?>"
                                  class="badge badge-info">Detail</a>
                              <a href="<?= base_url(); ?>peserta/hapus/<?= $p['id_participant']; ?>"
                                  class="badge badge-danger" onclick="return confirm('Apa anda ingin menghapus data tersebut?');">Hapus</a>

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
