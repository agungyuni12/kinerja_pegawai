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
    <!-- <link rel="stylesheet" type="text/css" href="../assets/vendors/flag-icon/css/flag-icon.min.css"> -->
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
    <?php include '../menu/navbar.php' ;?>
    <!-- END: Header-->
    <!-- BEGIN: SideNav-->
    <?php $page='ckp'; include '../menu/sidebar.php' ;?>
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        
      <div id="breadcrumbs-wrapper" data-image="../assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>CAPAIAN KINERJA PEGAWAI</span></h5>
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

<div class="loader" id="loader2" style="display:none;">
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
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Lihat</th>
                <th>Kirim</th>
                <th>Export</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $sql1=mysqli_query($conn,"SELECT month(kinerja_tanggal) as bulan, year(kinerja_tanggal) as tahun FROM kinerja WHERE kinerja_nip = '{$_SESSION[ "nip" ]}' AND kinerja_kehadiran = 'HADIR' GROUP BY month(kinerja_tanggal),year(kinerja_tanggal) ORDER BY year(kinerja_tanggal),month(kinerja_tanggal)");
                $id=1;
                $status='';
                if ($sql1!= false && $sql1->num_rows > 0) {
                    // output data of each row
                    while($row1 = $sql1->fetch_assoc()) {
                        $bulan=$row1["bulan"];
                        $tahun=$row1["tahun"];
                        $nama_bulan = date("F", mktime(0, 0, 0, $bulan, 10));
                        ?>
                        <tr>
                            <td><?php echo $id++;?></td>
                            <td><?php echo $tahun;?></td> 
                            <td><?php echo $nama_bulan;?></td>
                            <td><a href="#modal1_<?php echo $id-1;?>" class="modal-trigger"><i class="material-icons">remove_red_eye</i></a>
                            <div id="modal1_<?php echo $id-1;?>" class="modal">
                              <div class="modal-content">
                                <div class="modal-header">
                                <h4><?php echo $nama_bulan." ".$tahun;?></h4>
                                </div>
                              
                                <div class="modal-body">
                                <div class="responsive-table">
                                  <table  id="viewdata<?= $id-1;?>" class="display nowrap" style="width:100%">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Kegiatan</th>
                                        <th>Satuan</th>
                                        <th>Kuantitas</th>
                                        <th>Tingkat Kualitas</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql2=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_nip = '{$_SESSION[ "nip" ]}' AND kinerja_kehadiran = 'HADIR' AND year(kinerja_tanggal) = '$tahun' AND month(kinerja_tanggal) = '$bulan' ");
                                        $id_lihat=1;
                                        if ($sql2!= false && $sql2->num_rows > 0) {
                                          // output data of each row
                                            while($row2 = $sql2->fetch_assoc()) {
                                              $kegiatan1=$row2["kinerja_kegiatan"];
                                              $satuan1=$row2["kinerja_satuan"];
                                              $kuantitas1=$row2["kinerja_kuantitas"];
                                              $t_kualitas1=$row2["kinerja_angka_kredit"];
                                              ?>
                                          <tr>
                                            <td><?php echo $id_lihat++; ?></td>
                                            <td><?php echo $kegiatan1; ?></td>
                                            <td><?php echo $satuan1; ?></td>
                                            <td><?php echo $kuantitas1; ?></td>
                                            <td><?php echo $t_kualitas1; ?></td>
                                          </tr>
                                              <?php
                                                              
                                            }
                                        }
                                        ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>

                              </div>
                              <div class="modal-footer">
                              <a class="modal-action modal-close btn cyan waves-effect waves-light right ">OK</a>
                              </div>
                            </div>
                          
                            </td>
                            <td><a id="openmodal2_<?php echo $id-1;?>" href="#modal2_<?php echo $id-1;?>" class="" onclick="buka<?php echo $id-1;?>();"><i class="material-icons">send</i></a>

                            <div id="modal2_<?php echo $id-1;?>" class="modal">
                              <div class="modal-content">
                                <h4>PENGIRIMAN</h4>
                                <span><p>Apakah anda yakin untuk mengirim data bulan <?php echo $nama_bulan." ".$tahun;?>?</p></span>  
                              </div>
                              <div class="modal-footer">
                                <div class="row">
                                  <div class="input-field col s12">
                                    <a class="modal-action modal-close waves-effect waves-green btn-flat" >CLOSE</a>
                                    <button class="btn cyan waves-effect waves-light right" id="kirim<?php echo $id-1;?>">KIRIM
                                      <i class="material-icons right">send</i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                                        
                            </td>
                            <td><a href="ekspor_ckp.php?ckp=<?= str_replace(" ","-",$_SESSION['nama_lengkap']); ?>&bulan=<?= $bulan; ?>&tahun=<?= $tahun; ?>"><i class="material-icons">launch</i></a>
                          
                           
                            </td>  
                            <td>
                              <?php

                              $sql3=mysqli_query($conn,"SELECT COUNT(kinerja_angka_kredit) AS angka_kredit FROM kinerja WHERE kinerja_nip = '{$_SESSION[ "nip" ]}' AND month(kinerja_tanggal)='$bulan' and year(kinerja_tanggal)='$tahun' and kinerja_angka_kredit is not null and kinerja_angka_kredit != 0");
                              $row3=mysqli_fetch_array($sql3);
                              $angka_kredit = $row3['angka_kredit'];

                              $sql4=mysqli_query($conn,"SELECT COUNT(kinerja_angka_kredit) AS angka_kredit FROM kinerja WHERE kinerja_nip = '{$_SESSION[ "nip" ]}' AND month(kinerja_tanggal)='$bulan' and year(kinerja_tanggal)='$tahun' and kinerja_angka_kredit=0");
                              $row4 = mysqli_fetch_array($sql4);
                              $angka_kredit2 = $row4['angka_kredit'];

                              if(($tahun == date('Y') && $bulan < date('n')) || $tahun < date('Y')){
                                  if ($angka_kredit == 0) {
                                      if ($angka_kredit2 == 0) {
                                          $status='buka';
                                          ?>
                                          <span class="chip green lighten-5">
                                          <span class="green-text">Buka<span>
                                          </span>
                                          <?php
                                      } else {
                                        $status='terkirim';
                                        ?>
                                        <span class="chip purple lighten-5">
                                        <span class="purple-text">Terkirim<span>
                                        </span>
                                        <?php
                                      }
                                      
                                  } else {
                                    $status='selesai';
                                    ?>
                                    <span class="chip blue lighten-5">
                                    <span class="blue-text">Selesai</span>
                                    </span>
                                    <?php
                                  }
                                  
                              } else{
                                $status='tutup';
                                ?>
                                  <span class="chip black lighten-5">
                                    <span class="white-text">Tutup</span>
                                  </span>
                               <?php
                              }
                              ?>

                            <script>
                              function buka<?php echo $id-1;?>(){
                                var status = '<?php echo $status;?>';
                                if (status == 'buka') {
                                  document.getElementById('openmodal2_<?php echo $id-1;?>').classList.add('modal-trigger');   
                                } else if (status == 'terkirim'){
                                  swal({
			                            icon:"warning",
			                            title:"Data telah dikirim",
		                               });
                                } else if (status == 'selesai'){
                                  swal({
			                            icon:"warning",
			                            title:"Data sudah dinilai",
		                               });
                                } else if (status == 'tutup'){
                                  swal({
			                            icon:"error",
			                            title:"Data belum bisa dikirim",
		                               });
                                }
                             
                              }

                              
                              $(document).ready(function() {
                                $('#viewdata<?= $id-1;?>').DataTable({
    
                                  ordering: true,"autoWidth": false,
                                  paging: true,
                                  searching: false,
                                  lengthChange:false,
                                });
                              });

                              var spinner = $('#loader2');
                               $("#kirim<?php echo $id-1;?>" ).click(function() {
                                  var bulan = '<?php echo $bulan;?>';
                                  var tahun = '<?php echo $tahun;?>';
                                  spinner.show();
                                  $("#modal2_<?php echo $id-1;?>").css("display", "none");
                                  $(".modal-overlay").css("display", "none");
                                  $.ajax({
                                  type: "POST",
                                  url: 'kirim_penilai.php',
                                  data: {
                                    bulan:bulan,
                                    tahun:tahun,
                                  },
                                  success: function(result){
                                      spinner.hide();
                                      swal({
			                                icon:"success",
			                                title:"Berhasil ",
                                      text:" Data berhasil dikirim",
		                                  }).then(function() {
	                                      window.location = "ckp.php";
	                                    	});}
                                  });
                               })

                            


                              </script>

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