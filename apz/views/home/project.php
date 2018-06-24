<h2 class="text-center">Project</h2>
<hr class="dark">
<div id="project" class="row">
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
                    <p>Ini penjelasan tentang proyek blablabalba. Tapi sampai saat ini belum dibuat fitur untuk keterangan tambahan proyek.</p>
                    <ul class="list-inline item-details">
                      <li>Client:
                        <strong><?= $project->pemohon; ?></strong>
                      </li>
                      <li>Tanggal:
                        <strong><?= $project->selesai; ?></strong>
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