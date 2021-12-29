<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Perpustakaan | <?php echo $this->renderSection('title');?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/themes/adminlte/plugins/fontawesome-free/css/all.min.css">

  <!-- Custom styles -->
  <?php echo $this->renderSection('styles');?>

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/themes/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php echo $this->include('layouts/partials/navbar');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $this->include('layouts/partials/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <?php echo $this->renderSection('content');?>


  <!-- Main Footer -->
  <?php echo $this->include('layouts/partials/footer');?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/themes/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/themes/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom Scripts -->
<?php echo $this->renderSection('scripts');?>

<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/themes/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
