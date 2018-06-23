<div class="row">
  <div class="col-md-8">
    <div class="text-center">
      <img class="img-fluid" src="<?= $event->img; ?>" style="max-height: 500px; margin-bottom: 20px">
      <h2><?= $event->nama; ?></h2>
    </div>
    
    <hr>

    <div>
      <h5><i class="fa fa-calendar fa-fw"></i> <?= $event->tgl; ?></h5>
      <h5><i class="fa fa-map-marker fa-fw"></i> <?= $event->tempat; ?></h5>
    </div>

    <div>
      <p style="font-size: 120%; text-align: justify;"><?= $event->ket; ?></p>
    </div>
  </div>
</div>