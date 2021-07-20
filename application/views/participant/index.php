<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row ml-1">
      <a href="<?= base_url();?>participant/tambah" class="btn btn-primary mb-4">Add New Participants</a>
    </div>

    <!-- Custom Filter -->
     <!--<h1 class="h3 mb-4 text-gray-800"><?= $title?></h1> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <div class="row">
            <h6 class="ml-2 mt-2 font-weight-bold text-primary">Participants</h6>
            <div class="col-sm-2">
              <div class="filter-group">

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
          </div>



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
                            <td>
                              <?php switch ($p['status']) {
                                case '0':
                                  echo "Waiting Form Completion";
                                break;
                                case '1':
                                  echo "Waiting Fee Payment";
                                break;
                                case '2':
                                  echo "Registered";
                                break;
                                case '3':
                                  echo "Paid 1st Batch";
                                break;
                                case '4':
                                  echo "Paid 2nd Batch";
                                break;
                              } ?></td>
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
    td = tr[i].getElementsByTagName("td")[2];
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
