<?php
date_default_timezone_set('Asia/Jakarta');
function statusDefiner($status){
  switch($status){
    case 'N': return 'Belum'; break;
    default: 'Unknown'; break;
  }
}
?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Daftar Permintaan Pengajuan Proyek</h4>
        <!-- <p class="category"></p> -->
      </div>
      <div class="card-content table-responsive">
        <table class="table table-responsive table-hover">
          <thead>
            <th>Proyek</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Pemohon</th>
            <th>Instansi</th>
          </thead>
          <tbody>

            <?php foreach($requests as $request): ?>
              <tr class="">
                <td><a href="<?= site_url('u/request/'.$request->id); ?>"><?= $request->nama; ?></a></td>
                <td>
                  <?
                  $d1 = date_create($request->tgl_pengajuan);
                  $d1 = date_format($d1, 'd/m/y');
                  $d2 = date_create($request->est_selesai);
                  $d2 = date_format($d2, 'd/m/y');
                  echo $d1 .' - <strong>'. $d2 .'</strong>';
                  ?>
                </td>
                <td><?= statusDefiner($request->status); ?></td>
                <td><?= $request->nama_pemohon; ?></td>
                <td><?= $request->instansi; ?></td>
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
  var msg = '<?= $this->session->flashdata('msg') ?>';
  var type = '<?= $this->session->flashdata('type'); ?>';
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

// function hapus(id){
//   var j = confirm("Yakin ingin menghapus?");
//   if(j){
//     window.location = "<?= site_url('u/hapus_user/'); ?>"+ id;
//   }
// }
</script>