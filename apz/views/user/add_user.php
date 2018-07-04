<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header" data-background-color="purple">
        <h4 class="title">Tambah User</h4>
        <p class="category">Isikan detail user</p>
      </div>
      <div class="card-content">
        <form action="" method="post">
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Username</label>
                <input type="text" class="form-control" name="username" required autofocus>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Level</label>
                <select class="form-control" name="level" required>
                  <option value="1" selected>Admin</option>
                  <option value="2">Software</option>
                  <option value="3">Jaringan</option>
                  <option value="4">Embedded</option>
                  <option value="5">Multimedia</option>
                  <option value="6">Unit</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Password</label>
                <input type="password" id="pass1" class="form-control" name="password" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group label-floating">
                <label class="control-label">Ulangi Password</label>
                <input type="password" id="pass2" class="form-control" name="password2" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label class="control-label">Nama</label>
                <input type="text" class="form-control" name="nama" required>
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