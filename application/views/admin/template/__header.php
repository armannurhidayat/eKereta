<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php date_default_timezone_set('Asia/Jakarta') ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets') ?>/images/favicon.png">
  <title><?= $title ?> | e-Tiket</title>
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/libs/select2/dist/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/extra-libs/multicheck/multicheck.css">
  <link href="<?= base_url('assets') ?>/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/dist/css/style.min.css" rel="stylesheet">
</head>

<body>

  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>

  <div id="main-wrapper">

    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- Logo -->
        <div class="navbar-header" data-logobg="skin5">
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          <a class="navbar-brand" href="<?= base_url() ?>">
            <b class="logo-icon p-l-10">
              <img src="<?= base_url('assets') ?>/images/logo-icon.png" alt="homepage" class="light-logo" />
            </b>
            <span class="logo-text">
             <img src="<?= base_url('assets') ?>/images/logo-text.png" alt="homepage" class="light-logo" />
            </span>
          </a>
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- /Logo -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
          </ul>
          <ul class="navbar-nav float-right">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets') ?>/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
              <div class="dropdown-menu dropdown-menu-right user-dd animated">
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    <!-- Menu -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
      <div class="scroll-sidebar">    
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="p-t-30">
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url() ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
            
            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('admin/jadwal') ?>" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Jadwal</span></a></li>
            
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-archive"></i><span class="hide-menu">Data Master</span></a>
              <ul aria-expanded="false" class="collapse  first-level">
                <li class="sidebar-item"><a href="<?= base_url('admin/stasiun') ?>" class="sidebar-link"><i class="mdi mdi-asterisk"></i><span class="hide-menu"> Kota Stasiun </span></a></li>
                <li class="sidebar-item"><a href="<?= base_url('admin/kereta') ?>" class="sidebar-link"><i class="mdi mdi-asterisk"></i><span class="hide-menu"> Kereta Api </span></a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- /Menu -->

    <div class="page-wrapper">
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title"><?= $title ?></h4>
            <div class="ml-auto text-right">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>