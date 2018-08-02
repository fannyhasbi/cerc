<section id="materi">
  <div class="container">
    <h3 class="text-center"><?= $materi->judul; ?></h3>
    <p class="text-center"><?= $materi->ket; ?></p>
    <hr class="small">

    <div>
      <table class="table table-responsive table-striped">
        <tr>
          <th>Club</th>
          <td><?= level_definer($materi->id_club); ?></td>
        </tr>
        <tr>
          <th>Pemateri</th>
          <td><?= $materi->pemateri; ?></td>
        </tr>
        <tr>
          <th>Tanggal kelas</th>
          <td><?= tanggal_definer($materi->tgl_kelas); ?></td>
        </tr>
        <tr>
          <th>Diupload pada</th>
          <td><?= tanggal_definer($materi->uploaded); ?></td>
        </tr>
        <tr>
          <th>Terakhir di-update</th>
          <td><?= $materi->updated; ?></td>
        </tr>
        <tr>
          <th>File materi</th>
          <td>
            <?php if(filter_var($materi->file, FILTER_VALIDATE_URL)){ ?>
              <a href="<?= $materi->file; ?>" target="_blank">Buka</a>
            <?php } else { ?>
              <a href="<?= site_url('uploads/club/materi/'.$materi->file); ?>" target="_blank">Buka</a>
            <?php } ?>
          </td>
        </tr>
      </table>
    </div>
  </div>
</section>
