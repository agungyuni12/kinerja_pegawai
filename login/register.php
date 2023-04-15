<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
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
    <title>DAFTAR AKUN LAPORAN KINERJA PEGAWAI</title>
    <link rel="apple-touch-icon" href="../assets/images/favicon/bpswarna.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/bpswarna.png">
    <link href="../assets/css/custom/icon.css?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pages/register.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/sweetalert/sweetalert.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/custom/custom.css">
    <script src="../assets/vendors/sweetalert/sweetalert.min.js"></script>
    <!-- END: Custom CSS-->
  </head>

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column register-bg   blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">

<?php
if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jabatan = $_POST['jabatan'];
    $golongan = $_POST['golongan'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $salt_pass2 = md5("asjhdjahsd123823".$_POST['password']."fklsdkfs6521sd");
    $csalt_pass2 = md5("asjhdjahsd123823".$_POST['cpassword']."fklsdkfs6521sd");
    // $password = md5($_POST['password']);
    // $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (nip,nama_lengkap,jabatan,golongan,username,email, saltpassword)
                    VALUES ('$nip','$nama_lengkap','$jabatan','$golongan','$username', '$email', '$salt_pass2')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
              ?>
              <script>
                swal({
                  icon:"success",
                  title:"Benar",
                  text:"Selamat akun anda sudah terdaftar"
              }).then(function() {
    window.location = "../index.php";
    });
              </script>
              <?php
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
              ?>
              <script>
                swal({
                  icon:"error",
                  title:"Salah",
                  text:"Terjadi kesalahan"
              }).then(function() {
    window.location = "register.php";
    });
              </script>
              <?php
            }
        } else {
          ?>
          <script>
            swal({
              icon:"error",
              title:"Salah",
              text:"Email sudah terdaftar"
          }).then(function() {
    window.location = "register.php";
    });
          </script>
          <?php
        }
         
    } else {
      
      ?>
    <script>
      swal({
        icon:"error",
        title:"Salah",
        text:"Password tidak sesuai"
    }).then(function() {
    window.location = "register.php";
    });
    </script>
    <?php

    }
}
?>

<div class="row">
      <div class="col s12">
        <div class="container"><div id="register-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
    <form class="login-form" action="" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Register</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">format_list_numbered</i>
          <input id="username" type="number" name="nip" value="<?php echo $nip; ?>" required>
          <label for="username" class="center-align">NIP</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="nama_lengkap" type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" required>
          <label for="nama_lengkap">Nama Lengkap</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">supervisor_account</i>
          <select name="jabatan" required>
						    <option value="" disabled selected>Jabatan</option>
                            <option value="Kepala BPS Kabupaten Dompu">Kepala BPS Kabupaten Dompu</option>
                            <option value="Kepala Sub Bagian Umum">Kepala Sub Bagian Umum</option>
                            <option value="Koordinator Fungsi Statistik Sosial">Koordinator Fungsi Statistik Sosial</option>
                            <option value="Koordinator Fungsi Statistik Distribusi">Koordinator Fungsi Statistik Distribusi</option>
                            <option value="Koordinator Fungsi NWAS">Koordinator Fungsi NWAS</option>
                            <option value="Koordinator Fungsi IPDS">Koordinator Fungsi IPDS</option>
                            <option value="Staff Sub Bagian Umum">Staff Sub Bagian Umum</option>
                            <option value="Staff Fungsi Statistik Sosial">Staff Fungsi Statistik Sosial</option>
                            <option value="Staff Fungsi Statistik Distribusi">Staff Fungsi Statistik Distribusi</option>
                            <option value="Staff Fungsi Statistik Produksi">Staff Fungsi Statistik Produksi</option>
                            <option value="Staff Fungsi NWAS">Staff Fungsi NWAS</option>
                            <option value="Staff Fungsi IPDS">Staff Fungsi IPDS</option>
                            <option value="KSK Kecamatan Huu">KSK Kecamatan Huu</option>
                            <option value="KSK Kecamatan Manggelewa">KSK Kecamatan Manggelewa</option>
                            <option value="KSK Kecamatan Pekat">KSK Kecamatan Pekat</option>
                            <option value="KSK Kecamatan Woja">KSK Kecamatan Woja</option>
                </select>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">recent_actors</i>
          <select name="golongan" required>
						    <option value="" disabled selected>Pangkat dan Golongan</option>
                            <option value="Pengatur Muda Tk I ( II/a )">Pengatur Muda Tk I ( II/a )</option>
                            <option value="Pengatur   ( II/c )">Pengatur   ( II/c )</option>
                            <option value="Pengatur Tk I   ( II/d )">Pengatur Tk I   ( II/d )</option>
                            <option value="Penata Muda  ( III/a )">Penata Muda  ( III/a )</option>
                            <option value="Penata Muda Tk I  ( III/b )">Penata Muda Tk I  ( III/b )</option>
                            <option value="Penata  ( III/c )">Penata  ( III/c )</option>
                            <option value="Penata Tk I  ( III/d )">Penata Tk I  ( III/d )</option>
                            <option value="Pembina Tk I ( IV/b )">Pembina Tk I ( IV/b )</option>
                </select>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">account_circle</i>
          <input id="username" type="text" name="username" placeholder="User Name" value="<?php echo $username;?>" required>
          <!-- <label for="username">Username</label> -->
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">mail_outline</i>
          <input id="email" type="email" name="email" value="<?php echo $email; ?>" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="cpassword" type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
          <label for="cpassword">Confirm Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <!-- <a href="index.html" class="">Register</a> -->
          <button name="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</button>
        </div>
      </div>
        <div class="input-field col s12">
          <p class="margin large">Apakah sudah punya akun? <a href="../index.php">Login</a></p>
      </div>
    </form>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="../assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../assets/js/plugins.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>

</html>