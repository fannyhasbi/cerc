<h2 class="text-center">Event</h2>
<hr class="dark">
<div class="row">
  <?php foreach($events as $event): ?>
  <div class="col-lg-4" style="margin-bottom: 25px">
    <img class="img-fluid" src="<?= $event->img ?>" alt="">
    <h5><?= $event->nama ?></h5>
    
    <div class="event-info">
      <p style="margin-bottom: 0; font-size: inherit"><i class="fa fa-calendar fa-fw"></i> <?= tanggal_definer($event->tgl) ?></p>
      <p style="margin-bottom: 0; font-size: inherit"><i class="fa fa-map-marker fa-fw"></i> <?= $event->tempat ?></p>
    </div>

    <div class="col-lg-8 mx-auto text-center event-btn">
      <a href="<?= site_url('event/'.$event->id.'/'.$event->slug); ?>" class="btn btn-lg">Lihat Detail</a>
    </div>
  </div>
  <?php endforeach; ?>
</div>