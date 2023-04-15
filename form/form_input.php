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
    <link rel="stylesheet" type="text/css" href="../assets/vendors/dropify/css/dropify.min.css">
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
    <?php $page='entri'; include '../menu/sidebar.php' ;?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div id="breadcrumbs-wrapper" data-image="../assets/images/gallery/breadcrumb-bg.jpg">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>KINERJA HARIAN PEGAWAI</span></h5>
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
      <div id="basic-form" class="card card card-default scrollspy">
        <div class="card-content">
          <form action="user_act.php" method="post" enctype="multipart/form-data">
          <div class="row">
              <div class="input-field col s12">
                <select id="kehadiran" name="kehadiran" onchange="return namedata(this.value);">
                            <option value="" selected>KEHADIRAN</option>
                            <option value="HADIR">HADIR</option>
                            <option value="SAKIT">SAKIT</option>
                            <option value="IZIN">IZIN</option>
                            <option value="CUTI">CUTI</option>
                </select>
              </div>
            </div>
          
            <div class="row">
              <div class="input-field col s12">
                <input type="text" id="nip" name="nip" readonly value="<?php echo $_SESSION['nip'];?>"/>
                <label for="nip">NIP</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <input type="text" id="nama" name="nama" readonly value="<?php echo $_SESSION['nama_lengkap'];?>" />
                <label for="nama">NAMA</label>
              </div>
            </div>

            <!-- <div id="div_l" class="div_l">
              <div class="row">
                <div class="input-field col m6 s12">
                  <select id= "keg_umum" name="keg_umum">
                            <option value=""selected>PELAKSANAAN</option>
                            <option value="Pencacahan">Pencacahan</option>
                            <option value="Pengawasan">Pengawasan</option>
                            <option value="Pemeriksaan">Pemeriksaan</option>
                            <option value="Entri">Entri</option>
                            <option value="Rapat">Rapat</option>
                  </select>
                </div>
            

                <div class="input-field col m6 s12">
                  <input id="kegiatan" type="text" name="kegiatan" required="required"/>
                  <label for="kegiatan">KEGIATAN</label>
                </div>  
              </div>
            </div> -->

            <div id="divm">
              <div class="row">
                <p>KEGIATAN</p>
                <div class="input-field col s12 m4 l2">
                  <p class="mb-1">
                  <label>
                    <input type="checkbox" id="Check1" name="Check1" onclick="check_1()">
                    <span>Pencacahan</span>
                  </label>
                  </p>
                </div> 
                <div class="input-field col s12 m4 l2">
                  <p class="mb-1">
                  <label>
                  <input type="checkbox" id="Check2" name="Check2"onclick="check_2()">
                    <span>Pengawasan</span>
                  </label>
                  </p>
                </div> 
                <div class="input-field col s12 m4 l2">
                  <p class="mb-1">
                  <label>
                  <input type="checkbox" id="Check3"name="Check3" onclick="check_3()">
                    <span>Pemeriksaan</span>
                  </label>
                  </p>
                </div> 
                <div class="input-field col s12 m4 l2">
                  <p class="mb-1">
                  <label>
                  <input type="checkbox" id="Check4" name="Check4" onclick="check_4()">
                    <span>Entri</span>
                  </label>
                  </p>
                </div>
                <div class="input-field col s12 m4 l2">
                  <p class="mb-1">
                  <label>
                  <input type="checkbox" id="Check5" name="Check5" onclick="check_5()">
                    <span>Rapat</span>
                  </label>
                  </p>
                </div>
                <div class="input-field col s12 m4 l2">
                  <p class="mb-1">
                  <label>
                  <input type="checkbox" id="Check6" name="Check6" onclick="check_6()">
                    <span>Lainnya</span>
                  </label>
                  </p>
                </div>
            
              </div>
            </div>

            <!-- Pencacahan -->
            <div id="div_d" style="display: none;">
              <div class="row">
              <div class="input-field col m6 s12 l6">
                  <input id="pencacahan" type="text" name="pencacahan"/>
                  <label for="pencacahan">PENCACAHAN</label>
                </div>  
                <div class="input-field col s12 m4 l2">
                  <select id="sat_penca" name="sat_penca" onchange="showDiv('penca_hid', this)">
                            <option value=""selected>SATUAN</option>
                            <option value="Dokumen">Dokumen</option>
                            <option value="Hari">Hari</option>
                            <option value="Jam Pelajaran">Jam Pelajaran</option>
                            <option value="Paket">Paket</option>
                            <option value="Blok Sensus">Blok Sensus</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                            <option value="Perusahaan">Perusahaan</option>
                            <option value="Lainnya">Lainnya</option>
                  </select>
                </div>

                <div id="penca_hid" style="display: none;">
                <div class="input-field col s12 m4 l2">
                  <input id="sat_lain_penca" type="text" name="sat_lain_penca"/>
                  <label for="sat_lain_penca">SATUAN LAINNYA</label>
                </div>

                </div>
                <div class="input-field col s12 m4 l2">
                  <input id="kuan_penca" type="number" name="kuan_penca">
                  <label for="kuan_penca">KUANTITAS</label>
                </div>  

              </div>
            </div>

                        <!-- Pengawasan -->
              <div id="div_u" style="display: none;">
              <div class="row">
              <div class="input-field col m6 s12 l6">
                  <input id="pengawasan" type="text" name="pengawasan" />
                  <label for="pengawasan">PENGAWASAN</label>
                </div>  
                <div class="input-field col s12 m4 l2">
                  <select id="sat_penga" name="sat_penga" onchange="showDiv('penga_hid', this)">
                            <option value=""selected>SATUAN</option>
                            <option value="Dokumen">Dokumen</option>
                            <option value="Hari">Hari</option>
                            <option value="Jam Pelajaran">Jam Pelajaran</option>
                            <option value="Paket">Paket</option>
                            <option value="Blok Sensus">Blok Sensus</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                            <option value="Perusahaan">Perusahaan</option>
                            <option value="Lainnya">Lainnya</option>
                  </select>
                </div>

                <div id="penga_hid" style="display: none;">
                <div class="input-field col s12 m4 l2">
                  <input id="sat_lain_penga" type="text" name="sat_lain_penga"/>
                  <label for="sat_lain_penga">SATUAN LAINNYA</label>
                </div>

                </div>
                <div class="input-field col s12 m4 l2">
                  <input id="kuan_penga" type="number" name="kuan_penga">
                  <label for="kuan_penga">KUANTITAS</label>
                </div>  

              </div>
            </div>

                        <!-- Pemeriksaan -->
                        <div id="div_v" style="display: none;">
              <div class="row">
              <div class="input-field col m6 s12 l6">
                  <input id="pemeriksaan" type="text" name="pemeriksaan" />
                  <label for="pemeriksaan">PEMERIKSAAN</label>
                </div>  
                <div class="input-field col s12 m4 l2">
                  <select id="sat_pemer" name="sat_pemer" onchange="showDiv('pemer_hid', this)">
                            <option value=""selected>SATUAN</option>
                            <option value="Dokumen">Dokumen</option>
                            <option value="Hari">Hari</option>
                            <option value="Jam Pelajaran">Jam Pelajaran</option>
                            <option value="Paket">Paket</option>
                            <option value="Blok Sensus">Blok Sensus</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                            <option value="Perusahaan">Perusahaan</option>
                            <option value="Lainnya">Lainnya</option>
                  </select>
                </div>

                <div id="pemer_hid" style="display: none;">
                <div class="input-field col s12 m4 l2">
                  <input id="sat_lain_pemer" type="text" name="sat_lain_pemer"/>
                  <label for="sat_lain_pemer">SATUAN LAINNYA</label>
                </div>

                </div>
                <div class="input-field col s12 m4 l2">
                  <input id="kuan_pemer" type="number" name="kuan_pemer">
                  <label for="kuan_pemer">KUANTITAS</label>
                </div>  

              </div>
            </div>

                        <!-- Entri -->
                        <div id="div_w"  style="display: none;">
              <div class="row">
              <div class="input-field col m6 s12 l6">
                  <input id="entri" type="text" name="entri" />
                  <label for="entri">ENTRI</label>
                </div>  
                <div class="input-field col s12 m4 l2">
                  <select id="sat_entri" name="sat_entri" onchange="showDiv('entri_hid', this)">
                            <option value=""selected>SATUAN</option>
                            <option value="Dokumen">Dokumen</option>
                            <option value="Hari">Hari</option>
                            <option value="Jam Pelajaran">Jam Pelajaran</option>
                            <option value="Paket">Paket</option>
                            <option value="Blok Sensus">Blok Sensus</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                            <option value="Perusahaan">Perusahaan</option>
                            <option value="Lainnya">Lainnya</option>
                  </select>
                </div>

                <div id="entri_hid" style="display: none;">
                <div class="input-field col s12 m4 l2">
                  <input id="sat_lain_entri" type="text" name="sat_lain_entri"/>
                  <label for="sat_lain_entri">SATUAN LAINNYA</label>
                </div>

                </div>
                <div class="input-field col s12 m4 l2">
                  <input id="kuan_entri" type="number" name="kuan_entri">
                  <label for="kuan_entri">KUANTITAS</label>
                </div>  

              </div>
            </div>

                        <!-- Rapat -->
                        <div id="div_x"  style="display: none;">
              <div class="row">
              <div class="input-field col m6 s12 l6">
                  <input id="rapat" type="text" name="rapat" />
                  <label for="rapat">RAPAT</label>
                </div>  
                <div class="input-field col s12 m4 l2">
                  <select id="sat_rapat" name="sat_rapat" onchange="showDiv('rapat_hid', this)">
                            <option value=""selected>SATUAN</option>
                            <option value="Dokumen">Dokumen</option>
                            <option value="Hari">Hari</option>
                            <option value="Jam Pelajaran">Jam Pelajaran</option>
                            <option value="Paket">Paket</option>
                            <option value="Blok Sensus">Blok Sensus</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                            <option value="Perusahaan">Perusahaan</option>
                            <option value="Lainnya">Lainnya</option>
                  </select>
                </div>

                <div id="rapat_hid" style="display: none;">
                <div class="input-field col s12 m4 l2">
                  <input id="sat_lain_rapat" type="text" name="sat_lain_rapat"/>
                  <label for="sat_lain_rapat">SATUAN LAINNYA</label>
                </div>

                </div>
                <div class="input-field col s12 m4 l2">
                  <input id="kuan_rapat" type="number" name="kuan_rapat">
                  <label for="kuan_rapat">KUANTITAS</label>
                </div>  

              </div>
            </div>

                        <!-- Lainnya -->
                        <div id="div_y"  style="display: none;">
              <div class="row">
              <div class="input-field col m6 s12 l6">
                  <input id="lainnya_kegiat" type="text" name="lainnya_kegiat"/>
                  <label for="lainnya_kegiat">LAINNYA</label>
                </div>  
                <div class="input-field col s12 m4 l2">
                  <select id="sat_lain_keg" name="sat_lain_keg" onchange="showDiv('lainnya_hid', this)">
                            <option value=""selected>SATUAN</option>
                            <option value="Dokumen">Dokumen</option>
                            <option value="Hari">Hari</option>
                            <option value="Jam Pelajaran">Jam Pelajaran</option>
                            <option value="Paket">Paket</option>
                            <option value="Blok Sensus">Blok Sensus</option>
                            <option value="Rumah Tangga">Rumah Tangga</option>
                            <option value="Perusahaan">Perusahaan</option>
                            <option value="Lainnya">Lainnya</option>
                  </select>
                </div>

                <div id="lainnya_hid" style="display: none;">
                <div class="input-field col s12 m4 l2">
                  <input id="sat_lain_lain_keg" type="text" name="sat_lain_lain_keg"/>
                  <label for="sat_lain_lain_keg">SATUAN LAINNYA</label>
                </div>

                </div>
                <div class="input-field col s12 m4 l2">
                  <input id="kuan_lain_keg" type="number" name="kuan_lain_keg">
                  <label for="kuan_lain_keg">KUANTITAS</label>
                </div>  

              </div>
            </div>


          <div id="divb" style="display: none;">
            <div class="row">
                <div class="input-field col s12">
                   <textarea id="keterangan" class="materialize-textarea" data-length="120" name="keterangan"></textarea>
                   <label for="keterangan">KETERANGAN</label>
                </div>
            </div>
          </div>

            <div id="divc" >
              <div class="row section">
                <div class="col s12">
                  <input type="file" id="file" name="file" class="dropify" data-default-file=""/>
                  <!-- <p>*Optional</p> -->
                </div>
              </div>
            </div>

             <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right modal-trigger" type="button" id="simpan1">KIRIM
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
              <!-- Modal Trigger -->
  <!-- Modal Structure -->
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <h4>KONFIRMASI</h4>
                  <label>
                  <input type="checkbox" class="filled-in" required="required" />
                 <span><p>Apakah anda yakin untuk mengirimnya?</p></span>
                </label>    
                </div>
                <div class="modal-footer">
                  <div class="row">
                    <div class="input-field col s12">
                      <a class="modal-action modal-close waves-effect waves-green btn-flat" >CLOSE</a>
                      <button class="btn cyan waves-effect waves-light right" type="submit" id="simpan2" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}" >KIRIM
                      <i class="material-icons right">send</i>
                      </button>
                    </div>
                 </div>
                </div>
  
          </form>
        </div>
      </div>
    </div>

    <!-- Form with placeholder -->

  <!-- Slide Out Chat -->
  <script>
  function check_1() {
  // Get the checkbox
  var checkBox = document.getElementById("Check1");
  // Get the output text
  var text = document.getElementById("div_d");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
    }

    function check_2() {
  // Get the checkbox
  var checkBox = document.getElementById("Check2");
  // Get the output text
  var text = document.getElementById("div_u");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
    }

    function check_3() {
  // Get the checkbox
  var checkBox = document.getElementById("Check3");
  // Get the output text
  var text = document.getElementById("div_v");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
    }

    function check_4() {
  // Get the checkbox
  var checkBox = document.getElementById("Check4");
  // Get the output text
  var text = document.getElementById("div_w");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
    }

    function check_5() {
  // Get the checkbox
  var checkBox = document.getElementById("Check5");
  // Get the output text
  var text = document.getElementById("div_x");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
    }

    function check_6() {
  // Get the checkbox
  var checkBox = document.getElementById("Check6");
  // Get the output text
  var text = document.getElementById("div_y");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
    }
    </script>






    <script>
      const tekan = document.querySelector('#simpan1');
      tekan.addEventListener('click',function(e){
        e.preventDefault();
        var kehadiran = $("#kehadiran").val();
        var kegiatan = $("#kegiatan").val();
        var keterangan = $("#keterangan").val();
        var keg_umum = $("#keg_umum").val();
        var kuantitas = $("#kuantitas").val();
        var satuan = $("#satuan").val();
        var sat_lain = $("#sat_lain").val();

        if(kehadiran==''){
          swal({
          icon:'error',
          title:'Kesalahan',
          text: 'Belum memilih kehadiran'
          });
        }else {
              if(keterangan=='' && document.getElementById("divb").style.display=="block"){
                swal({
                icon:'error',
                title:'Kesalahan',
                text: 'Keterangan tidak boleh kosong'
                });
              } else {
                      if(kegiatan=='' && document.getElementById("div_l").style.display=="block"){
                        swal({
                        icon:'error',
                        title:'Kesalahan',
                        text: 'Kegiatan tidak boleh kosong'
                        });  
                      } else{ 
                            if(keg_umum=='' && document.getElementById("div_l").style.display=="block"){
                              swal({
                              icon:'error',
                              title:'Kesalahan',
                              text: 'Belum memilih pelaksanaan'
                              }); 
                            } else{
                                  if(kuantitas=='' && document.getElementById("div_d").style.display=="block"){
                                    swal({
                                    icon:'error',
                                    title:'Kesalahan',
                                    text: 'Kuantitas tidak boleh kosong'
                                    }); 
                                  }
                                  else{
                                      if(satuan=='' && document.getElementById("div_d").style.display=="block"){
                                        swal({
                                        icon:'error',
                                        title:'Kesalahan',
                                        text: 'Belum memilih satuan'
                                        }); 
                                      }
                                      else{
                                          if(sat_lain=='' && document.getElementById("hidden_div").style.display=="block"){
                                            swal({
                                            icon:'error',
                                            title:'Kesalahan',
                                            text: 'Satuan lainnya tidak boleh kosong'
                                            });
                                          }
                                          else{
                                            $('#modal1').modal('open');
                                          }
                                      }
                                  }
                            }
                      }
              }
        }
    })
    </script>
    <!-- BEGIN: Footer-->
    <?php include '../menu/footer.php' ;?>

    <div class="loader" style="display: none;">
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

<script src="../assets/js/jquery-3.6.0.min.js"></script>

<script>
var spinner = $('.loader');
$(function() {
  $('form').submit(function(e) {
    e.preventDefault();
    spinner.show();
    var fd = new FormData(this);
    const month = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    const weekday = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
    var now = new Date();
    let dnam = weekday[now.getDay()];
    var dnum = now.getDate();
    let mo = month[now.getMonth()];
    var yr = now.getFullYear();
    var hor = String(now.getHours()).padStart(2, '0');
    var min = String(now.getMinutes()).padStart(2, '0');
    var sec = now.getSeconds();
    $("#modal1").css("display", "none");
    $(".modal-overlay").css("display", "none");

       $.ajax({
          url: 'user_act.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
       }).done(function(resp) {
      spinner.hide();
            swal({
			icon:"success",
			title:"Berhasil ",
      text:" Data berhasil disimpan pada "+dnam+", "+dnum+" "+mo+" "+yr+" "+hor+":"+min+":"+sec,
		    }).then(function() {
		window.location = "profil.php";
		});
       });
});
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
    <script src="../assets/vendors/dropify/js/dropify.min.js"></script>
    <script src="../assets/js/plugins.min.js"></script>
    <script src="../assets/js/search.min.js"></script>
    <!--<script src="../assets/js/custom/custom-script.min.js"></script>-->
    <!--<script src="../assets/js/scripts/customizer.min.js"></script>-->
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../assets/js/scripts/form-file-uploads.min.js"></script>
    <script src="../assets/js/showhide.js"></script>
    <script src="../assets/js/showhide2.js"></script>
    <script src="../assets/js/scripts/advance-ui-modals.min.js"></script>
  </body>
</html>