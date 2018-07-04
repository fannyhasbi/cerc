<?php
// Level definition
function level_definer($lvl){
  switch($lvl){
    case 1: return 'Admin'; break;
    case 2: return 'Software'; break;
    case 3: return 'Jaringan'; break;
    case 4: return 'Embedded'; break;
    case 5: return 'Multimedia'; break;
    case 6: return 'Unit'; break;
    default: return 'Not Defined'; break;
  }
}
?>

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
                <td><?= level_definer($user->level); ?></td>
                <td class="td-actions text-right">
                  <a href="<?= site_url('u/edit_user/'.$user->id); ?>" rel="tooltip" title="Edit user" class="btn btn-primary btn-simple btn-xs">
                    <i class="material-icons">edit</i>
                  </a>
                  <button rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs" onclick="hapus(<?= $user->id; ?>)">
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
    window.location = "<?= site_url('u/hapus_user/'); ?>"+ id;
  }
}
</script>