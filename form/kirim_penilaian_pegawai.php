<?php 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
include '../login/config.php';

$nip = $_POST['nip'];
$nip_dinilai = $_POST['nip_dinilai'];
$nama_dinilai = $_POST['nama_dinilai'];
$ber1 = $_POST['ber1'];
$ber2 = $_POST['ber2'];
$ber3 = $_POST['ber3'];
$aku1 = $_POST['aku1'];
$aku2 = $_POST['aku2'];
$aku3 = $_POST['aku3'];
$kom1 = $_POST['kom1'];
$kom2 = $_POST['kom2'];
$kom3 = $_POST['kom3'];
$har1 = $_POST['har1'];
$har2 = $_POST['har2'];
$har3 = $_POST['har3'];
$loy1 = $_POST['loy1'];
$loy2 = $_POST['loy2'];
$loy3 = $_POST['loy3'];
$ada1 = $_POST['ada1'];
$ada2 = $_POST['ada2'];
$kol1 = $_POST['kol1'];
$kol2 = $_POST['kol2'];
$kol3 = $_POST['kol3'];

$sql = mysqli_query($conn,"INSERT INTO penilaian(`nip_penilai`, `nip_dinilai`, `nama_dinilia`, `ber1`, `ber2`, `ber3`, `aku1`, `aku2`, `aku3`, `kom1`, `kom2`, `kom3`, `har1`, `har2`, `har3`, `loy1`, `loy2`, `loy3`, `ada1`, `ada2`, `kol1`, `kol2`, `kol3`) VALUES ('$nip','$nip_dinilai','$nama_dinilai','$ber1','$ber2','$ber3','$aku1','$aku2','$aku3','$kom1','$kom2','$kom3','$har1','$har2','$har3','$loy1','$loy2','$loy3','$ada1','$ada2','$kol1','$kol2','$kol3')");

?>
