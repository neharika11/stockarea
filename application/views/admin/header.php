<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Stock Area Admin</title>

    <link rel="icon" type="image/png" href="">

    <!----CKEDITOR ---------------------------------------------------------------->
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>

    <!---Included in all pages---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/datatables.min.js"></script>
    <!--<script src="<?= base_url() ?>assets/admin/js/datatable-basic.js"></script>-->
    <!----Include in all page must be in header to give datatable functionality---->

    <!---Fonts links--->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/jquery-jvectormap-2.0.3.css">
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/app.css">
    <!-- END STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/datatables.min.css">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/core/vertical-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!--Wirte your own CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/style.min.css">
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i>
                     </a>
                    </li>
                    <li class="nav-item"><a class="navbar-brand" href="<?= base_url('admin/') ?>">
                     <img style="width: 100%;filter: brightness(0) invert(1);" class="brand-logo" alt="logo" src="<?=base_url()?>assets/admin/images/logo.svg">
                     </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                            <i class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item nav-search">
                            <a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Your Search...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="avatar avatar-online"><img src="<?=base_url()?>assets/admin/images/avatar-s-1.png" alt="avatar"><i></i></span>
                                <span class="user-name"><?php echo($this->session->userdata('adminname'));?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!--<a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>-->
                                <!--<div class="dropdown-divider"></div>-->
                                <a class="dropdown-item" href="<?= base_url('admin/logout') ?>"><i class="ft-power"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                </li>

                <li class=" nav-item <?php echo ($this->uri->segment(2) == '' || $this->uri->segment(2) == 'admin_details') ? 'active' : ''; ?>">
                    <a href="<?= base_url('admin/admin_details') ?>"><i class="fa fa-user"></i>
                  <span class="menu-title" data-i18n="">Admin Details</span>
                  </a>
                </li>

                <li class=" nav-item">
                    <a href="javascript:void(0)">
                        <i class="ft-home"></i><span class="menu-title" data-i18n=""> Warehouse</span>
                    </a>
                    <ul class="menu-content">

                        <li class="">
                            <a class="menu-item" href="<?= base_url('admin/city_listing') ?>">Cities</a>
                        </li>
                        
                        <li class="">
                            <a class="menu-item" href="<?= base_url('admin/warehouse_listing') ?>">Warehouse Listing</a>
                        </li>
                        
                        <li class="">
                            <a class="menu-item" href="<?= base_url('admin/warehouse_detailing') ?>">Warehouse Detailing</a>
                        </li>
                        
                    </ul>
                </li>

            </ul>
        </div>
    </div>