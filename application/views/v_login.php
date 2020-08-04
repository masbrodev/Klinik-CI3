<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Klinik Az_zainiyah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/images/icon/logom.png">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/metisMenu.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slicknav.min.css">
        <!-- amchart css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/export.css" type="text/css" media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/typography.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/default-css.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
        <!-- modernizr css -->
        <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- login area start -->
        <div class="login-area">
            <div class="container">
                <div class="login-box ptb--100">

                    <form action="<?php echo base_url() . 'C_login/login'; ?>" method="post">                                                                        
                        <div class="login-form-head">
                        <div class="logo">
                        <a href="index.html"><img src="<?php echo base_url() ?>assets\images\icon\logom.png" alt="logo"></a>
                    </div>
                            <h4>Login Petugas</h4>
                            <p>Silahkan Login Untuk Mengakses Admin</p>
                        </div>                        
                        <div class="login-form-body">
                            <?php
//                        $notif = $this->session->flashdata('k');
                            if (!empty($notif)) {
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $notif ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span class="fa fa-times"></span>
                                    </button>
                                </div>
                                <?php }
                            ?>                            
                            <!-- <form method="POST" action="<?php echo site_url('C_login/login'); ?>"> 
									<input type="hidden" name="redirect" value="<?php echo $redirect; ?>">
									<div class="form-group"> -->
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" id="exampleInputEmail1" required="">
                                <i class="ti-user"></i>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" id="exampleInputPassword1" required="">
                                <i class="ti-lock"></i>
                            </div>
                            <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                    
                                </div>
                                <div class="col-6 text-right">
                                    
                                </div>
                            </div>
                            <div class="submit-btn-area">
                                <button id="form_submit" type="log In">Log In <i class="ti-arrow-right"></i></button>
                            </div>
                            <!-- </form> -->
<!--                            <div class="form-footer text-center mt-5">
                                <p class="text-muted">Don't have an account? <a href="register.html">Sign up</a></p>
                            </div>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- login area end -->

        <!-- jquery latest version -->
        <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
        <!-- bootstrap 4 js -->
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.slicknav.min.js"></script>

        <!-- others plugins -->
        <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
    </body>

</html>