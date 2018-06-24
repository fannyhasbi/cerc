<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="purple">
        <h4 class="title">Edit Kategori Project</h4>
      </div>
      <div class="card-content">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group label-floating">
                <label class="control-label">#ID</label>
                <input type="text" class="form-control" name="id_kategori" value="<?= $kategori->id; ?>" disabled readonly>
              </div>
            </div>

            <div class="col-md-9">
              <div class="form-group label-floating">
                <label class="control-label">* Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" value="<?= $kategori->nama; ?>" required autofocus>
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary pull-right" name="simpan" value="Simpan">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>