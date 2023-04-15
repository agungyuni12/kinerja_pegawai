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
    <link rel="stylesheet" type="text/css" href="../assets/vendors/sweetalert/sweetalert.css">
  <script src="../assets/vendors/sweetalert/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/css/custom/preloader.css">
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <!-- BEGIN: Header-->
    <?php include '../menu/navbar.php' ;?>
    <!-- END: Header-->
    <!-- BEGIN: SideNav-->
    <?php $page='hasil'; include '../menu/sidebar.php' ;?>
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        
      <div id="breadcrumbs-wrapper" data-image="../assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>PENILAIAN PEGAWAI</span></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col s12">
          <div class="container">
            <!-- users list start -->
<section class="users-list-wrapper section">
    <div class="card">
      <div class="card-content">
        <!-- datatable start -->
        <div class="responsive-table">
          <table id="scroll-vert-hor" class="display nowrap" style="width:100%">
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
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Memahami dan memenuhi kebutuhan masyarakat</th>
                <th>Ramah, cekatan, solutif, dan dapat diandalkan</th>
                <th>Melakukan perbaikan tiada henti</th>
                <th>Melaksanakan tugas dengan jujur, bertanggung jawab, cermat, serta disiplin dan berintegritas tinggi.</th>
                <th>Menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif dan efisien</th>
                <th>Tidak menyalahgunakan kewenangan jabatan</th>
                <th>Meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah</th>
                <th>Membantu orang lain belajar</th>
                <th>Melaksanakan tugas dengan kualitas terbaik</th>
                <th>Menghargai setiap orang apapun latar belakangnya</th>
                <th>Suka menolong orang lain</th>
                <th>Membangun lingkungan kerja yang kondusif</th>
                <th>Memegang teguh ideologi Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945</th>
                <th>Setia kepada NKRI serta pemerintahan yang sah</th>
                <th>Menjaga nama baik sesama ASN, pimpinan, instansi dan negara, serta menjaga rahasia jabatan dan negara</th>
                <th>Cepat menyesuaikan diri menghadapi perubahan</th>
                <th>Terus berinovasi dan mengembangkan kreativitas</th>
                <th>Memberi kesempatan kepada berbagai pihak untuk berkontribusi</th>
                <th>Terbuka dalam bekerja sama untuk menghasilkan nilai tambah</th>
                <th>Menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <?php
                  $sql = mysqli_query($conn,"SELECT users.nip as users_nip, users.nama_lengkap as users_nama, ROUND(AVG(penilaian.ber1),2) as ber1, ROUND(AVG(penilaian.ber2),2) as ber2, ROUND(AVG(penilaian.ber3),2) as ber3, ROUND(AVG(penilaian.aku1),2) as aku1, ROUND(AVG(penilaian.aku2),2) as aku2, ROUND(AVG(penilaian.aku3),2) as aku3, ROUND(AVG(penilaian.kom1),2) as kom1, ROUND(AVG(penilaian.kom2),2) as kom2, ROUND(AVG(penilaian.kom3),2) as kom3, ROUND(AVG(penilaian.har1),2) as har1, ROUND(AVG(penilaian.har2),2) as har2, ROUND(AVG(penilaian.har3),2) as har3, ROUND(AVG(penilaian.loy1),2) as loy1, ROUND(AVG(penilaian.loy2),2) as loy2, ROUND(AVG(penilaian.loy3),2) as loy3, ROUND(AVG(penilaian.ada1),2) as ada1, ROUND(AVG(penilaian.ada2),2) as ada2, ROUND(AVG(penilaian.kol1),2) as kol1, ROUND(AVG(penilaian.kol2),2) as kol2, ROUND(AVG(penilaian.kol3),2) as kol3 FROM users LEFT JOIN penilaian ON users.nip = penilaian.nip_dinilai WHERE users.nama_lengkap != 'admin' AND users.nama_lengkap != 'Isa' GROUP BY users.nip ORDER BY users.nama_lengkap");
                  $id=1;
                  if ($sql!= false && $sql->num_rows > 0) {
                    // output data of each row
                    while($row = $sql->fetch_assoc()) {
                          $nip = $row['users_nip'];
                          $nama = $row['users_nama'];
                          $ber1 = $row ['ber1'];
                          $ber2 = $row ['ber2'];
                          $ber3 = $row ['ber3'];
                          $aku1 = $row ['aku1'];
                          $aku2 = $row ['aku2'];
                          $aku3 = $row ['aku3'];
                          $kom1 = $row ['kom1'];
                          $kom2 = $row ['kom2'];
                          $kom3 = $row ['kom3'];
                          $har1 = $row ['har1'];
                          $har2 = $row ['har2'];
                          $har3 = $row ['har3'];
                          $loy1 = $row ['loy1'];
                          $loy2 = $row ['loy2'];
                          $loy3 = $row ['loy3'];
                          $ada1 = $row ['ada1'];
                          $ada2 = $row ['ada2'];
                          $kol1 = $row ['kol1'];
                          $kol2 = $row ['kol2'];
                          $kol3 = $row ['kol3'];
              ?>
                  <td><?= $id++ ;?></td>
                  <td><?= $nip ;?></td>
                  <td><?= $nama ;?></td>
                  <td><?= $ber1 ;?></td>
                  <td><?= $ber2 ;?></td>
                  <td><?= $ber3 ;?></td>
                  <td><?= $aku1 ;?></td>
                  <td><?= $aku2 ;?></td>
                  <td><?= $aku3 ;?></td>
                  <td><?= $kom1 ;?></td>
                  <td><?= $kom2 ;?></td>
                  <td><?= $kom3 ;?></td>
                  <td><?= $har1 ;?></td>
                  <td><?= $har2 ;?></td>
                  <td><?= $har3 ;?></td>
                  <td><?= $loy1 ;?></td>
                  <td><?= $loy2 ;?></td>
                  <td><?= $loy3 ;?></td>
                  <td><?= $ada1 ;?></td>
                  <td><?= $ada2 ;?></td>
                  <td><?= $kol1 ;?></td>
                  <td><?= $kol2 ;?></td>
                  <td><?= $kol3 ;?></td>
                </tr>
                <?php
                  }
                }
                ?>
            </tbody>
          </div>
          </table>
        </div>
        <!-- datatable ends -->
      </div>
    </div>
</section>
<!-- users list ends --><!-- START RIGHT SIDEBAR NAV -->
<?php include '../menu/footer.php' ;?>

    <script>
            document.querySelector('.content').style.display="none";
            setTimeout(function(){
                document.querySelector('.preloader-wrapper').classList.remove('active');
                document.querySelector('.content').style.display="block";
                document.querySelector('.loader').style.display="none";
            },2000);
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

    <script src="../assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/vendors/data-tables/js/dataTables.select.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../assets/js/scripts/advance-ui-modals.min.js"></script>
    <script src="../assets/js/scripts/data-tables.min.js"></script>
    <script src="../assets/js/scripts/advance-ui-media.min.js"></script>
    <script src="../assets/js/plugins.min.js"></script>

    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>