<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row ml-1">
      <a href="<?= base_url();?>participant/tambahfull" class="btn btn-primary mb-4">Add New Fully Funded Participants</a>
  				<div class="filter-group ml-2">

              <?php
            $conn = new mysqli('localhost', 'root', '', 'ybbadmin_db')
            or die ('Cannot connect to db');

                $result = $conn->query("SELECT id_summit, description from summits");
                echo "<select class='form-control' name='summit' id='myInput' onclick='myFunction()'>";
                echo '<option value="" selected="selected">All Summit</option>';
                while ($row = $result->fetch_assoc()) {

                              unset($id, $name);
                              $id = $row['id_summit'];
                              $name = $row['description'];
                              echo '<option value="'.$name.'">'.$name.'</option>';
            }
                echo "</select>";?>

        		</div>

      </div>

    <!-- Custom Filter -->
     <!--<h1 class="h3 mb-4 text-gray-800"><?= $title?></h1> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Fully Funded Participants</h6>
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
                            <td><?= $p['description'];?></td>
                            <td><?= $p['status'];?></td>
                            <td>
                              <a href="<?= base_url(); ?>participant/detail/<?= $p['id_participant']; ?>"
                              class="btn btn-info">Detail</a>
                              <a href="<?= base_url(); ?>participant/detail/<?= $p['id_participant']; ?>"
                              class="btn btn-warning">Edit</a>
                              <!-- <a href="<?= base_url(); ?>peserta/hapus/<?= $p['id_participant']; ?>"
                                  class="btn btn-danger" onclick="return confirm('Apa anda ingin menghapus data tersebut?');">Hapus</a> -->

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
    td = tr[i].getElementsByTagName("td")[3];
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
