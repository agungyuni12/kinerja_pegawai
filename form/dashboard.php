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
    <link rel="stylesheet" type="text/css" href="../assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/data-tables/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pages/advance-ui-media.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pages/data-tables.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom/preloader.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php include '../menu/navbar.php' ;?>
    <!-- END: Header-->
    <!-- BEGIN: SideNav-->
    <?php $page='dashboard'; include '../menu/sidebar.php' ;?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="../assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>DASHBOARD</span></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="seaction">

  <!--Basic Form-->

  <!-- jQuery Plugin Initialization -->
  <div class="row">
    <div class="col s12">
          <div class="row">
            <div class="col s12">
            <div class="card-panel">
              <form method="post">
                <div class="row">
                  <div class="input-field col m2 s6">
                    <!-- <i class="material-icons prefix">event</i> -->
                    <input id="tanggal_mulai" type="date" name="tgl_mulai">
                    <label for="tanggal_mulai">TANGGAL MULAI</label>
                  </div>
                  <div class="input-field col m2 s6">
                    <!-- <i class="material-icons prefix">event</i> -->
                    <input id="tanggal_selesai" type="date" name="tgl_selesai">
                    <label for="tanggal_selesai">TANGGAL SELESAI</label>
                  </div>
                  <div class="input-field col m4 s12">
                    <div class="input-field col s12">
                      <button class="btn cyan waves-effect waves-light" type="submit" name="filter_tanggal">
                      <i class="material-icons left">filter_list</i>FILTER</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
              <div class="card-panel">
              <table id="page-length-option" class="display">
              <div class="loader">
<div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
</div>
<div class="content">

                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Kehadiran</th>
                    <th>NIP</th>
                    <th>Kegiatan</th>
                    <th>Keterangan</th>
                    <th>Bukti</th>
                  </tr>
                </thead>
                <tbody>                
                    <?php
                if(isset($_POST['filter_tanggal'])){
                  $mulai = $_POST['tgl_mulai'];
                  $selesai = $_POST['tgl_selesai'];

                  if($mulai != null || $selesai!=null){
                    if($_SESSION['jabatan']=="admin"){
                      $sql=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_tanggal BETWEEN '$mulai' AND DATE_ADD('$selesai',INTERVAL 1 DAY) ORDER BY kinerja_tanggal desc");
                    }
                    else {
                      $sql=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_nip = '{$_SESSION[ "nip" ]}' AND kinerja_tanggal BETWEEN '$mulai' AND DATE_ADD('$selesai',INTERVAL 1 DAY) ORDER BY kinerja_tanggal desc");
                    }
                  }
                  else{
                    if($_SESSION['jabatan']=="admin"){
                      $sql=mysqli_query($conn,"SELECT * FROM kinerja ORDER BY kinerja_tanggal desc");
                    }
                    else {
                      $sql=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_nip = '{$_SESSION[ "nip" ]}' ORDER BY kinerja_tanggal desc");
                    }
                  }
                }
                else{
                  if($_SESSION['jabatan']=="admin"){
                    $sql=mysqli_query($conn,"SELECT * FROM kinerja ORDER BY kinerja_tanggal desc");
                  }
                  else {
                    $sql=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_nip = '{$_SESSION[ "nip" ]}' ORDER BY kinerja_tanggal desc");
                  }
                }
                if ($sql!= false && $sql->num_rows > 0) {
                    // output data of each row
                    while($row = $sql->fetch_assoc()) {
                       echo "<tr><td>".$row["kinerja_nama"]."</td><td>".$row["kinerja_tanggal"]."</td><td>".$row["kinerja_kehadiran"]."</td><td>".$row["kinerja_nip"]."</td><td>".$row["kinerja_kegiatan"]."</td><td>".$row["kinerja_keterangan"]."</td>";
                       ?>
                       <td><img class="materialboxed responsive-img" src="../gambar/<?php echo $row['kinerja_foto'] ?>"></td></tr>
                       <?php
                    }
                  }
                    ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Kehadiran</th>
                    <th>NIP</th>
                    <th>Kegiatan</th>
                    <th>Keterangan</th>
                    <th>Bukti</th>
                  </tr>
                </tfoot>
</div>
              </table>
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
            document.querySelector('.content').style.display="none";
			window.addEventListener('DOMContentLoaded', function(){
                document.querySelector('.preloader-wrapper').classList.remove('active');
                document.querySelector('.content').style.display="block";
                document.querySelector('.loader').style.display="none";
            });
            
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
    <script src="../assets/js/search.min.js"></script>
    <!--<script src="../assets/js/custom/custom-script.min.js"></script>-->
    <!--<script src="../assets/js/scripts/customizer.min.js"></script>-->
    <script src="../assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/vendors/data-tables/js/dataTables.select.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../assets/js/scripts/advance-ui-modals.min.js"></script>
    <script src="../assets/js/scripts/data-tables.min.js"></script>
    <script src="../assets/js/scripts/advance-ui-media.min.js"></script>
    <script src="../assets/js/plugins.min.js"></script>

  </body>
</html>