<?php
session_start();
if(!$_SESSION['login_status']){
  header("location:login.php");
}

  if(isset($_GET['title'])){
    $title=$_GET['title'];
  }else{
    $title="Aplikasi Perpustakaan";
  }
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= strtoupper($title) ?></title>
  <link rel="icon" type="image/x-icon" href="img/favicon.ico"><link rel="icon" type="image/x-icon" href="img/favicon.ico">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/darkmode.css">
  
</head>
<body class="hold-transition sidebar-mini normal-mode"> <!-- Add normal-mode class -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

      <li class="nav-item">
          <a class="btn btn-danger btn-sm" href="logout.php" role="button" title="Log Out">
            <i class="fas fa-power-off"></i>
          </a>
      </li>

        <li class="nav-item">
          <a class="nav-link" id="dark-mode-toggle" href="#" role="button" title="Toggle dark mode">
            <i class="fas fa-sun" id="dark-mode-icon"></i>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4 bg">
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <div class="image">
          <img src="dist/img/scoups.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ml-1">
          <a href="#" class="d-block"><?=$_SESSION['nama']?></a>
        </div>
      </div>
    </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="index.php?page=dashboard&title=dashboard" class="nav-link <?php if($title==='dashboard') echo 'active'; ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item <?php echo ($title === 'siswa' || $title === 'siswa_create' ) ? 'menu-open' : ''; ?>">
              <a href="index.php?page=siswa&title=siswa" class="nav-link <?php if($title === 'siswa' || $title === 'siswa_create'){ echo 'active'; } ?>">
                <i class="fas fa-users"></i>
                <p>
                  Siswa 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?page=siswa&title=siswa" class="nav-link <?php if($title === 'siswa') echo 'active'; ?>">
                    <i class="fas fa-database"></i>
                    <p>Database</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=siswa_create&title=siswa_create" class="nav-link <?php if($title === 'siswa_create') echo 'active'; ?>">
                    <i class="fas fa-plus"></i>
                    <p>Create</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?php echo ($title === 'pegawai' || $title === 'pegawai_create' ) ? 'menu-open' : ''; ?>">
              <a href="index.php?page=pegawai&title=pegawai" class="nav-link <?php if($title === 'pegawai' || $title === 'pegawai_create' ){ echo 'active'; } ?>">
                <i class="fas fa-users"></i>
                <p>Pegawai</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?page=pegawai&title=pegawai" class="nav-link <?php if($title === 'pegawai') echo 'active'; ?>">
                    <i class="fas fa-database"></i>
                    <p>Database</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=pegawai_create&title=pegawai_create" class="nav-link <?php if($title === 'pegawai_create') echo 'active'; ?>">
                    <i class="fas fa-plus"></i>
                    <p>Create</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item <?php echo ($title === 'buku' || $title === 'buku_create') ? 'menu-open' : ''; ?>">
              <a href="index.php?page=buku&title=buku" class="nav-link <?php if($title === 'buku' || $title === 'buku_create' ){ echo 'active'; } ?>">
                <i class="fas fa-book-open"></i>
                <p>Buku</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?page=buku&title=buku" class="nav-link <?php if($title === 'buku') echo 'active'; ?>">
                    <i class="fas fa-database"></i>
                    <p>Database</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=buku_create&title=buku_create" class="nav-link <?php if($title === 'buku_create') echo 'active'; ?>">
                    <i class="fas fa-plus"></i>
                    <p>Create</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
     
    <div class="content-wrapper">
      
      <section class="content">
         <?php
        if (isset($_GET['page'])){
          if($_GET['page']=='dashboard'){
            include "view/dashboard.php";
          }
          elseif($_GET['page']=='pegawai'){
            include "view/pegawai/index.php";
          }
          elseif($_GET['page'] == 'pegawai_create') {
            include "view/pegawai/create.php";
          }
          elseif($_GET['page']=='pegawai_detail'){
            include "view/pegawai/detail.php";
          }
          elseif($_GET['page']=='pegawai_edit'){
            include "view/pegawai/edit.php";
          }
          elseif($_GET['page']=='siswa'){
            include "view/siswa/index.php";
          }
          elseif($_GET['page'] == 'siswa_create') {
            include "view/siswa/create.php";
          }
          elseif($_GET['page']=='siswa_detail'){
            include "view/siswa/detail.php";
          }
          elseif($_GET['page']=='siswa_edit'){
            include "view/siswa/edit.php";
          }
          elseif($_GET['page']=='buku'){
            include "view/buku/index.php";
          }
          elseif($_GET['page'] == 'buku_create') {
            include "view/buku/create.php";
          }
          elseif($_GET['page']=='buku_detail'){
            include "view/buku/detail.php";
          }
          elseif($_GET['page']=='buku_edit'){
            include "view/buku/edit.php";
          }

        } else {
          include "view/dashboard.php";
        }
        ?>
      </section>
    </div>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>

  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script src="dist/js/adminlte.min.js"></script>
  <script src="dist/js/darkmode.js"></script>

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>