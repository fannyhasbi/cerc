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
                <label class="control-label">Nama Kategori</label>
                <input type="text" id="nama_kategori" class="form-control" name="nama_kategori" value="<?= $kategori->nama; ?>" required autofocus>
              </div>
            </div>
          </div>

          <input type="submit" id="simpan" class="btn btn-primary pull-right" name="simpan" value="Simpan">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById("simpan").addEventListener("click", function(event){
  var nama = document.getElementById("nama_kategori").value;
  if(nama === "<?= $kategori->nama; ?>"){
    event.preventDefault();
    alert("Tidak ada perubahan");
  }
  else {
    return true;
  }
});
</script>