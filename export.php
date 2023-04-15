<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
include 'login/config.php';
include 'form/ckp.php';
?>
<html>
<head>
  <title>CAPAIAN TARGET</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/custom/custom.css">
</head>

<body>
<div class="container">
			<h2>Stock Bahan</h2>
			<h4>(Inventory)</h4>
				<div class="data-tables datatable-dark">
					
                <table id="mauexport" class="display nowrap">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Uraian Kegiatan</th>
                    <th>Satuan</th>
                    <th>Kuantitas Target</th>
                    <th>Kode Butir Kegiatan</th>
                    <th>Angka Kredit</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>                
                <?php
                    $i=1;
              if(isset($_POST['export'])){
                $bulan = $_POST['bulan'];
                if($bulan!=null){
                  $sql=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_nama = '{$_SESSION[ "nama_lengkap" ]}' AND MONTH(kinerja_tanggal) = $bulan");
                }
                else{
                  $sql=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_nama = '{$_SESSION[ "nama_lengkap" ]}'");
                }
              }
              else{
                  $sql=mysqli_query($conn,"SELECT * FROM kinerja WHERE kinerja_nama = '{$_SESSION[ "nama_lengkap" ]}'");
                }
                if ($sql!= false && $sql->num_rows > 0) {
                    // output data of each row
                    while($row = $sql->fetch_assoc()) {
                       echo "<tr><td>".$i++."</td><td>".$row["kinerja_kegiatan"]."</td><td>".$row["kinerja_satuan"]."</td><td>".$row["kinerja_kuantitas"]."</td><td></td><td></td><td></td></tr>";
                    }
                  }
            
                    ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
					
				</div>
</div>
	
<script>
$(document).ready(function() {
  // $('#mauexport').append('<caption style="caption-side: top">Satuan Organisasi : Badan Pusat Statistik Kabupaten Dompu</caption>');
  $('#mauexport').DataTable({
    ordering: true,"autoWidth": false,
    paging: true,
    searching: true,
    dom: 'Bftripl',
    buttons: [
    {
            extend: 'excelHtml5',
            title: 'CKP',
            message: "Satuan Organisasi : Badan Pusat Statistik Kabupaten Dompu \n"


        },
        {
            extend: 'csvHtml5',
            title: 'Any title for the file',
             customize: function (csv) {
                 return "Any heading for the csv file can be separated with , and for new line use \n"+csv;
              }
        },
        {
            extend: 'pdfHtml5',
            title: 'Any title for file',
            customize: function ( doc ) {
                            doc.content.splice( 0, 0, {
                                text: "custom header\n my header"
                            } );
            }
        }

        //'excelHtml5',
        //'csvHtml5',
        //'pdfHtml5'
    ] 

}); 
} );

</script> 

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>