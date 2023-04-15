<?php 

include '../login/config.php';
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
sleep(2);

$array = json_decode($_POST['jsonData'],true);

foreach($array as $row){

$nama = $row['nama'];
$tahun = $row['tahun'];
$bulan = $row['bulan'];
$angka_kredit = $row['angka_kredit'];
$id_keg = $row['id_keg'];

mysqli_query($conn,"UPDATE kinerja SET kinerja_angka_kredit = '$angka_kredit' WHERE kinerja_nama = '$nama' AND id='$id_keg'AND month(kinerja_tanggal)='$bulan' AND year(kinerja_tanggal)='$tahun'");

}

?>