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
              <a class="nav-link js-scroll-trigger" href="#club">Club</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#event">Event</a>
            </li>
            <?php if($this->session->userdata('login') || $this->session->userdata('login_club')){ ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= $this->session->userdata('login') ? site_url('u') : site_url('c'); ?>">Dashboard</a>
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

    <!-- Club Section -->
    <section id="club">
      <div class="container">
        <h2 class="text-center">Club</h2>
        <hr class="dark">
        <div class="row">
          <?php foreach($club as $item): ?>
            <div class="col-sm-3 text-center">
              <img class="img-fluid" src="<?= $item->foto == NULL ? base_url('assets/img/cerc.jpg') : base_url('uploads/club/photo/'.$item->foto); ?>" alt="CERC Undip <?= $item->nama; ?>">
              <h4><a href="<?= site_url($item->slug); ?>"><?= $item->nama; ?></a></h4>
            </div>
          <?php endforeach; ?>
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

    <!-- Project Section -->
    <section id="project">
      <div class="container">
        <h2 class="text-center">Project</h2>
        <hr class="dark">
        <div class="row">
          <?php foreach($projects as $project): ?>
          <div class="col-sm-4 project-item">
            <a class="project-link" href="#projectModal-<?= $project->id; ?>" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <?= $project->nama; ?>
                </div>
              </div>
              <img class="img-fluid" src="<?= $project->foto; ?>" alt="">
            </a>
          </div>
          <?php endforeach; ?>
        </div>

        <div class="col-lg-8 mx-auto text-center">
          <a href="<?= site_url('project');?>" class="btn btn-lg btn-block btn-primary">Lihat Semua</a>
        </div>
      </div>
    </section>

    <!-- Propose Section -->
    <section id="propose" class="success">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3 class="propose-title">Ajukan Proyek</h3>
            <p class="propose-text">Ajukan sebuah proyek aplikasi anda ke kami.</p>
          </div>
          <div class="col-md-4 propose-btn-container">
            <a class="btn btn-primary btn-lg" href="<?= site_url('pengajuan'); ?>">AJUKAN SEKARANG</a>
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
              <p class="event-date"><i class="fa fa-calendar fa-fw"></i> <?= tanggal_definer($event->tgl) ?></p>
              <p class="event-place"><i class="fa fa-map-marker fa-fw"></i> <?= $event->tempat ?></p>
            </div>

            <div class="col-lg-8 mx-auto text-center event-btn">
              <a href="<?= site_url('event/'.$event->id.'/'.$event->slug); ?>" class="btn btn-lg">Lihat Detail</a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        
        <div class="col-lg-8 mx-auto text-center">
          <a href="<?= site_url('event');?>" class="btn btn-lg btn-block btn-primary">Lihat Semua</a>
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

    <!-- Project Modals -->
    <?php foreach($projects as $project): ?>
      <div class="project-modal modal fade" id="projectModal-<?= $project->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h2><?= $project->nama; ?></h2>
                    <hr class="small">
                    <img class="img-fluid img-centered" src="<?= $project->foto; ?>" alt="">
                    <p><?= $project->ket == '' ? 'Keterangan belum disediakan.' : $project->ket ?></p>
                    <ul class="list-inline item-details">
                      <li>Client:
                        <strong><?= $project->pemohon; ?></strong>
                      </li>
                      <li>Tanggal:
                        <strong>
                          <?php
                          $r = explode("-", $project->selesai);
                          $r = array_slice($r, 0, 2);
                          $r = array_reverse($r);
                          $r[0] = bulan_definer($r[0]);

                          $r = implode(" ", $r);
                          echo $r;
                          ?>
                        </strong>
                      </li>
                      <li>Kategori:
                        <strong><?= $project->nama_kategori; ?></strong>
                      </li>
                    </ul>
                    <button type="button" class="btn btn-success" data-dismiss="modal">
                      <i class="fa fa-times"></i>
                      Close
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

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
