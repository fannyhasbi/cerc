<!DOCTYPE html>
<html>
<head>
  <title>Login | CERC</title>
  <link rel="stylesheet" type="text/css" href="">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets'); ?>/css/bootstrap_pure.min.css" rel="stylesheet">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8">
        <form action="<?= site_url('login'); ?>" method="post" style="margin-top: 50px">
          <?= $msg; ?>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" autofocus>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary btn-block" value="Masuk">
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>