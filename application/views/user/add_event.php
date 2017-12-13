<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="purple">
        <h4 class="title">Tambah Event</h4>
        <p class="category">Isikan detail event</p>
      </div>
      <div class="card-content">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">* Nama Event</label>
                <input type="text" class="form-control" name="nama" required autofocus>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">* Tanggal</label>
                <input type="email" class="form-control" name="tanggal" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">* Tempat</label>
                <input type="email" class="form-control" name="tempat" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>* Keterangan</label>
                <div class="form-group label-floating">
                  <textarea class="form-control" name="keterangan" rows="10" placeholder="Keterangan lengkap (pendaftaran, penyelenggara, biaya, dll)" required></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Foto <small><a href="https://imgbb.com">imgbb.com</a></small></label>
                <input type="url" class="form-control" name="foto">
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