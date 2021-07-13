<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <a href="<?= base_url(); ?>others/add_new_summit" class="btn btn-primary mb-4">Add New Timeline</a>

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Summit Timelines</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Summit Name</th>
                            <th>Description</th>
                            <th>Timeline</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($timelines as $t) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $t['summit_desc']; ?></td>
                                <td><?= $t['desc']; ?></td>
                                <td><?= $t['timeline']; ?></td>
                                <td>
                                    <?php switch ($t['status']) {
                                        case 0:
                                            echo "Due";
                                            break;
                                        case 1:
                                            echo "Ongoing";
                                            break;
                                        case 2:
                                            echo "Upcoming";
                                            break;
                                        default:
                                            echo "Due";
                                            break;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>others/timeline_details/<?= $t['id_summit_timeline']; ?>" class="badge badge-info">Edit</a>
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