<div class="container-fluid">
    <!-- Page Heading -->

    <!-- Custom Filter -->
     <!--<h1 class="h3 mb-4 text-gray-800"><?= $title?></h1> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Fully Funded Participants</h6>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="summit">Select Summit</label>
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
          <div class="form-group">
            <label for="fullParticipant">Select Participant</label>
            <select class="form-control" id="fullParticipant" name="fullParticipant">

            </select>
          </div>
          <div class="form-group">
              <label for="fullParticipant">Select Participant</label>
              <select class="form-control" id="full" name="full">
                  <?php foreach( $participants as $p ) : ?>
                      <?php if( $p == $participants['full_name'] ) : ?>
                          <option value="<?= $p; ?>" selected><?= $p; ?></option>
                      <?php else : ?>
                          <option value="<?= $p; ?>"><?= $p; ?></option>
                      <?php endif; ?>
                  <?php endforeach; ?>
              </select>
          </div>
          <div style="float:left;">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
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
</script>
