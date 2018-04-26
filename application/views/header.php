<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Mustahiq</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" />

	<!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /dist/css/skins/_all-skins.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  

  <!-- DataTables -->
  <link rel="stylesheet" href=" <?php echo base_url(). "assets" ?> /bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href=" <?php echo base_url(). "assets" ?> /fonts/fonts.googleapis.comcssfamily=Source+Sans+Pro300,400,600,700,300italic,400italic,600italic.css">
  
</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href=" <?php echo base_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

    <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?= base_url(). 'upload/kecamatan' ?>">
            <i class="fa fa-dashboard"></i> <span>Kecamatan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="header">MAIN NAVIGATION</li>
        
        <li>
          <a href="<?= base_url(). 'upload/bogortengah' ?>"">
            <i class="fa fa-pie-chart"></i> <span>Bogor Tengah</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?= base_url(). 'upload/bogorutara' ?>"">
            <i class="fa fa-pie-chart"></i> <span>Bogor Utara</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?= base_url(). 'upload/bogortimur' ?>"">
            <i class="fa fa-pie-chart"></i> <span>Bogor Timur</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?= base_url(). 'upload/bogorselatan' ?>"">
            <i class="fa fa-pie-chart"></i> <span>Bogor Selatan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?= base_url(). 'upload/bogorbarat' ?>"">
            <i class="fa fa-pie-chart"></i> <span>Bogor Barat</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="<?= base_url(). 'upload/tanahsareal' ?>"">
            <i class="fa fa-pie-chart"></i> <span>Bogor Sareal</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
