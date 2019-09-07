<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock Area | Home page</title>
    <link href="<?php echo base_url()?>assets/user/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/user/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <script src="https://kit.fontawesome.com/3eac6449b7.js"></script>
 
 

</head>

<body>
    <header class="top-header px-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg px-0">
                        <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/user/images/logo.svg"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars mm"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between nav-header1" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?=base_url()?>user/warehouse_provider">Warehouse provider</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url()?>user/warehouse_network">Warehouse network</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Getting started</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base_url()?>user/blog">Blog</a>
                                </li>

                            </ul>
                            <div class="">

                                <a class="nav-link" href="javascript:void(0)"><img src="<?php echo base_url()?>assets/user/images/lock1.png" alt="lock"> Warehouse manager</a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>