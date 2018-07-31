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
                <input type="text" class="form-control" name="nama" required value="<?= $club->nama; ?>" disabled readonly>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Keterangan Biodata</label>
                <textarea class="form-control" name="ket" required rows="6" readonly><?= $club->ket; ?></textarea>
              </div>
            </div>
          </div>

          <input type="submit" id="btn" class="btn btn-primary" name="simpan" value="Simpan" disabled>
          <button type="button" id="btn-edit" class="btn btn btn-default pull-right" value="not">Edit</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(function(){
  $("#btn-edit").click(function(){
    if($(this).val() == "not"){
      $("textarea[name=ket]").attr("readonly", false);
      $("#btn").attr("disabled", false);
      $("textarea[name=ket]").focus();
      $(this).val("edit");
      $(this).html("Urungkan");
    }
    else {
      $("textarea[name=ket]").attr("readonly", true);
      $("#btn").attr("disabled", true);
      $(this).val("not");
      $(this).html("Edit");
    }
  });
});
</script>
