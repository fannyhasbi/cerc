
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Detail Request</h4>
        <p class="card-category">Tanggapan akan langsung dikirimkan ke email pemohon</p>
      </div>
      <div class="card-content">
        <div class="row">
          <div class="col-md-6">
            <table class="table table-hover">
              <tr>
                <th>Nama Proyek</th>
                <td><?= $request->nama; ?></td>
              </tr>
              <tr>
                <th>Pengajuan - Deadline</th>
                <td>
                  <?
                  $d1 = date_create($request->tgl_pengajuan);
                  $d1 = date_format($d1, 'd-m-Y');
                  $d1 = explode("-", $d1);
                  $d1[1] = bulan_definer($d1[1]);
                  $d1 = implode(" ", $d1);

                  $d2 = date_create($request->est_selesai);
                  $d2 = date_format($d2, 'd-m-Y');
                  $d2 = explode("-", $d2);
                  $d2[1] = bulan_definer($d2[1]);
                  $d2 = implode(" ", $d2);
                  echo $d1 .' - <strong>'. $d2 .'</strong>';
                  ?>
                </td>
              </tr>
              <tr>
                <th>Status</th>
                <td><?= status_definer($request->status); ?></td>
              </tr>
              <tr>
                <th>Pemohon</th>
                <td><?= $request->nama_pemohon; ?></td>
              </tr>
              <tr>
                <th>Instansi</th>
                <td><?= $request->instansi; ?></td>
              </tr>
              <tr>
                <th>Kontak</th>
                <td><?= $request->kontak ?></td>
              </tr>
              <tr>
                <th>File Tambahan</th>
                <td><a href="<?= base_url('uploads/proposals/'.$request->file); ?>" target="_blank">Buka</a></td>
              </tr>
            </table>
          </div>

          <div class="col-md-6">
            <blockquote><?= $request->ket == '' ? '<i>Keterangan kosong</i>' : $request->ket; ?></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
