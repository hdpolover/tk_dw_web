<div class="container-fluid">

    <!-- Page Heading 
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>-->
    <a href="<?= base_url(); ?>summit_content/add_new_content" class="btn btn-primary mb-4">Add Summit Content</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Summit Content Management</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Summit</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($summit_contents as $sc) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sc['modified_date']; ?></td>
                                <td><?= $sc['summit']; ?></td>
                                <td><?= $sc['description']; ?></td>
                                <td><?= $sc['file']; ?></td>
                                <td>
                                    <?php switch ($sc['status']) {
                                        case 0:
                                            echo 'Draft';
                                            break;
                                        case 1:
                                            echo 'Published';
                                            break;
                                        case 2:
                                            echo 'Archived';
                                            break;
                                    } ?>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>summit_content/view_summit_content_details/<?= $sc['id_summit_content']; ?>" class="badge badge-info">View</i></a>
                                    <a href="<?= base_url(); ?>summit_content/view_summit_content_details/<?= $sc['id_summit_content']; ?>" class="badge badge-danger">Edit</i></a>
                                
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