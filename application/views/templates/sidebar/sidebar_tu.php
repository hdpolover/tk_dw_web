<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php base_url('home'); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">TK DHARMA WANITA</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pendaftaran/lihat_pendaftaran'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Data Pendaftaran</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('pembayaran'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Data Pembayaran</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('presensi_pegawai'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Presensi Pegawai</span></a>
  </li>

  <!-- Nav Item - Dashboard
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('presensi_siswa'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Presensi Siswa</span></a>
  </li> -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-user fa-cog"></i>
      <span>Presensi Siswa</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?= base_url('presensi_siswa/index'); ?>">Kelompok A</a>
        <a class="collapse-item" href="<?= base_url('presensi_siswa/index_b'); ?>">Kelompok B</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('data_siswa'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Data Siswa</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('laporan_bulanan'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Laporan Bulanan</span></a>
  </li>


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-user fa-cog"></i>
      <span>Pengaturan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?= base_url('pegawai'); ?>">Pegawai</a>
        <a class="collapse-item" href="<?= base_url('jenjang'); ?>">Jenjang</a>
        <a class="collapse-item" href="<?= base_url('sarpras'); ?>">Sarpras</a>
        <a class="collapse-item" href="<?= base_url('pengguna'); ?>">Pengguna</a>
        <a class="collapse-item" href="<?= base_url('role'); ?>">Role</a>
      </div>
    </div>
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