
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>CERC - Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <!-- <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard" /> -->
    <!--  Social tags      -->
    <!-- <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard"> -->
    <!-- <meta name="description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design."> -->
    <!-- Schema.org markup for Google+ -->
    <!-- <meta itemprop="name" content="Material Dashboard by Creative Tim | Free Material Bootstrap Admin"> -->
    <!-- <meta itemprop="description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design."> -->
    <!-- <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg"> -->
    <!-- Twitter Card data -->
    <!-- <meta name="twitter:card" content="summary_large_image"> -->
    <!-- <meta name="twitter:site" content="@creativetim"> -->
    <!-- <meta name="twitter:title" content="Material Dashboard by Creative Tim | Free Material Bootstrap Admin"> -->
    <!-- <meta name="twitter:description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design."> -->
    <!-- <meta name="twitter:creator" content="@creativetim"> -->
    <!-- <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg"> -->
    <!-- Open Graph data -->
    <!-- <meta property="fb:app_id" content="655968634437471"> -->
    <!-- <meta property="og:title" content="Material Dashboard by Creative Tim | Free Material Bootstrap Admin" /> -->
    <!-- <meta property="og:type" content="article" /> -->
    <!-- <meta property="og:url" content="http://demos.creative-tim.com/material-dashboard/examples/dashboard.html" /> -->
    <!-- <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg" /> -->
    <!-- <meta property="og:description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." /> -->
    <!-- <meta property="og:site_name" content="Creative Tim" /> -->
    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url('assets'); ?>/css/bootstrap_pure.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url('assets'); ?>/vendor/material/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url('assets'); ?>/vendor/material/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!--   Core JS Files   -->
    <script src="<?= base_url('assets');?>/vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets');?>/vendor/bootstrap/js/bootstrap_pure.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets');?>/vendor/material/js/material.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="<?= base_url('assets');?>/vendor/material/img/sidebar-1.jpg">
          <div class="logo">
            <a href="<?= site_url(); ?>" class="simple-text">CERC</a>
          </div>
          <div class="sidebar-wrapper">
            <ul class="nav">
              <li class="active">
                <a href="<?= site_url('u'); ?>">
                  <i class="material-icons">dashboard</i><p>Dashboard</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?= site_url('u'); ?>"> CERC </a>
                </div>
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li>
                      <a href="<?= site_url('u/logout'); ?>">
                        <i class="material-icons">exit_to_app</i>
                        <p class="hidden-lg hidden-md">Logout</p>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            
            <div class="content">
              <div class="container-fluid">
                <?php $this->load->view('user/'. $view_name); ?>
              </div>
            </div>

            <footer class="footer">
              <div class="container-fluid">
                <nav class="pull-left">
                  <ul>
                    <li><a href="<?= site_url(); ?>">Home</a></li>
                    <li><a href="<?= site_url('event'); ?>">Event</a></li>
                    <li><a href="<?= site_url('club'); ?>">Club</a></li>
                  </ul>
                </nav>
                <p class="copyright pull-right">
                  &copy;
                  <script>
                    document.write(new Date().getFullYear())
                  </script>
                  <a href="http://www.creative-tim.com">Computer Engineering Research Club</a>, made with <i class="material-icons">favorite_border</i>
                </p>
              </div>
            </footer>
        </div>
    </div>
</body>

<!--  Dynamic Elements plugin -->
<script src="<?= base_url('assets');?>/vendor/material/js/arrive.min.js"></script>
<!--  Sharrre Plugin -->
<!-- <script src="<?= base_url('assets');?>/vendor/material/js/jquery.sharrre.js"></script> -->
<!--  PerfectScrollbar Library -->
<script src="<?= base_url('assets');?>/vendor/material/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url('assets');?>/vendor/material/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSaSxv01RBLnlu5EyBHLs57s-IquPaows"></script> -->
<!-- Material Dashboard javascript methods -->
<script src="<?= base_url('assets');?>/vendor/material/js/material-dashboard.js?v=1.2.0"></script>
</html>