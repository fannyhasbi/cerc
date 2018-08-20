<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Profil Club</h4>
      </div>
      <div class="card-content">
        <form action="" method="post" enctype="multipart/form-data">
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

          <div id="upload-container" class="row" style="display: none;">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Foto Club</label>
                <input type="file" id="upload-input" class="form-control" style="opacity: 1; position: inherit;">
              </div>
            </div>
          </div>

          <input type="submit" id="btn" class="btn btn-primary" name="simpan" value="Simpan" disabled>
          <button type="button" id="btn-upload" class="btn btn btn-default" value="no" disabled>Ubah Foto</button>
          <button type="button" id="btn-edit" class="btn btn btn-default pull-right" value="no">Edit</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(function(){
  $("#btn-edit").click(function(){
    if($(this).val() == "no"){
      $("textarea[name=ket]").attr("readonly", false);
      $("#btn").attr("disabled", false);
      $("#btn-upload").attr("disabled", false);
      $("textarea[name=ket]").focus();
      $(this).val("edit");
      $(this).html("Urungkan");
    }
    else {
      $("textarea[name=ket]").attr("readonly", true);
      $("#btn").attr("disabled", true);
      $("#btn-upload").attr("disabled", true);

      $("#upload-container").hide(400);
      $("#btn-upload").val("no");
      $("#btn-upload").html("Ubah Foto");
      $("#upload-input").attr("name", "foto-no");

      $(this).val("no");
      $(this).html("Edit");
    }
  });

  $("#btn-upload").click(function(){
    if($(this).val() == "no"){
      $("#upload-container").show(700);
      $(this).val("upload");
      $(this).html("Urungkan Foto");
      $("#upload-input").attr("name", "foto");
      $("#upload-input").attr("required", true);
    }
    else {
      $("#upload-container").hide(400);
      $(this).val("no");
      $(this).html("Ubah Foto");
      $("#upload-input").attr("name", "foto-no");
    }
  })
});
</script>
