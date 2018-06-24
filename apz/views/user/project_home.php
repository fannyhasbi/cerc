<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url('u/add_project'); ?>" class="btn btn-primary">
      <i class="material-icons">note_add</i> Tambah
    </a>

    <a href="<?= site_url('u/kategori_project'); ?>" class="btn btn-default">
      <i class="material-icons">list</i> Kategori
    </a>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Daftar Project <small>ditampilkan</small></h4>
        <!-- <p class="category">Here is a subtitle for this table</p> -->
      </div>
      <div class="card-content table-responsive">
        <table class="table">
          <tbody>

            <?php foreach($projects as $project): ?>
              <tr>
                <td><?= $project->nama; ?></td>
                <td><?= $project->pemohon; ?></td>
                <td><?= $project->selesai; ?></td>
                <td><?= $project->pj; ?></td>
                <td class="td-actions text-right">
                  <a href="<?= site_url('u/edit_project/'.$project->id); ?>" rel="tooltip" title="Edit project" class="btn btn-primary btn-simple btn-xs">
                    <i class="material-icons">edit</i>
                  </a>
                  <button rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" onclick="hapus(<?= $project->id; ?>)">
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
    window.location = "<?= site_url('u/hapus_project/'); ?>"+ id;
  }
}
</script>