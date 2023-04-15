<?php 
 
include 'login/config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
  if ($_SESSION['jabatan']=="admin"){
    header("Location: form/dashboard.php");
  }
  else{
    header("Location: form/form_input.php");
  }
}
 
?>
 
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>LOGIN LAPORAN KINERJA PEGAWAI</title>
    <link rel="apple-touch-icon" href="assets/images/favicon/bpswarna.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/bpswarna.png">
    <link href="assets/css/custom/icon.css?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/login.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/sweetalert/sweetalert.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/custom/custom.css">
    <script src="assets/vendors/sweetalert/sweetalert.min.js"></script>
    <!-- END: Custom CSS-->
  </head>
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
<?php
if (isset($_POST['submit'])) {
  $usermail = $_POST['usermail'];
  $password = md5($_POST['password']);
  $salt_pass2 = md5("asjhdjahsd123823".$_POST['password']."fklsdkfs6521sd");
  
  $sql = "SELECT * FROM users WHERE email='$usermail' OR username='$usermail' AND password = '$password' OR saltpassword='$salt_pass2'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      $_SESSION['nip'] = $row['nip'];
      $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
      $_SESSION['jabatan'] = $row['jabatan'];
      $_SESSION['role'] = $row['role'];
      ?>
      <script>
        swal({
          icon:"success",
          title:"Berhasil",
          text:"Selamat anda berhasil login"
      }).then(function() {
        <?php
        if($_SESSION['jabatan']=="admin"){
          ?>
          window.location = "form/dashboard.php";
          <?php
        }
        else{
          ?>
          window.location = "form/form_input.php";
          <?php
        }
        ?>
    });
      </script>
      <?php
  } else {
    ?>
    <script>
      swal({
        icon:"error",
        title:"Salah",
        text:"Email atau username atau password Anda salah. Silahkan coba lagi!"
    }).then(function() {
    window.location = "index.php";
    });
    </script>
    <?php
  }
}

?>

<div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
</div>    
<div class="row">
      <div class="col s12">
        <div class="container"><div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    <form action="" method="POST" class="login-form">
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Sign in</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">mail_outline</i>
          <input id="usermail" type="text" name="usermail" value="<?php echo $usermail; ?>" required>
          <label for="usermail" class="center-align">Email atau Username</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password" value="<?php echo $_POST['password']; ?>">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
      </div>
      <div class="row">
        <div class="input-field col s12">
        <button name="submit" id="login" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
        </div>
      </div>
        <div class="input-field col s12">
          <p class="margin large">Anda belum punya akun? <a href="login/register.php">Daftar Akun</a></p>
        </div>
    </form>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>
    
    <!-- BEGIN VENDOR JS-->
    <script src="assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/search.min.js"></script>

    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>