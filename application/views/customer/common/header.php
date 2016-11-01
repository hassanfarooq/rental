<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="<?php echo $this->description; ?>">
        <meta name="keywords" content="<?php echo $this->keywords; ?>">

        <title><?php echo $this->title; ?></title>

        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <link rel="stylesheet" href="<?php echo base_url('assets/customer/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/customer/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/customer/css/AdminLTE.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/customer/css/skins/_all-skins.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/customer/plugins/datepicker/datepicker3.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/customer/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/customer/css/mystyle.css'); ?>">
        
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <div class="col-md-12">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <a class="btn btn-info" href="<?php echo site_url('Customer/Login/logout'); ?>">Sign out</a>
                </div>
            </div>
        </nav>
    </header>