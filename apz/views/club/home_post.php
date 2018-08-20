<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url('c/add-post'); ?>" class="btn btn-primary">
      <i class="material-icons">note_add</i> Tambah
    </a>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Daftar Post</h4>
      </div>
      <div class="card-content table-responsive">
        <table class="table">
          <thead>
            <tr class="text-primary">
              <th>No.</th>
              <th>Judul</th>
              <th>Tgl. Kegiatan</th>
              <th>Updated</th>
            </tr>
          </thead>
          <tbody>
            <?php $n=1; foreach($post as $item): ?>
              <tr>
                <td><?= $n; ?></td>
                <td><?= $item->judul; ?></td>
                <td><?= tanggal_definer($item->tgl); ?></td>
                <td><?= $item->updated; ?></td>
                <td class="td-actions text-right">
                  <a href="<?= site_url('c/edit-post/'.$item->id); ?>" rel="tooltip" title="Edit post" class="btn btn-primary btn-simple btn-xs">
                    <i class="material-icons">edit</i>
                  </a>
                  <button rel="tooltip" title="Hapus post" class="btn btn-danger btn-simple btn-xs" onclick="hapus(<?= $item->id; ?>)">
                    <i class="material-icons">close</i>
                  </button>
                </td>
              </tr>
            <?php $n++; endforeach; ?>
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
    window.location = "<?= site_url('c/hapus-post/'); ?>"+ id;
  }
}
</script>