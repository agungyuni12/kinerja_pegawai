<?php 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
include '../login/config.php';
$url_nama = $_GET['nama'];
$nama_dinilai = str_replace("-"," ",$url_nama);
$nip_dinilai = $_GET['nip'];
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
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/vertical-dark-menu-template/style.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/custom/preloader.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/sweetalert/sweetalert.css">
  <script src="../assets/vendors/sweetalert/sweetalert.min.js"></script>
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php include '../menu/navbar.php' ;?>
    <!-- END: Header-->
    <!-- BEGIN: SideNav-->
    <?php $page='penilaian_pegawai'; include '../menu/sidebar.php' ;?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="../assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>FORM PENILAIAN PEGAWAI</span></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="seaction">
              <div class="row">
                <div class="col s12">
                  <div id="basic-form" class="card card card-default scrollspy">
                    <div class="card-content">
                      <form action="kirim_penilaian_pegawai.php" method="POST" enctype="multipart/form-data">
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
                                  <h5>Penilaian <?= $nama_dinilai;?></h5>
                                  <thead>
                                      <tr>
                                        <th>Indikator</th>
                                        <th>Nilai</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <input type="hidden" name="nip" id="nip" value="<?= $_SESSION['nip'];?>">
                                    <input type="hidden" name="nip_dinilai" id="nip_dinilai" value="<?= $nip_dinilai;?>">
                                    <input type="hidden" name="nama_dinilai" id="nama_dinilai" value="<?= $nama_dinilai;?>">
                                      <tr>
                                      <th colspan="2" class="center-align">Berorientasi Pelayanan</th>
                                      </tr>
                                      <tr>
                                        <td>Memahami dan memenuhi kebutuhan masyarakat</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="ber1" id="ber1">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Ramah, cekatan, solutif, dan dapat diandalkan</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="ber2" id="ber2">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Melakukan perbaikan tiada henti</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="ber3" id="ber3">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                      <th colspan="2" class="center-align">Akuntabel</th>
                                      </tr>
                                      <tr>
                                        <td>Melaksanakan tugas dengan jujur, bertanggung jawab, cermat, serta disiplin dan berintegritas tinggi.</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="aku1" id="aku1">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif dan efisien</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="aku2" id="aku2">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tidak menyalahgunakan kewenangan jabatan</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="aku3" id="aku3">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                      <th colspan="2" class="center-align">Kompeten</th>
                                      </tr>
                                      <tr>
                                        <td>Meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="kom1" id="kom1">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Membantu orang lain belajar</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="kom2" id="kom2">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Melaksanakan tugas dengan kualitas terbaik</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="kom3" id="kom3">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <th colspan="2" class="center-align">Harmonis</th>
                                      </tr>
                                      <tr>
                                        <td>Menghargai setiap orang apapun latar belakangnya</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="har1" name="har1">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Suka menolong orang lain</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="har2" id="har2">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Membangun lingkungan kerja yang kondusif</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="har3" id="har3">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <th colspan="2" class="center-align">Loyal</th>
                                      </tr>
                                      <tr>
                                        <td>Memegang teguh ideologi Pancasila dan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="loy1" id="loy1">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Setia kepada NKRI serta pemerintahan yang sah</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="loy2" id="loy2">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Menjaga nama baik sesama ASN, pimpinan, instansi dan negara, serta menjaga rahasia jabatan dan negara</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="loy3" id="loy3">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <th colspan="2" class="center-align">Adaptif</th>
                                      </tr>
                                      <tr>
                                        <td>Cepat menyesuaikan diri menghadapi perubahan</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="ada1" id="ada1">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Terus berinovasi dan mengembangkan kreativitas</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="ada2" id="ada2">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                      <th colspan="2" class="center-align">Kolaboratif</th>
                                      </tr>
                                      <tr>
                                        <td>Memberi kesempatan kepada berbagai pihak untuk berkontribusi</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="kol1" id="kol1">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Terbuka dalam bekerja sama untuk menghasilkan nilai tambah</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="kol2" id="kol2">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                      <tr>
                                        <td>Menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama</td>
                                        <td>
                                          <div class="input-field col">
                                            <select name="kol3" id="kol3">
                                              <option value="">Nilai</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                            <label>Nilai</label>
                                          </div>
                                        </td>
                                      </tr>
                                  </tbody>
                                </div>
                            </table>     
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right modal-trigger" type="submit" name="nilai" id="nilai">KIRIM
                                  <i class="material-icons right">send</i>
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div> 
  

    <!-- BEGIN: Footer-->
    <?php include '../menu/footer.php' ;?>

<script src="../assets/js/jquery-3.6.0.min.js"></script>

<script>
 document.querySelector('.content').style.display="none";
            setTimeout(function(){
                document.querySelector('.preloader-wrapper').classList.remove('active');
                document.querySelector('.content').style.display="block";
                document.querySelector('.loader').style.display="none";
            },2000);
</script>
<script>
            var $role= '<?= $_SESSION['role'];?>';
            if($role=='admin'){
              document.querySelector('#monitor1').style.display="block";
              document.querySelector('#hasil_penilaian').style.display="block";
            };
            if ($role=='penilai' || $role=='pengguna') {
              document.querySelector('#penilaian_pegawai').style.display="block";
            };
</script>
<script>
      const tekan = document.querySelector('#nilai');
      tekan.addEventListener('click',function(e){
        var ber1 = $("#ber1").val();
        var ber2 = $("#ber2").val();
        var ber3 = $("#ber3").val();
        var aku1 = $("#aku1").val();
        var aku2 = $("#aku2").val();
        var aku3 = $("#aku3").val();
        var kom1 = $("#kom1").val();
        var kom2 = $("#kom2").val();
        var kom3 = $("#kom3").val();
        var har1 = $("#har1").val();
        var har2 = $("#har2").val();
        var har3 = $("#har3").val();
        var loy1 = $("#loy1").val();
        var loy2 = $("#loy2").val();
        var loy3 = $("#loy3").val();
        var ada1 = $("#ada1").val();
        var ada2 = $("#ada2").val();
        var kol1 = $("#kol1").val();
        var kol2 = $("#kol2").val();
        var kol3 = $("#kol3").val();

        if(ber1==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(ber2==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(ber3==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(aku1==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(aku2==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(aku3==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(kom1==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(kom2==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(kom3==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(har1==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(har2==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(har3==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(loy1==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(loy2==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(loy3==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(ada1==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(ada2==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(kol1==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(kol2==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else if(kol3==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Semua indikator wajib dinilai'
          });
        } else{
          return true;
        }
        e.preventDefault();
    })
</script>


<script>
$(function() {
  $('form').submit(function(e) {
    e.preventDefault();
    var fd = new FormData(this);
       $.ajax({
          url: 'kirim_penilaian_pegawai.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
       }).done(function(resp) {
            swal({
                  icon:"success",
                  title:"Berhasil ",
                  text:" Data berhasil disimpan",
		            }).then(function() {
                            window.location = "nilai_pegawai.php";
                            });
       });
  });
});
</script>
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../assets/js/plugins.min.js"></script>
    <script src="../assets/js/search.min.js"></script>
    <!-- <script src="../assets/js/custom/custom-script.min.js"></script> -->
    <!-- <script src="../assets/js/scripts/customizer.min.js"></script> -->
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../assets/js/scripts/advance-ui-modals.min.js"></script>
  </body>
</html>