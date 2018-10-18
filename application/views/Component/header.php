<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRINTER MANAGEMENT</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('resource/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('resource/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('resource/vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('resource/css/sb-admin.css') ?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Printer Management</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>


    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('') ?>">
            <i class="fas fa-fw fa-fingerprint"></i>
            <span>Daftar Print</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('ac/list_history/') ?><?php echo $j = 'LUNAS'; ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Daftar Lunas</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('ac/list_history/') ?><?php echo $j = 'UTANG'; ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Daftar Utang</span>
          </a>
        </li>
      </ul>