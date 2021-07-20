<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>
    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <div class="row">
          <h6 class="ml-2 mt-2 font-weight-bold text-primary">Participant Payment</h6>
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
            <div class="col-sm-2">
              <div class="filter-group">

                    <?php
                    $conn = new mysqli('localhost', 'root', '', 'ybbadmin_db')
                    or die ('Cannot connect to db');

                        $result = $conn->query("SELECT description, id_payment_type from payment_types");
                        echo "<select class='form-control' name='payment_type' id='myInput2' onclick='myFunction2()'>";
                        echo '<option value="" selected="selected">All Payment Type</option>';
                        while ($row = $result->fetch_assoc()) {

                                      unset($id, $name);
                                      $id = $row['id_payment_type'];
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
                            <th>Payment Date</th>
                            <th>Participant Name</th>
                            <th>Summit</th>
                            <th hidden>Payment Type</th>
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
                            <td hidden><?= $p['payment_type'];?></td>
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
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

            <!-- End of Main Content -->

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
            function myFunction2() {
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput2");
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
