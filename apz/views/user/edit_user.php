<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="purple">
        <h4 class="title">Edit User</h4>
        <p class="category">Isikan detail user</p>
      </div>
      <div class="card-content">
        <form action="" method="post">
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?= $user->username; ?>" readonly disabled>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Level</label>
                <select class="form-control" name="level" required>
                  <option <?= $user->level == 1 ? 'selected' : '' ?> value="1" selected>Admin</option>
                  <option <?= $user->level == 2 ? 'selected' : '' ?> value="2">Software</option>
                  <option <?= $user->level == 3 ? 'selected' : '' ?> value="3">Jaringan</option>
                  <option <?= $user->level == 4 ? 'selected' : '' ?> value="4">Embedded</option>
                  <option <?= $user->level == 5 ? 'selected' : '' ?> value="5">Multimedia</option>
                  <option <?= $user->level == 6 ? 'selected' : '' ?> value="6">Unit</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $user->nama; ?>" required>
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary pull-right" name="simpan" value="Simpan">
          <a href="<?= site_url('u/user_reset/'.$user->id); ?>" class="btn btn-warning pull-right">Reset Password</a>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(function () {
  $("#btn").click(function(e) {
    var password  = $("#pass1").val();
    var password2 = $("#pass2").val();

    if(password.length < 6){
      $.notify({
        icon: "error_outline",
        message: "Password terlalu pendek"
      }, {
        type: "danger",
        timer: 2000,
        placement: {
          from: 'top',
          align: 'center'
        }
      });
      return false;
    }

    if (password != password2) {
      $.notify({
        icon: "error_outline",
        message: "Password tidak cocok"
      }, {
        type: "danger",
        timer: 2000,
        placement: {
          from: 'top',
          align: 'center'
        }
      });
      return false;
    }

    return true;
  });
});
</script>