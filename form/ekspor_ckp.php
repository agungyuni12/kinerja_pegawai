
<script src="../assets/js/jquery-3.6.0.min.js"></script>
<script src="../assets/js/jquery.table2excel.min.js"></script>

<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

include '../login/config.php';
$id_ekspor = 1;
$url = $_GET['ckp'];
$bulan = $_GET['bulan'];
$tahun = $_GET['tahun'];
$nama = str_replace("-"," ",$url);
$sql1=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_nama='$nama' AND kinerja_kehadiran = 'HADIR' AND year(kinerja_tanggal)='$tahun' AND month(kinerja_tanggal)='$bulan'");
$nama_bulan_indo = array (1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
$tanggal_akhir=cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);  

?>
<table id="ekspor-table" style="display:none;">
        <tr>
            <td><b>CAPAIAN KINERJA PEGAWAI</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td>Satuan Organisasi</td>
            <td>: Badan Pusat Statistik Kabupaten Dompu</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?= $nama;?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: <?= $_SESSION['jabatan'];?></td>
        </tr>
        <tr>
            <td>Bulan</td>
            <td>: <?= "1-".$tanggal_akhir." ".$nama_bulan_indo[$bulan]." ".$tahun;?></td>
        </tr>
        <tr>
        </tr>
    <thead>
        <tr>
            <th><b>No</b></th>
            <th><b>Kegiatan</b></th>
            <th><b>Kuantitas</b></th>
            <th><b>Satuan</b></th>
            <th><b>Tingkat Kualitas</b></th>
        </tr>
    </thead>
        <tr>
            <th>'(1)</th>
            <th>'(2)</th>
            <th>'(3)</th>
            <th>'(4)</th>
            <th>'(5)</th>
        </tr>
    <tbody>

<?php

if ($sql1!= false && $sql1->num_rows > 0) {
      while($row1 = $sql1->fetch_assoc()) {
      $kegiatan = $row1['kinerja_kegiatan'];
      $kuantitas = $row1['kinerja_kuantitas'];
      $satuan = $row1['kinerja_satuan'];
      $angka_kredit = $row1['kinerja_angka_kredit'];
    
        ?>
        <tr>
            <td><?= $id_ekspor++;?></td>
            <td><?= $kegiatan;?></td>
            <td><?= $kuantitas;?></td>
            <td><?= $satuan;?></td>
            <td><?= $angka_kredit;?></td>
        </tr>

        <?php
        }
    }
?>
    </tbody>

</table>

<script>
$("#ekspor-table").table2excel({
    exclude: ".excludeThisClass",
    name: "Worksheet Name",
    filename: "<?= $nama." ".$bulan." ".$tahun?>.xls", // do include extension
    preserveColors: false // set to true if you want background colors and font colors preserved
});

$(document).ready(function() {
    window.setTimeout(function(){window.location.href = "ckp.php"},20);
});
</script>