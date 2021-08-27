<div class="container-fluid">

    <?= $this->session->flashdata('message'); ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
        </div>
        <div class="card-body">
            <div class="col-4">
                <div class="filter-group">
                    <?php
                    $conn = new mysqli('localhost', 'root', '', 'tk_dw_db')
                        or die('Cannot connect to db');

                    $result = $conn->query("SELECT ID_SISWA, ID_JENJANG from siswa GROUP BY ID_JENJANG");
                    echo "<select class='form-control' name='summit' id='myInput' onclick='myFunction()'>";
                    echo '<option value="" selected="selected">Semua Jenjang</option>';
                    while ($row = $result->fetch_assoc()) {
                        switch ($row['ID_JENJANG']) {
                            case '1':
                                unset($id, $name);
                                $id = $row['ID_SISWA'];
                                $name = "Kelompok A";
                                echo '<option value="' . $name . '">' . $name . '</option>';
                                break;
                            case '2':
                                unset($id, $name);
                                $id = $row['ID_SISWA'];
                                $name = "Kelompok B";
                                echo '<option value="' . $name . '">' . $name . '</option>';
                                break;
                        }
                    }
                    echo "</select>"; ?>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th hidden>Jenjang</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($siswa as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td hidden>
                                    <?php switch ($p['ID_JENJANG']) {
                                        case 1:
                                            echo 'Kelompok A';
                                            break;
                                        case 2:
                                            echo 'Kelompok B';
                                            break;
                                    } ?>
                                </td>
                                <td><?= $p['NISN']; ?></td>
                                <td><?= $p['NAMA_SISWA']; ?></td>
                                <td><?= $p['JK_SISWA']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>data_siswa/lihat/<?= $p['ID_PENDAFTARAN']; ?>" class="btn btn-info">Lihat</a>
                                    <a href="<?= base_url(); ?>data_siswa/edit/<?= $p['ID_PENDAFTARAN']; ?>" class="btn btn-danger">Edit Status</a>
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

<script>
    function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
</script>

<!-- End of Main Content -->