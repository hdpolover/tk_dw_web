<style>
.tab {
  display: none;
}
</style>


  <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title?></h1>

      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Partisipan</h6>
        </div>
        <div class="card-body">
          <form id="ybbReg" action="" method="post">
            <div class="tab">
              <div class="form-group">
                <label for="summit">Choose Summit</label>
                <select class="form-control" id="summit" name="summit">
                <option value="1">Istanbul Youth Summit 2022</option>
                <option value="2">Asian Youth Summit 2022</option>
                </select>
              </div>
              <div class="form group mb-2">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                <option value="registered">Registered</option>
                <option value="paid">Paid</option>
                </select>
              </div>
              <div class="form group mb-2">
                <label for="examplePortalPassword" class="form-label">Portal Password</label>
                <input type="password" name="ppassword" class="form-control" id="ppassword">
              </div>
              <div class="form-group">
                <label for="fully_funded">Are You Fully Funded?</label>
                <select class="form-control" id="fully_funded" name="fullyfunded">
                <option value="1">Yes</option>
                <option value="0">No</option>
                </select>
              </div>
              <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div> -->
            </div>
            <div class="tab">
              <div class="form group">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" id="fullname">
              </div>
              <div class="form group">
                <label class="form-label">Birth Date</label>
                <input type="date" name="birth" class="form-control" id="birth">
              </div>
              <div class="form group">
                <label for="essay" class="form-label">Essay</label>
                <div class="col-75">
                  <textarea class="form-control" id="essay" name="essay" placeholder="Write something.." style="height:200px"></textarea>
                </div>
              </div>
            </div>
            <div class="tab">
              <div class="form-group">
                <label for="payment">Payment Type</label>
                <select class="form-control" id="payment" name="payment">
                <option value="1">Registrasi</option>
                <option value="2">Program</option>
                </select>
              </div>
              <div class="form group mb-2">
                <label for="exampleInputEmail1" class="form-label">Bank Name</label>
                <input type="text" name="bank" class="form-control" id="bank">
              </div>
              <div class="form group mb-2">
                <label for="exampleInputEmail1" class="form-label">Account Name</label>
                <input type="text" name="account" class="form-control" id="account">
              </div>
              <div class="form group">
                <label class="form-label">Payment Date</label>
                <input type="date" name="paymentdate" class="form-control" id="paymentdate">
              </div>
              <div class="form group mb-2">
                <label for="exampleInputEmail1" class="form-label">Payment Proof</label>
                <form action="/action_page.php">
                  <input type="file" id="proof" name="proof" class="form-control">
                </form>
              </div>
              </div>
              <div class="tab">
                <div class="form group mb-2">
                  <label for="exampleInputEmail1" class="form-label">Info YBB</label>
                  <input type="text" name="infoybb" class="form-control" id="infoybb">
                </div>
              </div>
            </div>

            <div style="overflow:auto;">
              <div class="mb-3 mr-3" style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-secondary">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-primary">Next</button>
              </div>
            </div>
            </form>
          </div>
        </div>
  </div>

  <!-- <script src="tambah.js"></script> -->
  <script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
      //...the form gets submitted:
      document.getElementById("ybbReg").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    return valid; // return the valid status
  }
  </script>
