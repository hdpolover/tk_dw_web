<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url('home');?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">TK DHARMA WANITA</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('rencana_pembelajaran'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Rencana Pembelajaran</span></a>
  </li>

   <!-- Nav Item - Dashboard -->
   <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pelaksanaan_pembelajaran'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Pelaksanaan Pembelajaran</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pembelajaran'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Pembelajaran</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('kurikulum'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Kurikulum</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Logout -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Logout</span>
    </a>

  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->


  <!-- Nav Item - Charts -->





  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
<script>
  // Get the container element
  var btnContainer = document.getElementById("accordionSidebar");

  // Get all buttons with class="btn" inside the container
  var btns = btnContainer.getElementsByClassName("collapse-item");

  // Loop through the buttons and add the active class to the current/clicked button
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>