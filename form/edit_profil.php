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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.css">
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
    <?php $page='edit_profil'; include '../menu/sidebar.php' ;?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="../assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>EDIT PROFIL</span></h5>
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
<!-- </div> -->
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form action="k_edit_profil.php" method="post" id="e_profil" enctype="multipart/form-data">  
          <div class="card-panel">
            <div class="row">
              <div class="col s12">
                <div class="row">
                  <?php
                  $sql = mysqli_query($conn,"SELECT * FROM users WHERE nip='{$_SESSION[ "nip" ]}' ");
                  $row = mysqli_fetch_assoc($sql);
                  $username = $row['username'];
                  $nama_lengkap = $row['nama_lengkap'];
                  $nip = $row['nip'];
                  $email = $row['email'];
                  $jabatan = $row['jabatan'];
                  $golongan = $row['golongan'];
                  ?>
                  <label for="c_foto">UPLOAD FOTO</label>
                  <div class="col s12 file-field input-field">
                      <div class="btn float-right">
                        <span>File</span>
                        <input type="file" name="c_foto" id="c_foto">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                      <div class="card-alert card red lighten-5" id= "error1" style="display: none;">
                        <div class="card-content red-text">
                          <p>File foto harus berekstensi png/jpg/jpeg</p>
                        </div>
                      </div>
                  </div>
                  <div class="col s12 input-field">
                  <input type="text" id="username2" name="username2" value="<?= $username;?>"/>
                      <label for="username">USERNAME</label>
                      <div class="card-alert card red lighten-5" id= "error2" style="display: none;">
                        <div class="card-content red-text">
                          <p>Username tidak boleh kosong</p>
                        </div>
                      </div>
                  </div>
                  <div class="col s12 input-field">
                  <input type="text" id="nama_lengkap2" name="nama_lengkap2" value="<?= $nama_lengkap;?>"/>
                      <label for="nama_lengkap">NAMA</label>
                      <div class="card-alert card red lighten-5" id= "error3" style="display: none;">
                        <div class="card-content red-text">
                          <p>Nama tidak boleh kosong</p>
                        </div>
                      </div>
                  </div>
                  <input type="hidden" id="nip2" name="nip2" value="<?= $nip;?>"/>
                  <div class="col s12 input-field">
                      <select class="form-control form-control-lg form-select" name="jabatan2" id="jabatan2">
                        <option value="Kepala BPS Kabupaten Dompu" <?php if($jabatan=="Kepala BPS Kabupaten Dompu") echo 'selected="selected"'; ?>>Kepala BPS Kabupaten Dompu</option>
                        <option value="Kepala Sub Bagian Umum" <?php if($jabatan=="Kepala Sub Bagian Umum") echo 'selected="selected"'; ?>>Kepala Sub Bagian Umum</option>
                        <option value="Koordinator Fungsi Statistik Sosial" <?php if($jabatan=="Koordinator Fungsi Statistik Sosial") echo 'selected="selected"'; ?>>Koordinator Fungsi Statistik Sosial</option>
                        <option value="Koordinator Fungsi Statistik Distribusi" <?php if($jabatan=="Koordinator Fungsi Statistik Distribusi") echo 'selected="selected"'; ?>>Koordinator Fungsi Statistik Distribusi</option>
                        <option value="Koordinator Fungsi NWAS" <?php if($jabatan=="Koordinator Fungsi NWAS") echo 'selected="selected"'; ?>>Koordinator Fungsi NWAS</option>
                        <option value="Koordinator Fungsi IPDS" <?php if($jabatan=="Koordinator Fungsi IPDS") echo 'selected="selected"'; ?>>Koordinator Fungsi IPDS</option>
                        <option value="Staff Sub Bagian Umum" <?php if($jabatan=="Staff Sub Bagian Umum") echo 'selected="selected"'; ?>>Staff Sub Bagian Umum</option>
                        <option value="Staff Fungsi Statistik Sosial" <?php if($jabatan=="Staff Fungsi Statistik Sosial") echo 'selected="selected"'; ?>>Staff Fungsi Statistik Sosial</option>
                        <option value="Staff Fungsi Statistik Distribusi" <?php if($jabatan=="Staff Fungsi Statistik Distribusi") echo 'selected="selected"'; ?>>Staff Fungsi Statistik Distribusi</option>
                        <option value="Staff Fungsi Statistik Produksi" <?php if($jabatan=="Staff Fungsi Statistik Produksi") echo 'selected="selected"'; ?>>Staff Fungsi Statistik Produksi</option>
                        <option value="Staff Fungsi NWAS" <?php if($jabatan=="Staff Fungsi NWAS") echo 'selected="selected"'; ?>>Staff Fungsi NWAS</option>
                        <option value="Staff Fungsi IPDS" <?php if($jabatan=="Staff Fungsi IPDS") echo 'selected="selected"'; ?>>Staff Fungsi IPDS</option>
                        <option value="KSK Kecamatan Huu" <?php if($jabatan=="KSK Kecamatan Huu") echo 'selected="selected"'; ?>>KSK Kecamatan Huu</option>
                        <option value="KSK Kecamatan Manggelewa" <?php if($jabatan=="KSK Kecamatan Manggelewa") echo 'selected="selected"'; ?>>KSK Kecamatan Manggelewa</option>
                        <option value="KSK Kecamatan Pekat" <?php if($jabatan=="KSK Kecamatan Pekat") echo 'selected="selected"'; ?>>KSK Kecamatan Pekat</option>
                        <option value="KSK Kecamatan Woja" <?php if($jabatan=="KSK Kecamatan Woja") echo 'selected="selected"'; ?>>KSK Kecamatan Woja</option>
                        <option value="Fungsional Umum" <?php if($jabatan=="Fungsional Umum") echo 'selected="selected"'; ?>>Fungsional Umum</option>
                        <option value="Fungsional Statistisi" <?php if($jabatan=="Fungsional Statistisi") echo 'selected="selected"'; ?>>Fungsional Statistisi</option>
                        <option value="Fungsional Pranata Komputer" <?php if($jabatan=="Fungsional Pranata Komputer") echo 'selected="selected"'; ?>>Fungsional Pranata Komputer</option>
                      </select>
                      <label for="jabatan">JABATAN</label>
                  </div>
                  <div class="col s12 input-field">
                      <select class="form-control form-control-lg form-select" name="golongan2" id="golongan2">
                        <option value="Pengatur Muda Tk I ( II/a )" <?php if($golongan=="Pengatur Muda Tk I ( II/a )") echo 'selected="selected"'; ?>>Pengatur Muda Tk I ( II/a )</option>
                        <option value="Pengatur   ( II/c )" <?php if($golongan=="Pengatur   ( II/c )") echo 'selected="selected"'; ?>>Pengatur   ( II/c )</option>
                        <option value="Pengatur Tk I   ( II/d )" <?php if($golongan=="Pengatur Tk I   ( II/d )") echo 'selected="selected"'; ?>>Pengatur Tk I   ( II/d )</option>
                        <option value="Penata Muda  ( III/a )" <?php if($golongan=="Penata Muda  ( III/a )") echo 'selected="selected"'; ?>>Penata Muda  ( III/a )</option>
                        <option value="Penata Muda Tk I  ( III/b )" <?php if($golongan=="Penata Muda Tk I  ( III/b )") echo 'selected="selected"'; ?>>Penata Muda Tk I  ( III/b )</option>
                        <option value="Penata  ( III/c )" <?php if($golongan=="Penata  ( III/c )") echo 'selected="selected"'; ?>>Penata  ( III/c )</option>
                        <option value="Penata Tk I  ( III/d )" <?php if($golongan=="Penata Tk I  ( III/d )") echo 'selected="selected"'; ?>>Penata Tk I  ( III/d )</option>
                        <option value="Pembina Tk I ( IV/b )" <?php if($golongan=="Pembina Tk I ( IV/b )") echo 'selected="selected"'; ?>>Pembina Tk I ( IV/b )</option>
                      </select>
                      <label for="golongan">PANGKAT DAN GOLONGAN</label>
                  </div>

                  <div class="col s12 input-field">
                      <input type="email" id="r_email" name="r_email" value="<?= $email;?>"/>
                      <label for="r_email">EMAIL</label>
                      <div class="card-alert card red lighten-5" id= "error4" style="display: none;">
                        <div class="card-content red-text">
                          <p>Email tidak boleh kosong</p>
                        </div>
                      </div>
                  </div>
                  <div class="col s12 input-field">
                    <input type="password" id="r_password" name="r_password" />
                    <label for="r_password">PASSWORD</label>
                    <span type = "button" id="v_r_password" name="v_r_password">
                      <i class="material-icons prefix" id="visb_r_password">visibility</i>
                    </span>
                  </div>
                  <div class="col s12 input-field">
                      <input type="password" id="cr_password" name="cr_password" />
                      <label for="cr_password">KONFIRMASI PASSWORD</label>
                      <span type = "button" id="v_cr_password" name="v_cr_password">
                      <i class="material-icons prefix" id="visb_cr_password">visibility</i>
                      </span>
                      <div class="card-alert card red lighten-5" id= "error5" style="display: none;">
                        <div class="card-content red-text">
                          <p>Konfirmasi password salah</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

          <div class="row">
          <!-- users edit account form ends -->
                    <div class="input-field col s12">
                        <button  type="submit" class="btn cyan waves-effect waves-light right" >SIMPAN
                        <i class="material-icons left">save</i>
                        </button>
                    </div>
                  </div>      
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.js"></script>
    <script>
      $('#v_r_password').on('click',function(){
        var input = $("#r_password");
        if (input.attr("type") === "password") {          
          $("#visb_r_password").text("visibility_off");
          input.attr("type", "text");
        } else {
          $("#visb_r_password").text("visibility");
          input.attr("type", "password");
        }
      })
      $('#v_cr_password').on('click',function(){
        var input = $("#cr_password");
        if (input.attr("type") === "password") {          
          $("#visb_cr_password").text("visibility_off");
          input.attr("type", "text");
        } else {
          $("#visb_cr_password").text("visibility");
          input.attr("type", "password");
        }
      })
    </script>
    <script>
        $(document).ready(function(){
          $('#e_profil').on('submit',function(e){
            e.preventDefault();
            var c_foto = $("#c_foto").val();
            var extension=$('#c_foto').val().replace(/^.*\./, '');
            var username2 = $("#username2").val();
            var nama_lengkap2 = $("#nama_lengkap2").val();
            var nip2 = $("#nip2").val();
            var jabatan2 = $("#jabatan2").val();
            var golongan2 = $("#golongan2").val();
            var r_email = $("#r_email").val();
            var r_password = $("#r_password").val();
            var cr_password = $("#cr_password").val(); 

            if ($.inArray(extension, ['png','jpg','jpeg']) == -1 && extension != "") {
              $("#error1").css('display', 'block');
              $("#error2").css('display', 'none');
              $("#error3").css('display', 'none');
              $("#error4").css('display', 'none');
              $("#error5").css('display', 'none');
            } else if(username2 == ""){
              $("#error1").css('display', 'none');
              $("#error2").css('display', 'block');
              $("#error3").css('display', 'none');
              $("#error4").css('display', 'none');
              $("#error5").css('display', 'none');
            } else if(nama_lengkap2 == ""){
              $("#error1").css('display', 'none');
              $("#error2").css('display', 'none');
              $("#error3").css('display', 'block');
              $("#error4").css('display', 'none');
              $("#error5").css('display', 'none');
            } else if(r_email == ""){
              $("#error1").css('display', 'none');
              $("#error2").css('display', 'none');
              $("#error3").css('display', 'none');
              $("#error4").css('display', 'block');
              $("#error5").css('display', 'none');
            } else if (r_password != cr_password) {
              $("#error1").css('display', 'none');
              $("#error2").css('display', 'none');
              $("#error3").css('display', 'none');
              $("#error4").css('display', 'none');
              $("#error5").css('display', 'block');
            } 
              else {
                $.ajax({
                url:"k_edit_profil.php",
                method:"POST",
                data:new FormData(this),
                contentType:false,
                processData:false,
              }).done(function(resp) {
                Swal.fire({
                    icon:"success",
                    title:"Berhasil ",
                    text:"Profil berhasil diedit",
                }).then(function() {
                window.location = "profil.php";
                });
              })
            } 
          })
        })
    </script>
  </body>
</html>