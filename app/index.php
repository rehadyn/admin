<!DOCTYPE html>
<html lang="en">
<?php 
session_start(); 
if($_SESSION['nama']==""){
  header("location:../index.php");
}
?>
<?php include('header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <?php include('preloader.php'); ?>
    <!-- /.preloader -->

    <!-- Navbar -->
    <?php include('navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include('sidebar.php'); ?>
    <!-- /.main sidebar container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include('content_header.php'); ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php include('dashboard.php'); ?>

      <!-- Logic -->
      <?php
      if ($_GET['page'] == 'dashboard') {
        include('dashboard.php');
      }
      else if ($_GET['page'] == 'adduser') {
        include('user/adduser.php');
      }
      else if ($_GET['page'] == 'datamhs') {
        include ('datamhs/datamhs.php');
      }
      else if ($_GET['page'] == 'kanbaboard') {
        include ('kanba.php');
      }
      ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php include('footer.php'); ?>
  </div>
  <!-- ./wrapper -->
</body>

</html>