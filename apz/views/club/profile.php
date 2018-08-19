<!-- Profile Section -->
<section style="padding-top: 120px;" class="success">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?= $club->foto == NULL ? base_url('assets/img/cerc.jpg') : base_url('uploads/club/photo/'.$club->foto); ?>" class="img-fluid">
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

    <div id="project" class="row">
      <?php if(count($post) == 0){ ?>
        <p>Belum ada aktivitas yang dibagikan.
      <?php } else { ?>
        <?php foreach($post as $item): ?>
          <div class="col-sm-3 project-item">
            <a class="project-link" href="#postModal-<?= $item->id; ?>" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <?= $item->judul; ?>
                </div>
              </div>
              <?php $filter_url = filter_var($item->foto, FILTER_VALIDATE_URL); ?>
              <img class="img-fluid" src="<?= $filter_url ? $item->foto : base_url('uploads/club/post/'.$item->foto); ?>">
            </a>
          </div>
        <?php endforeach; ?>
      <?php } // end else ?>
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

<?php foreach($post as $item): ?>
  <div class="project-modal modal fade" id="postModal-<?= $item->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                <h2><?= $item->judul; ?></h2>
                <hr class="small">
                
                <?php $filter_url = filter_var($item->foto, FILTER_VALIDATE_URL); ?>
                <img class="img-fluid img-centered" src="<?= $filter_url ? $item->foto : base_url('uploads/club/post/'.$item->foto); ?>" alt="">
                
                <p><?= $item->ket == '' ? 'Keterangan belum disediakan.' : $item->ket ?></p>
                <ul class="list-inline item-details">
                  <li>Tanggal Kegiatan:
                    <strong><?= tanggal_definer($item->tgl); ?></strong>
                  </li>
                  <li>Diupload pada:
                    <strong><?= tanggal_definer($item->uploaded); ?></strong>
                  </li>
                  <li>Diupdate pada:
                    <strong><?= $item->updated; ?></strong>
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
