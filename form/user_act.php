<?php
include '../login/config.php';
sleep(3);


   /* Getting file name */


   /* Location */
   $kehadiran = $_POST['kehadiran'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];

$pencacahan = $_POST['pencacahan'];
$kuan_penca = $_POST['kuan_penca'];
$sat_penca = $_POST['sat_penca'];
$sat_lain_penca = $_POST['sat_lain_penca'];

$pengawasan = $_POST['pengawasan'];
$kuan_penga = $_POST['kuan_penga'];
$sat_penga = $_POST['sat_penga'];
$sat_lain_penga = $_POST['sat_lain_penga'];

$pemeriksaan = $_POST['pemeriksaan'];
$kuan_pemer = $_POST['kuan_pemer'];
$sat_pemer = $_POST['sat_pemer'];
$sat_lain_pemer = $_POST['sat_lain_pemer'];

$entri = $_POST['entri'];
$kuan_entri = $_POST['kuan_entri'];
$sat_entri = $_POST['sat_entri'];
$sat_lain_entri = $_POST['sat_lain_entri'];

$rapat = $_POST['rapat'];
$kuan_rapat = $_POST['kuan_rapat'];
$sat_rapat = $_POST['sat_rapat'];
$sat_lain_rapat = $_POST['sat_lain_rapat'];

$lainnya_kegiat = $_POST['lainnya_kegiat'];
$kuan_lain_keg = $_POST['kuan_lain_keg'];
$sat_lain_keg = $_POST['sat_lain_keg'];
$sat_lain_lain_keg = $_POST['sat_lain_lain_keg'];

$keterangan = $_POST['keterangan'];
   $rand = rand();
   $filename = $_FILES['file']['name'];
   $ekstensi =  array('png','jpg','jpeg','gif');
   $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $ukuran = $_FILES['file']['size'];
   $location = "../gambar/";
   $xx = $rand.'_'.$filename;

   /* Valid extensions */

   /* Check file extension */

if ($kehadiran == "HADIR"){
//   if(in_array($ext,$ekstensi)) {
      /* Upload file */
      if(move_uploaded_file($_FILES['file']['tmp_name'],$location.$xx)){
		if($pencacahan != null){
			$pencacahan = "Pencacahan"." ".$_POST['pencacahan'];
			if($sat_penca=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pencacahan','$kuan_penca','$sat_lain_penca','$keterangan','$xx',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pencacahan','$kuan_penca','$sat_penca','$keterangan','$xx',now())");
				}
		} 
		if($pengawasan !=null){
			$pengawasan = "Pengawasan"." ".$_POST['pengawasan'];
			if($sat_penga=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pengawasan','$kuan_penga','$sat_lain_penga','$keterangan','$xx',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pengawasan','$kuan_penga','$sat_penga','$keterangan','$xx',now())");
				}
		}
		if($pemeriksaan !=null){
			$pemeriksaan = "Pemeriksaan"." ".$_POST['pemeriksaan'];
			if($sat_pemer=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pemeriksaan','$kuan_pemer','$sat_lain_pemer','$keterangan','$xx',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pemeriksaan','$kuan_pemer','$sat_pemer','$keterangan','$xx',now())");
				}
		}
		if($entri !=null){
			$entri = "Entri"." ".$_POST['entri'];
			if($sat_entri=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$entri','$kuan_entri','$sat_lain_entri','$keterangan','$xx',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$entri','$kuan_entri','$sat_entri','$keterangan','$xx',now())");
				}
		}
		if($rapat !=null){
			$rapat = "Rapat"." ".$_POST['rapat'];
			if($sat_rapat=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$rapat','$kuan_rapat','$sat_lain_rapat','$keterangan','$xx',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$rapat','$kuan_rapat','$sat_rapat','$keterangan','$xx',now())");
				}
		}
		if($lainnya_kegiat !=null){
			if($sat_lain_keg=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$lainnya_kegiat','$kuan_lain_keg','$sat_lain_lain_keg','$keterangan','$xx',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_foto,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$lainnya_kegiat','$kuan_lain_keg','$sat_lain_keg','$keterangan','$xx',now())");
				}
		}
    } else{
        if($pencacahan != null){
			$pencacahan = "Pencacahan"." ".$_POST['pencacahan'];
			if($sat_penca=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pencacahan','$kuan_penca','$sat_lain_penca','$keterangan',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pencacahan','$kuan_penca','$sat_penca','$keterangan',now())");
				}
		} 
		if($pengawasan !=null){
			$pengawasan = "Pengawasan"." ".$_POST['pengawasan'];
			if($sat_penga=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pengawasan','$kuan_penga','$sat_lain_penga','$keterangan',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pengawasan','$kuan_penga','$sat_penga','$keterangan',now())");
				}
		}
		if($pemeriksaan !=null){
			$pemeriksaan = "Pemeriksaan"." ".$_POST['pemeriksaan'];
			if($sat_pemer=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pemeriksaan','$kuan_pemer','$sat_lain_pemer','$keterangan',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$pemeriksaan','$kuan_pemer','$sat_pemer','$keterangan',now())");
				}
		}
		if($entri !=null){
			$entri = "Entri"." ".$_POST['entri'];
			if($sat_entri=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$entri','$kuan_entri','$sat_lain_entri','$keterangan',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$entri','$kuan_entri','$sat_entri','$keterangan',now())");
				}
		}
		if($rapat !=null){
			$rapat = "Rapat"." ".$_POST['rapat'];
			if($sat_rapat=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$rapat','$kuan_rapat','$sat_lain_rapat','$keterangan',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$rapat','$kuan_rapat','$sat_rapat','$keterangan',now())");
				}
		}
		if($lainnya_kegiat !=null){
			if($sat_lain_keg=="Lainnya"){
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$lainnya_kegiat','$kuan_lain_keg','$sat_lain_lain_keg','$keterangan',now())");
				} 
				else {
				mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_kegiatan,kinerja_kuantitas,kinerja_satuan,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$lainnya_kegiat','$kuan_lain_keg','$sat_lain_keg','$keterangan',now())");
				}
		}
    }
//   }
}
else {
	mysqli_query($conn, "INSERT INTO kinerja (kinerja_kehadiran,kinerja_nip,kinerja_nama,kinerja_keterangan,kinerja_tanggal) VALUES ('$kehadiran','$nip','$nama','$keterangan',now())");
}  
   ?>