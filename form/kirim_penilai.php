<?php 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
include '../login/config.php';
sleep(2);

$tahun = $_POST['tahun'];
$bulan = $_POST['bulan'];

mysqli_query($conn,"UPDATE kinerja SET kinerja_angka_kredit = 0 WHERE kinerja_nip = '{$_SESSION[ "nip" ]}' AND month(kinerja_tanggal)='$bulan' AND year(kinerja_tanggal)='$tahun'")

?>