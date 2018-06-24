<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="purple">
        <h4 class="title">Tambah Project</h4>
        <p class="category">Isikan detail project</p>
      </div>
      <div class="card-content">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group label-floating">
                <label class="control-label">* Nama Proyek</label>
                <input type="text" class="form-control" name="nama_proyek" required autofocus>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group label-floating">
                <label class="control-label">Kategori</label>
                <select class="form-control" name="kategori">
                  <?php foreach($kategori as $item): ?>
                  <option value="<?= $item->id; ?>"><?= $item->nama; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="form-group label-floating">
                <label class="control-label">* Penanggung jawab</label>
                <input type="text" class="form-control" name="pj" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group label-floating">
                <label class="control-label">* Tanggal Selesai (YYYY-MM-DD)</label>
                <input type="text" class="form-control" name="selesai" pattern="([0-9]{4})+-+([0-1]{1})+([0-9]{1})+-+([0-3]{1})+([0-9]{1})" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">* Pemohon</label>
                <input type="text" class="form-control" name="pemohon" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Foto <small><a href="https://imgbb.com">imgbb.com</a></small></label>
                <input type="url" class="form-control" name="foto" required>
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary pull-right" name="tambah" value="Tambah">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>