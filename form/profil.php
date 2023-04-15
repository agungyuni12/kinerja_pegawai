<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
include '../login/config.php';
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>LAPORAN KINERJA PEGAWAI</title>
    <link rel="apple-touch-icon" href="../assets/images/favicon/bpswarna.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/bpswarna.png">
    <link href="../assets/css/custom/icon.css?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/vendors.min.css">
    <!--<link rel="stylesheet" type="text/css" href="../assets/vendors/flag-icon/css/flag-icon.min.css">-->
    <link rel="stylesheet" type="text/css" href="../assets/css/pages/user-profile-page.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pages/page-account-settings.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/dropify/css/dropify.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/vertical-dark-menu-template/style.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php include '../menu/navbar.php' ;?>
    <!-- END: Header-->
    <!-- BEGIN: SideNav-->
    <?php $page='profil'; include '../menu/sidebar.php' ;?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="../assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>PROFIL</span></h5>
              </div>
            </div>
          </div>
        </div>
<div class="col s12">
<div class="container">
            <!-- users edit start -->
<div class="section">
<section class="tabs-vertical mt-1 section">
  <!-- <div class="card">
    <div class="card-panel"> -->
      <!-- <div class="card-body"> -->
      <div class="row">
        <div class="col s12">
          <!-- users edit media object start -->
          <div class="media display-flex align-items-center mb-2">
            <div class="masonry-gallery-wrapper">
              <div class="popup-gallery">
                <div class="gallery-sizer"></div>
                  <div class="row">
                    <div class="col s2 m6xl2">

                        <!-- <a href="../assets/images/avatar/avatar-20.png" title="Foto Profil" class="z-depth-4 circle" height="64" width="64"> -->
                        <?php
                      $foto_details  = mysqli_query($conn, "SELECT * FROM profil WHERE nip='{$_SESSION[ "nip" ]}'");
                      while ($row = mysqli_fetch_array($foto_details)) {     
                       echo "<a href='../foto/".$row['foto'].".jpg' title='Foto Profil' class='z-depth-4 circle' height='64' width='64'>";
                       echo "<img src='../foto/".$row['foto'].".jpg' class='responsive-img mb-10 z-depth-4 circle' alt='' > </a>";   
                        }     
                        ?>
                        <!-- <img src="../assets/images/avatar/avatar-20.png" class="responsive-img mb-10" alt="" > -->
                        
                    </div>
                    <div class="media-body">
                    <h5 class="media-heading">Foto Profil</h5>
                  </div>
              </div>
<!-- </div> -->
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <div class="card-panel">
          <form id="accountForm">
            <div class="row">
              <div class="col s12">
                <div class="row">
                  <div class="col s12 input-field">
                  <input type="text" id="username" name="username" readonly value="<?php echo $_SESSION['username'];?>"/>
                      <label for="nip">USERNAME</label>
                  </div>
                  <div class="col s12 input-field">
                  <input type="text" id="nama_lengkap" name="nama_lengkap" readonly value="<?php echo $_SESSION['nama_lengkap'];?>"/>
                      <label for="nip">NAMA</label>
                  </div>
                  <div class="col s12 input-field">
                      <input type="text" id="nip" name="nip" readonly value="<?php echo $_SESSION['nip'];?>"/>
                      <label for="nip">NIP</label>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="row">
          <!-- users edit account form ends -->
                    <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" onclick="location.href='../login/logout.php'" >LOGOUT
                        <i class="material-icons left">keyboard_tab</i>
                        </button>
                    </div>
                  </div>      
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

    <!-- Form with placeholder -->

  <!-- Slide Out Chat -->

    
    <!-- BEGIN: Footer-->
    <?php include '../menu/footer.php' ;?>
      <script>
            var $role= '<?= $_SESSION['role'];?>';
            if($role=='penilai'){
              document.querySelector('#penilaian1').style.display="block";
            };
            if($role=='admin'){
              document.querySelector('#monitor1').style.display="block";
              document.querySelector('#hasil_penilaian').style.display="block";
            };
            if ($role=='penilai' || $role=='pengguna') {
              document.querySelector('#penilaian_pegawai').style.display="block";
            };
    </script>
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../assets/js/scripts/page-account-settings.min.js"></script>
    <script src="../assets/vendors/dropify/js/dropify.min.js"></script>
    <script src="../assets/js/plugins.min.js"></script>
    <script src="../assets/js/search.min.js"></script>
    <!--<script src="../assets/js/custom/custom-script.min.js"></script>-->
    <!--<script src="../assets/js/scripts/customizer.min.js"></script>-->
    <script src="../assets/vendors/select2/select2.full.min.js"></script>
    <script src="../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../assets/js/scripts/form-file-uploads.min.js"></script>
    <script src="../assets/js/scripts/advance-ui-modals.min.js"></script>
    <script src="../assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../assets/vendors/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/scripts/media-gallery-page.min.js"></script>

  </body>
</html>