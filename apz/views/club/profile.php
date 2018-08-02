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

<section id="materi">
  <div class="container">
    <h3 class="text-center">Materi Club</h3>
    <hr class="small">

    <div>
      <?php if(count($materi) == 0){ ?>
        <p>Belum ada materi yang dibagikan.</p>
      <?php } else { ?>
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Tgl. Kelas</th>
              <th>Pemateri</th>
              <th>Updated</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($materi as $item): ?>
              <tr>
                <td><?= $item->judul; ?></td>
                <td><?= tanggal_definer($item->tgl_kelas); ?></td>
                <td><?= $item->pemateri; ?></td>
                <td><?= tanggal_definer($item->updated); ?></td>
                <td><a href="<?= site_url('materi/'.$item->slug); ?>">Lihat detail</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php } ?>
    </div>
  </div>
</section>
