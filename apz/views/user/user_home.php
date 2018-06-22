<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url('u/add_user'); ?>" class="btn btn-primary">
      <i class="material-icons">note_add</i> Tambah
    </a>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Daftar User</h4>
        <!-- <p class="category">Here is a subtitle for this table</p> -->
      </div>
      <div class="card-content table-responsive">
        <table class="table">
          <tbody>

            <?php foreach($users as $user): ?>
              <tr>
                <td><?= $user->nama; ?></td>
                <td><?= $user->level; ?></td>
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
  var type = '<?= $type; ?>';
  type = type.length == 0 ? 'success' : type;

  if(msg.length !== 0){
    color = Math.floor((Math.random() * 4) + 1);
    $.notify({
      icon: "notifications",
      message: msg
    }, {
      type: type,
      timer: 3000,
      placement: {
        from: 'top',
        align: 'center'
      }
    });
  }
});

function hapus(id){
  var j = confirm("Yakin ingin menghapus?");
  if(j){
    window.location = "<?= site_url('u/hapus/'); ?>"+ id;
  }
}
</script>