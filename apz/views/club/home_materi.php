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
            <thead>
              <tr class="text-primary">
                <th>No.</th>
                <th>Judul</th>
                <th>Tgl. Kelas</th>
                <th>Updated</th>
              </tr>
            </thead>
            <tbody>

              <?php $n=1; foreach($materi as $item): ?>
                <tr>
                  <td><?= $n; ?></td>
                  <td><?= $item->judul; ?></td>
                  <td><?= tanggal_definer($item->tgl_kelas); ?></td>
                  <td><?= $item->updated; ?></td>
                  <td class="td-actions text-right">
                    <a href="<?= site_url('c/edit-event/'.$item->id); ?>" rel="tooltip" title="Edit Event" class="btn btn-primary btn-simple btn-xs">
                      <i class="material-icons">edit</i>
                    </a>
                    <button rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" onclick="hapus(<?= $item->id; ?>)">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
              <?php $n++; endforeach; ?>

            </tbody>
          </table>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<script>
function hapus(id){
  var j = confirm("Yakin ingin menghapus?");
  if(j){
    window.location = "<?= site_url('c/hapus-materi/'); ?>"+ id;
  }
}
</script>