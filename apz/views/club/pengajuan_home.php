<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Daftar Permintaan Pengajuan Proyek</h4>
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
                <td><a href="<?= site_url('c/request/'.$request->id); ?>"><?= $request->nama; ?></a></td>
                <td>
                  <?
                  $d1 = date_create($request->tgl_pengajuan);
                  $d1 = date_format($d1, 'd/m/y');
                  $d2 = date_create($request->est_selesai);
                  $d2 = date_format($d2, 'd/m/y');
                  echo $d1 .' - <strong>'. $d2 .'</strong>';
                  ?>
                </td>
                <td><?= status_definer($request->status); ?></td>
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
