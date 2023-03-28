<?php
require 'conn.php';
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$foto=$_FILES['foto']['name'];
$files=$_FILES['foto']['tmp_name'];
$st=0;

$sql = mysqli_query($conn, "insert into pengaduan(tgl_pengaduan, nik, isi_laporan, foto, status) values('$tgl', '$nik','$isi','$foto', '$st')");

move_uploaded_file($files, "img/" . $foto);

if ($sql)
{
    ?>
<script type="text/javascript">
alert('Data Telah Terkirim, Terima Kasih sudah melapor!');
window.location = "users.php";
</script>
<?php
}

?>