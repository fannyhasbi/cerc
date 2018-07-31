<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Profil Club</h4>
      </div>
      <div class="card-content">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Nama Club</label>
                <input type="text" class="form-control" name="nama" required value="<?= $club->nama; ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Keterangan Biodata</label>
                <textarea class="form-control" name="ket" required rows="6"><?= $club->ket; ?></textarea>
              </div>
            </div>
          </div>

          <input type="submit" id="btn" class="btn btn-primary pull-right" name="tambah" value="Tambah">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>
