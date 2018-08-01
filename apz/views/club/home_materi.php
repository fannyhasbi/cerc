<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url('c/add-materi'); ?>" class="btn btn-primary">
      <i class="material-icons">note_add</i> Tambah
    </a>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Daftar Materi</h4>
      </div>
      <div class="card-content table-responsive">
        <?php if(count($materi) == 0){ ?>
          <blockquote>Materi belum ada. Silahkan tambah <a href="<?= site_url('c/add-materi'); ?>">disini</a>.</blockquote>
        <?php } else { ?>
          <table class="table">
            <tbody>

              <?php foreach($materi as $item): ?>
                <tr>
                  <td><?= $item->judul; ?></td>
                  <td><?= $item->tgl_kelas; ?>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
