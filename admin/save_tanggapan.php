<?php
require '../conn.php';

$id_pengaduan=$_POST ['id_pengaduan'];
$tgl = $_POST ['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$status = 'selesai';
$sql = "INSERT INTO tanggapan (id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) VALUES ('$id_pengaduan', '$tgl', '$tanggapan', '$id_petugas')";
$query = mysqli_query($conn, $sql);
$upd_status = mysqli_query($conn, "UPDATE pengaduan SET status= '$status' where id_pengaduan='$id_pengaduan'");

if ($query) {
  ?>
<script>
alert('data sudah ditanggapi')
window.location = "admin.php?url=verif_pengaduan"
</script>

<?php
}
?>