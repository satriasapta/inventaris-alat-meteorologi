<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ALMET | ALAT METEOROLOGI</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image" href="/templates2/img/bmkg.png">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/bootstrap.min.css">
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/owl.carousel.css">
  <link rel="stylesheet" href="/templates2/css/owl.theme.css">
  <link rel="stylesheet" href="/templates2/css/owl.transitions.css">
  <!-- meanmenu CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/meanmenu/meanmenu.min.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/normalize.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- summernote CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/summernote/summernote.css">
  <!-- datapicker CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/datapicker/datepicker3.css">
  <!-- jvectormap CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/jvectormap/jquery-jvectormap-2.0.3.css">
  <!-- notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/notika-custom-icon.css">
  <!-- bootstrap select CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/bootstrap-select/bootstrap-select.css">
  <!-- dropzone CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/dropzone/dropzone.css">
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/wave/waves.min.css">
  <link rel="stylesheet" href="/templates2/css/wave/button.css">
  <!-- Data Table JS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/jquery.dataTables.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/main.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="/templates2/css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="/templates2/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <!-- Start Header Top Area -->
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="logo-area">
            <a href="<?= base_url('admin'); ?>"><img src="/templates2/img/logo/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="header-top-menu">
            <ul class="nav navbar-nav navbar-right" style="margin-top:23px; position:relative;">
              <div class="material-design-btn">
                <li> 
                  <a role="button" href="<?= base_url('auth/logout'); ?>" class="btn notika-btn-deeporange btn-reco-mg btn-button-mg waves-effect">Logout</a>
                </li>
              </div>
            </ul>
            
            <ul class="nav navbar-nav navbar-right" style="margin-top:30px; right: 10px; position:relative;">
              <li>
                Selamat Datang |
              </li>
              <li style="text-transform: uppercase;">| <?= userLogin()['username']; ?> ||</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Top Area -->
  <!-- Mobile Menu start -->
  <div class="mobile-menu-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="mobile-menu">
            <nav id="dropdown">
              <ul class="mobile-menu-nav">
                <li><a  href="<?= base_url('admin/'); ?>">Dashboard</a>
                </li>
                <li><a  href="<?= base_url('admin/daftaralat'); ?>">Alat</a>
                </li>
                <li><a data-toggle="collapse" data-target="#logbook" href="#">Log Book</a>
                  <ul id="logbook" class="collapse dropdown-header-top">
                    <li><a href="<?= base_url('admin/lbharian'); ?>">Daftar Log Book</a></li>
                    <li><a href="<?= base_url('admin/inputlogbook'); ?>">Isi Log Book</a></li>
                    <li><a href="<?= base_url('admin/unduhlb'); ?>">Unduh Log Book</a></li>
                    
                  </ul>
                </li>
                <li><a  href="<?= base_url('admin/profil'); ?>">Profil</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu end -->
  <!-- Main Menu area start-->
  <div class="main-menu-area mg-tb-40">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
            <li><a data-toggle="tab" href="#Dashboard"><i class="notika-icon notika-house"></i> Dashboard</a>
            </li>
            <li><a data-toggle="tab" href="#Alat"><i class="notika-icon notika-menus"></i> Alat</a>
            </li>
            <li><a data-toggle="tab" href="#Logbook"><i class="notika-icon notika-edit"></i> Log Book</a>
            </li>
            <li><a href="<?= base_url('admin/profil'); ?>"><i class="notika-icon notika-support"></i> Profil BMKG</a>
            </li>
          </ul>

          <div class="tab-content custom-menu-content">
            <div id="Dashboard" class="tab-pane in notika-tab-menu-bg animated flipInX">
              <ul class="notika-main-menu-dropdown">
                <li><a href="<?= base_url('admin/'); ?>">Dashboard</a>
                </li>
              </ul>
            </div>

            <div id="Alat" class="tab-pane notika-tab-menu-bg animated flipInX">
              <ul class="notika-main-menu-dropdown">
                <li><a href="<?= base_url('admin/daftaralat'); ?>">Daftar Alat</a>
                </li>
                <li><a href="<?= base_url('admin/tambahalat'); ?>">Tambah Alat</a>
                </li>
              </ul>
            </div>

            <div id="Logbook" class="tab-pane notika-tab-menu-bg animated flipInX">
              <ul class="notika-main-menu-dropdown">
                <li><a href="<?= base_url('admin/lbharian'); ?>">Data Log Book</a>
                </li>
                <li><a href="<?= base_url('admin/inputlogbook'); ?>">Isi Log Book</a>
                </li>
                <li><a href="<?= base_url('admin/unduhlb'); ?>">Unduh Log Book</a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Menu area End-->

  <section class="content">
    <?= $this->renderSection('content'); ?>

  </section>
  <!-- End Realtime sts area-->
  <!-- Start Footer area-->
  <div class="footer-copyright-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="footer-copy-right">
            <p>Copyright © 2023
              . All rights reserved. Developed by <a href="<?= base_url('admin/syz'); ?>">SYZ</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer area-->
  <!-- jquery
		============================================ -->
  <script src="/templates2/js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="/templates2/js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="/templates2/js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="/templates2/js/jquery-price-slider.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="/templates2/js/owl.carousel.min.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="/templates2/js/jquery.scrollUp.min.js"></script>
  <!-- rangle-slider JS
		============================================ -->
  <script src="/templates2/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
  <script src="/templates2/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
  <script src="/templates2/js/rangle-slider/rangle-active.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="/templates2/js/meanmenu/jquery.meanmenu.js"></script>
  <!-- datapicker JS
		============================================ -->
  <script src="/templates2/js/datapicker/bootstrap-datepicker.js"></script>
  <script src="/templates2/js/datapicker/datepicker-active.js"></script>
  <!-- bootstrap select JS
		============================================ -->
  <script src="/templates2/js/bootstrap-select/bootstrap-select.js"></script>
  <!-- counterup JS
		============================================ -->
  <script src="/templates2/js/counterup/jquery.counterup.min.js"></script>
  <script src="/templates2/js/counterup/waypoints.min.js"></script>
  <script src="/templates2/js/counterup/counterup-active.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="/templates2/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- Data Table JS
		============================================ -->
  <script src="/templates2/js/data-table/jquery.dataTables.min.js"></script>
  <script src="/templates2/js/data-table/data-table-act.js"></script>
  <!-- Input Mask JS
		============================================ -->
  <script src="/templates2/js/jasny-bootstrap.min.js"></script>
  <!-- jvectormap JS
		============================================ -->
  <script src="/templates2/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="/templates2/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="/templates2/js/jvectormap/jvectormap-active.js"></script>
  <!--  color-picker JS
		============================================ -->
  <script src="/templates2/js/color-picker/farbtastic.min.js"></script>
  <script src="/templates2/js/color-picker/color-picker.js"></script>
  <!--  notification JS
		============================================ -->
  <script src="/templates2/js/notification/bootstrap-growl.min.js"></script>
  <script src="/templates2/js/notification/notification-active.js"></script>
  <!--  summernote JS
		============================================ -->
  <script src="/templates2/js/summernote/summernote-updated.min.js"></script>
  <script src="/templates2/js/summernote/summernote-active.js"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="/templates2/js/sparkline/jquery.sparkline.min.js"></script>
  <script src="/templates2/js/sparkline/sparkline-active.js"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="/templates2/js/flot/jquery.flot.js"></script>
  <script src="/templates2/js/flot/jquery.flot.resize.js"></script>
  <script src="/templates2/js/flot/curvedLines.js"></script>
  <script src="/templates2/js/flot/flot-active.js"></script>
  <!-- flot JS
		============================================ -->
  <script src="/templates2/js/flot/jquery.flot.js"></script>
  <script src="/templates2/js/flot/jquery.flot.resize.js"></script>
  <script src="/templates2/js/flot/flot-active.js"></script>
  <!-- knob JS
		============================================ -->
  <script src="/templates2/js/knob/jquery.knob.js"></script>
  <script src="/templates2/js/knob/jquery.appear.js"></script>
  <script src="/templates2/js/knob/knob-active.js"></script>
  <!--  chosen JS
		============================================ -->
  <script src="/templates2/js/chosen/chosen.jquery.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="/templates2/js/icheck/icheck.min.js"></script>
  <script src="/templates2/js/icheck/icheck-active.js"></script>
  <!-- dropzone JS
		============================================ -->
  <script src="/templates2/js/dropzone/dropzone.js"></script>
  <!--  wave JS
		============================================ -->
  <script src="/templates2/js/wave/waves.min.js"></script>
  <script src="/templates2/js/wave/wave-active.js"></script>
  <!--  todo JS
		============================================ -->
  <script src="/templates2/js/todo/jquery.todo.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="/templates2/js/plugins.js"></script>
  <!--  Chat JS
		============================================ -->
  <script src="/templates2/js/chat/moment.min.js"></script>
  <script src="/templates2/js/chat/jquery.chat.js"></script>
  <!-- main JS
		============================================ -->
  <script src="/templates2/js/main.js"></script>
  <!--  wizard JS
		============================================ -->
    <script src="/templates2/js/wizard/jquery.bootstrap.wizard.min.js"></script>
  <script src="/templates2/js/wizard/wizard-active.js"></script>

</body>

</html>