<?php
include '../login/config.php';

$username2 = $_POST['username2'];
$nama_lengkap2 = $_POST['nama_lengkap2'];
$nip2 = $_POST['nip2'];
$jabatan2 = $_POST['jabatan2'];
$golongan2 = $_POST['golongan2'];
$r_email = $_POST['r_email'];
$r_password = $_POST['r_password'];
$rq_password = md5($r_password);
$salt_pass = "asjhdjahsd123823".$r_password."fklsdkfs6521sd";
$qsalt_pass = md5($salt_pass);


$uniq = rand(10,99);
$tmp_file = $_FILES['c_foto']['tmp_name'];
$nama_file = $nip2.$uniq.'.jpg';
$new_file = "../foto/".$nama_file;
$sql = mysqli_query($conn,"SELECT foto FROM profil WHERE nip = '$nip2'");
$row = mysqli_fetch_assoc($sql);
$old_name = $row['foto'];
$old_file = "../foto/".$old_name.'.jpg';
if ($_FILES['c_foto']['name'] != "") {
    if (unlink($old_file)) {
        move_uploaded_file($tmp_file,$new_file);
    } else {
        move_uploaded_file($tmp_file,$new_file);
    }
    $sql1 = mysqli_query($conn,"UPDATE profil SET foto = '$nama_file' WHERE nip = '$nip2'");
    if ($r_password != "") {
        $sql2 = mysqli_query($conn,"UPDATE users SET username = '$username2', nama_lengkap = '$nama_lengkap2', jabatan = '$jabatan2', golongan = '$golongan2', email = '$r_email', password = '$rq_password', saltpassword = '$qsalt_pass' WHERE nip = $nip2");
    } else{
        $sql2 = mysqli_query($conn,"UPDATE users SET username = '$username2', nama_lengkap = '$nama_lengkap2', jabatan = '$jabatan2', golongan = '$golongan2', email = '$r_email' WHERE nip = $nip2");
    }
} else{
    if ($r_password != "") {
        $sql2 = mysqli_query($conn,"UPDATE users SET username = '$username2', nama_lengkap = '$nama_lengkap2', jabatan = '$jabatan2', golongan = '$golongan2', email = '$r_email', password = '$rq_password', saltpassword = '$qsalt_pass' WHERE nip = $nip2");
    } else{
        $sql2 = mysqli_query($conn,"UPDATE users SET username = '$username2', nama_lengkap = '$nama_lengkap2', jabatan = '$jabatan2', golongan = '$golongan2', email = '$r_email' WHERE nip = $nip2");
    }
}

?>