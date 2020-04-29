<?php
  require_once "./konfig/koneksi.php"; 
  if(isset($_SESSION['username'])){
    echo "<script>window.location = '../admin';</script>";
  }else{    
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../utama/img/wuri.png" type="image/png">
  <title>Sekolah Menengah Atas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page bg-dark">
<div class="login-box">
  <div class="login-logo" >
    <a href="#" style="color: #fff;"><b>Admin</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login To Admin</p>
  <?php 
    if(isset($_POST['login'])){
    $username = trim(mysqli_real_escape_string($koneksi, $_POST['username']));
    $password = md5(trim(mysqli_real_escape_string($koneksi, $_POST['password'])));

    $login = mysqli_query($koneksi, "select * from login where username = '$username' and password = '$password'") or die(mysqli_error($koneksi));
      
    if(mysqli_num_rows($login) > 0){
      $_SESSION['username'] = $username;
      echo "<script>window.location = '../admin';</script>";
    } else { ?>
        <div class="col-lg-offset-3">
          <div class="alert alert-danger alert-dismissable" role="danger">
            <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <strong>Login Gagal</strong>&nbsp;Username atau Password Salah!
          </div>
        </div>
    <?php
    }
  }

  ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 80px;">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" value="login" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.min.js"></script>

</body>
</html>
<?php
  }
  ?>