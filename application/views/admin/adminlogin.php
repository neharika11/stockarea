<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Stockarea admin</title>
    <!---Fonts links--->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/vendors.css">

    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/app.css">

    <!--Wirte your own CSS-->

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/style.css">

    <!-- END Custom CSS-->

</head>

<body class="vertical-layout vertical-menu 1-column   menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div class="p-1"><img src="<?=base_url()?>assets/admin/images/logo.svg" alt="branding logo" style="width:100%"></div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login with Stock Area Admin</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="text-center" style="color:red;text-align:center">
                                            <?php  echo $this->session->flashdata("error") ?>
                                        </p>

                                        <form method="POST" action="<?= base_url('Adminlogin/admin_login_validation') ?>" class="form-horizontal form-simple">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="text" name="admin_email" class="form-control form-control-lg" id="admin_name" placeholder="Your Username" required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" name="admin_password" class="form-control form-control-lg" id="admin_password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>
                                            <button type="submit" name="adminlogin" class="btn btn-primary btn-lg btn-block" style="cursor: pointer;"><i class="ft-unlock"></i> Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</body>

</html>