<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url('u/add'); ?>" class="btn btn-primary">
      <i class="material-icons">note_add</i> Tambah
    </a>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Daftar Event</h4>
        <!-- <p class="category">Here is a subtitle for this table</p> -->
      </div>
      <div class="card-content table-responsive">
        <table class="table">
          <tbody>

            <?php foreach($events as $event): ?>
              <tr>
                <td><?= $event->nama; ?></td>
                <td><?= $event->tgl; ?>
                <td class="td-actions text-right">
                  <a href="<?= site_url('event/'.$event->id."/".$event->slug);?>" rel="tooltip" title="Lihat" class="btn btn-success btn-simple btn-xs" target="_blank">
                    <i class="material-icons">remove_red_eye</i>
                  </a>
                  <a href="<?= site_url('u/edit/'.$event->id); ?>" rel="tooltip" title="Edit Event" class="btn btn-primary btn-simple btn-xs">
                    <i class="material-icons">edit</i>
                  </a>
                  <button rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" onclick="hapus(<?= $event->id; ?>)">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
function hapus(id){
  var j = confirm("Yakin ingin menghapus?");
  if(j){
    window.location = "<?= site_url('u/hapus/'); ?>"+ id;
  }
}
</script>