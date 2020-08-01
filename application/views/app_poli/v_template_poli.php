<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Klinik Az-Zainiyah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/images/icon/logoklnk.png">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/metisMenu.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slicknav.min.css">
        <!-- amchart css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/export.css" type="text/css" media="all" />

        <!-- Start datatable css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.jqueryui.min.css">

        <!-- others css -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/typography.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/default-css.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap4.css">
        <!-- modernizr css -->
        <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
        
        <script src="<?php echo base_url() ?>assets/js/jquery_auto_refresh.js"></script>
        

                    <!-- $.ajax({
                        type: "POST",
                        url : "<?php //echo base_url(); ?>index.php/sinkron/siswa",
                        data: id_kelas,
                        success: function(msg){
                            $('#siswa').html(msg);
                        }
                    }); -->


        <script type="text/javascript">
            function ambilKomentar() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url()?>C_app_poli/cek_notif",
                    dataType: 'json',
                    success: function (response) {
                        $("#jumlah").text("" + response + "");
                        timer = setTimeout("ambilKomentar()", 3000);
                    }
                });
            }
            $(document).ready(function () {
                ambilKomentar();
            });
        </script>
        
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
        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo base_url() ?>assets/images/icon/logoklnk.png" alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">
                                <li>
                                    <a href="<?php echo base_url().'C_app_poli'; ?>"><i class="fa fa-home"></i>
                                        <span>Beranda</span>
                                        <!--<button type="button" class="btn btn-rounded btn-primary mb-3">-->                                            
                                        <!--</button>-->
                                    </a>
                                </li>       
                                <li>
                                    <a href="<?php echo base_url().'C_pasien2'; ?>"><i class="fa fa-users"></i>
                                        <span>Data Pasien</span>
                                        <!--<button type="button" class="btn btn-rounded btn-primary mb-3">-->                                            
                                        <!--</button>-->
                                    </a>
                                </li>                           
                                <li>
                                    <a href="<?php echo base_url().'C_dokter'; ?>"><i class="fa fa-user-md"></i>
                                        <span>Data Dokter</span>
                                        <!--<button type="button" class="btn btn-rounded btn-primary mb-3">-->                                            
                                        <!--</button>-->
                                    </a>
                                </li>                                                                
                                <li>
                                    <a href="<?php echo base_url() . 'C_app_poli/kunjungan'; ?>"><i class="ti-dashboard"></i>
                                        <span>Kunjungan Pasien</span>
                                        <span class="badge badge-danger" id="jumlah"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . 'C_app_poli/v_rekammedis'; ?>"><i class="fa fa-video-camera"></i>
                                        <span>Rekam Medis</span>
                                        <!--<button type="button" class="btn btn-rounded btn-primary mb-3">-->                                            
                                        <!--</button>-->
                                    </a>
                                    <li>
                                    <a href="<?php echo base_url().'C_laporan_rm/laporan_rm'; ?>"><i class="fa fa-file-archive-o"></i>
                                        <span>Laporan Rekam Medis</span>
                                        <!--<button type="button" class="btn btn-rounded btn-primary mb-3">-->                                            
                                        <!--</button>-->
                                    </a>
                                </li>  
                                <li><a href="<?php echo base_url() . 'C_app_poli/logout'; ?>"><i class="fa fa-power-off"></i> <span>Log Out</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class="main-content">
                <!-- header area start -->
                <div class="header-area">
                    <div class="row align-items-center">
                        <!-- nav and search button -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                                <!-- <div class="search-box pull-left">
                                    <form action="<?=  base_url().'C_daftar/cari'?>" method="post">
                                        <input type="text" name="ed_cari" placeholder="Search..." required="">
                                        <i class="ti-search"></i>
                                    </form>
                                </div> -->
                            </div>
                        <!-- profile info & task notification -->
                        <!-- <div class="col-md-6 col-sm-4 clearfix">
                            <ul class="notification-area pull-right">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                                <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>1</span>
                                </i>                                
                            </li>
                            </ul>
                        </div> -->
                    </div>
                </div>

                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left"><?= $judul1 ?></h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><span><?= $judul2 ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 clearfix">
                            <div class="user-profile pull-right">
                                <!-- <img class="avatar user-thumb" src="<?php echo base_url() ?>assets/images/author/avatar.png" alt="avatar"> -->
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('nama') ?> <i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <!--<a class="dropdown-item" href="#">Pengaturan</a>-->
                                    <a class="dropdown-item" href="<?= base_url() . 'C_app_poli/logout' ?>">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page title area end -->

                <?php $this->load->view($contents) ?>

            </div>
            <!-- main content area end -->
            
            <!-- footer area start-->
            <footer>
                <div class="footer-area">
                    <p>© Copyright 2020. All right reserved. Template by <a href="#">KLINIK AZ-ZAINIYAH PAITON PROBOLINGGO</a>.</p>
                </div>
            </footer>
            <!-- footer area end-->
        </div>
        <!-- page container area end -->
        <!-- offset area start -->
        <div class="offset-area">
            <div class="offset-close"><i class="ti-close"></i></div>
            <ul class="nav offset-menu-tab">
                <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
                <li><a data-toggle="tab" href="#settings">Settings</a></li>
            </ul>
            <div class="offset-content tab-content">
                <div id="activity" class="tab-pane fade in show active">
                    <div class="recent-activity">
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Added</h4>
                                <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>You missed you Password!</h4>
                                <span class="time"><i class="ti-time"></i>09:20 Am</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Member waiting for you Attention</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>You Added Kaji Patha few minutes ago</h4>
                                <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Ratul Hamba sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Hello sir , where are you, i am egerly waiting for you.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="settings" class="tab-pane fade">
                    <div class="offset-settings">
                        <h4>General Settings</h4>
                        <div class="settings-list">
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Notifications</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch1" />
                                        <label for="switch1">Toggle</label>
                                    </div>
                                </div>
                                <p>Keep it 'On' When you want to get all the notification.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show recent activity</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch2" />
                                        <label for="switch2">Toggle</label>
                                    </div>
                                </div>
                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show your emails</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch3" />
                                        <label for="switch3">Toggle</label>
                                    </div>
                                </div>
                                <p>Show email so that easily find you.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Show Task statistics</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch4" />
                                        <label for="switch4">Toggle</label>
                                    </div>
                                </div>
                                <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                            </div>
                            <div class="s-settings">
                                <div class="s-sw-title">
                                    <h5>Notifications</h5>
                                    <div class="s-swtich">
                                        <input type="checkbox" id="switch5" />
                                        <label for="switch5">Toggle</label>
                                    </div>
                                </div>
                                <p>Use checkboxes when looking for yes or no answers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offset area end -->
        <!-- jquery latest version -->
        <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
        <!-- bootstrap 4 js -->
        <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.slicknav.min.js"></script>

        <!-- Start datatable js -->
        <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/responsive.bootstrap.min.js"></script>

        <!-- start chart js -->
        <script src="<?php echo base_url() ?>assets/js/Chart.min.js"></script>
        <!-- start highcharts js -->
        <script src="<?php echo base_url() ?>assets/js/highcharts.js"></script>
        <script src="<?php echo base_url() ?>assets/js/exporting.js"></script>
        <script src="<?php echo base_url() ?>assets/js/export-data.js"></script>
        <!-- start amcharts --> 
        <script src="<?php echo base_url() ?>assets/js/amcharts.js"></script>
        <script src="<?php echo base_url() ?>assets/js/ammap.js"></script>
        <script src="<?php echo base_url() ?>assets/js/worldLow.js"></script>
        <script src="<?php echo base_url() ?>assets/js/serial.js"></script>
        <script src="<?php echo base_url() ?>assets/js/export.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/light.js"></script>
        <!-- all line chart activation -->
        <script src="<?php echo base_url() ?>assets/js/line-chart.js"></script>
        <!-- all pie chart -->
        <script src="<?php echo base_url() ?>assets/js/pie-chart.js"></script>
        <!-- all bar chart -->
        <script src="<?php echo base_url() ?>assets/js/bar-chart.js"></script>
        <!-- all map chart -->
        <script src="<?php echo base_url() ?>assets/js/maps.js"></script>
        <!-- others plugins -->
        <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>

        <script src="<?php echo base_url() ?>assets/js/datatables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap4.js"></script>
    </body>
<script>
    $(document).ready(function() {
        $('#tb_rm').DataTable();
    });
</script>

</html>
       