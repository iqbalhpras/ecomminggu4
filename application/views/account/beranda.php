<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Ecom</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="http://localhost/ecom/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/ecom/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/ecom/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
        .login-form {
            width: 640px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="login-form"> 
    <form class="text-center">       
        <h1 class="text-center">Selamat Datang di Situs kami.</h1>
        <button type="button" class="btn btn-warning"><?php echo anchor('login','Masuk'); ?></button>
        <button type="button" class="btn btn-warning"><?php echo anchor('register','Daftar'); ?></button>
    </form>                                        
</div>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="http://localhost/ecom/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="http://localhost/ecom/lugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/ecom/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/ecom/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="http://localhost/ecom/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="http://localhost/ecom/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="http://localhost/ecom/plugins/raphael/raphael.min.js"></script>
<script src="http://localhost/ecom/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="http://localhost/ecom/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/ecom/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="http://localhost/ecom/dist/js/pages/dashboard2.js"></script>
</body>
</html>
