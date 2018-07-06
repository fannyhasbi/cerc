
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Club <?= $club->nama; ?> | CERC</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url('assets'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets'); ?>/css/freelancer.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/popper/popper.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?= site_url(); ?>">CERC</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url(); ?>">Club</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url(); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url('project'); ?>">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url('event'); ?>">Event</a>
          </li>
          <?php if($this->session->userdata('login')){ ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url('u'); ?>">Dashboard</a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Profile Section -->
  <section style="padding-top: 120px;" class="success">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-fluid">
        </div>
        <div class="col-md-6" style="padding-top: 5%">
          <h4>Club <?= $club->nama; ?></h4>
          <p style="text-align: justify; font-size: inherit; line-height: 1.5"><?= $club->ket; ?>.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="thumb">
    <div class="container">
      <h3 class="text-center">Our Activity</h3>
      <hr class="small">
      <div class="row" style="margin-bottom: 20px">
        <div class="col-xs-6 col-sm-3">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-thumbnail">
        </div>
        <div class="col-xs-6 col-sm-3">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-thumbnail">
        </div>
        <div class="col-xs-6 col-sm-3">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-thumbnail">
        </div>
        <div class="col-xs-6 col-sm-3">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-thumbnail">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-3">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-thumbnail">
        </div>
        <div class="col-xs-6 col-sm-3">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-thumbnail">
        </div>
        <div class="col-xs-6 col-sm-3">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-thumbnail">
        </div>
        <div class="col-xs-6 col-sm-3">
          <img src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" class="img-thumbnail">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="footer-above">
      <div class="container">
        <div class="row">
          <div class="footer-col col-md-4">
            <h3>Location</h3>
            <p>Universitas Diponegoro</p>
          </div>
          <div class="footer-col col-md-4">
            <h3>Get Closer</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-col col-md-4">
            <h3>About CERC</h3>
            Computer Engineering Research adalah sebuah Kelompok Studi Departemen di S1 Sistem Komputer Universitas Diponegoro.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            Copyright &copy; Computer Engineering Research Club 2018
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-top d-lg-none">
    <a class="btn btn-primary js-scroll-trigger" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?= base_url('assets'); ?>/js/jqBootstrapValidation.js"></script>
  <script src="<?= base_url('assets'); ?>/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= base_url('assets'); ?>/js/freelancer.min.js"></script>
</body>

</html>
