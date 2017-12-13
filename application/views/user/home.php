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
                  <a href="#" rel="tooltip" title="Lihat" class="btn btn-success btn-simple btn-xs">
                    <i class="material-icons">remove_red_eye</i>
                  </a>
                  <a href="#" rel="tooltip" title="Edit Event" class="btn btn-primary btn-simple btn-xs">
                    <i class="material-icons">edit</i>
                  </a>
                  <a href="#" rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs">
                    <i class="material-icons">close</i>
                  </a>
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
$(document).ready(function(){
  var msg = '<?= $msg; ?>';

  if(msg.length !== 0){
    color = Math.floor((Math.random() * 4) + 1);
    $.notify({
      icon: "notifications",
      message: msg
    }, {
      type: 'success',
      timer: 3000,
      placement: {
        from: 'top',
        align: 'center'
      }
    });
  }
});
</script>