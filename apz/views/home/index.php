<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CERC - Computer Engineering Research Club</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets'); ?>/css/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">CERC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#event">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#project">Project</a>
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

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="<?= base_url('assets'); ?>/img/cerc.jpg" width="256" height="256" alt="Computer Engineering Research Club">
        <div class="intro-text">
          <span class="name">Computer Engineering Research Club</span>
          <hr class="small">
          <span class="skills">Kembangkan Potensi, Raihlah Mimpi</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Club</h2>
        <hr class="dark">
        <div class="row">
          <div class="col-sm-6 portfolio-item text-center">
            <a class="portfolio-link" href="<?= site_url('embedded'); ?>" style="margin-bottom: 10px">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?= base_url('assets'); ?>/img/portfolio/submarine.png" alt="">
            </a>
            <h4>Embedded</h4>
          </div>
          <div class="col-sm-6 portfolio-item text-center">
            <a class="portfolio-link" href="<?= site_url('software'); ?>" style="margin-bottom: 10px">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?= base_url('assets'); ?>/img/portfolio/game.png" alt="">
            </a>
            <h4>Software</h4>
          </div>
          <div class="col-sm-6 portfolio-item text-center">
            <a class="portfolio-link" href="<?= site_url('multimedia'); ?>" style="margin-bottom: 10px">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?= base_url('assets'); ?>/img/portfolio/gene.png" alt="">
            </a>
            <h4>Multimedia</h4>
          </div>
          <div class="col-sm-6 portfolio-item text-center">
            <a class="portfolio-link" href="<?= site_url('jaringan');?>" style="margin-bottom: 10px">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?= base_url('assets'); ?>/img/portfolio/rocket.png" alt="">
            </a>
            <h4>Jaringan</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">About</h2>
        <hr class="small">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p>Computer Engineering Research adalah sebuah Kelompok Studi Departemen di S1 Sistem Komputer Universitas Diponegoro. Blblablablablablablal bls alsbalbsal sbalbsal sbalbslabsl absalbslabsla bs</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p>Blabalb balbalba blabalbala ablalaba balabls dlbaldbadb abdlkabs pengertian belakangan hehehe dlabsdl asbdl asbdlas dlsakbdlasbdlas dlasb dlasb dla dlkasbdl sabld asd</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Event Section -->
    <section id="event">
      <div class="container">
        <h2 class="text-center">Event</h2>
        <hr class="dark">
        <div class="row">
          <?php foreach($events as $event): ?>
          <div class="col-lg-4 event-item">
            <img class="img-fluid" src="<?= $event->img; ?>" alt="">
            <h5><?= $event->nama ?></h5>
            
            <div class="event-info">
              <p class="event-date"><i class="fa fa-calendar fa-fw"></i> <?= $event->tgl ?></p>
              <p class="event-place"><i class="fa fa-map-marker fa-fw"></i> <?= $event->tempat ?></p>
            </div>

            <div class="col-lg-8 mx-auto text-center event-btn">
              <a href="#" class="btn btn-lg">Lihat Detail</a>
            </div>
          </div>
          <?php endforeach; ?>

          <div class="col-lg-8 mx-auto text-center">
            <a href="<?= site_url('event');?>" class="btn btn-lg btn-block btn-primary">Lihat Semua</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Project Section -->
    <section id="project" class="success">
      <div class="container">
        <h2 class="text-center">Project</h2>
        <hr class="dark">
        <div class="row">
          <?php foreach($projects as $project): ?>
          <div class="col-lg-4 project-item">
            <img class="img-fluid" src="<?= $project->foto; ?>" alt="">
            <h5><?= $project->nama ?></h5>

            <div class="project-info">
              <p class="project-date"><i class="fa fa-calendar fa-fw"></i> <?= $project->selesai ?></p>
              <p class="project-place"><i class="fa fa-user fa-fw"></i> <?= $project->pemohon ?></p>
            </div>
          </div>
          <?php endforeach; ?>

          <div class="col-lg-8 mx-auto text-center">
            <a href="<?= site_url('event');?>" class="btn btn-lg btn-block btn-primary">Lihat Semua</a>
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
              Copyright &copy; Computer Engineering Research Club 2017
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

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="small">
                  <img class="img-fluid img-centered" src="<?= base_url('assets'); ?>/img/portfolio/cabin.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="small">
                  <img class="img-fluid img-centered" src="<?= base_url('assets'); ?>/img/portfolio/cake.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="small">
                  <img class="img-fluid img-centered" src="<?= base_url('assets'); ?>/img/portfolio/circus.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Project Title</h2>
                  <hr class="small">
                  <img class="img-fluid img-centered" src="<?= base_url('assets'); ?>/img/portfolio/game.png" alt="">
                  <p>Use this area of the page to describe your project. The icon above is part of a free icon set by
                    <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                  <ul class="list-inline item-details">
                    <li>Client:
                      <strong>
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                      </strong>
                    </li>
                    <li>Date:
                      <strong>
                        <a href="http://startbootstrap.com">April 2014</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/popper/popper.min.js"></script>
    <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url('assets'); ?>/js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url('assets'); ?>/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= base_url('assets'); ?>/js/freelancer.min.js"></script>

  </body>

</html>
