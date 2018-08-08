<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="purple">
        <h4 class="title">Edit Post</h4>
        <p class="category">Isikan detail post</p>
      </div>
      <div class="card-content">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Judul</label>
                <input type="text" class="form-control" name="judul_post" required autofocus value="<?= $post->judul; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Tanggal Kegiatan</label>
                <input type="text" id="datepicker" class="form-control" name="tgl_kegiatan" pattern="([0-9]{4})+-+([0-1]{1})+([0-9]{1})+-+([0-3]{1})+([0-9]{1})" autocomplete="off" required value="<?= $post->tgl; ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Keterangan</label>
                <div class="form-group label-floating">
                  <textarea class="form-control" name="keterangan" rows="10" placeholder="Keterangan singkat kegiatan" required><?= $post->ket; ?></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="form-group label-floating">
                <?php $filter_url = filter_var($post->foto, FILTER_VALIDATE_URL); ?>
                <label class="radio-inline"><input type="radio" name="file-radio" value="url" <?= $filter_url ? 'checked' : '' ?>>URL</label>
                <label class="radio-inline"><input type="radio" name="file-radio" value="upload" <?= !$filter_url ? 'checked' : '' ?>>Upload</label>
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group label-floating">
                <label class="control-label">URL</label>
                <input id="file_url" type="url" class="form-control" name="file_url" <?= $filter_url ? 'required value="'. $post->foto .'"' : 'style="display:none"'?>>
                <input id="file_content" type="file" class="form-control" name="file_content" <?= !$filter_url ? 'required style="opacity: 1; position: inherit;' : 'style="opacity: 1; position: inherit; display: none"' ?>>
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary pull-right" name="edit_post" value="Simpan">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(function(){
  $("input[type=radio]").change(function(){
    if($(this).val() == "url"){
      $("#file_url").show();
      $("#file_url").attr("required", true);
      $("#file_content").attr("required", false);
      $("#file_content").hide();
    }
    else {
      $("#file_content").show();
      $("#file_content").attr("required", true);
      $("#file_url").attr("required", false);
      $("#file_url").hide();
    }
  });
});
</script>