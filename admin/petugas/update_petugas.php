<?php

require '../conn.php';
$id = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];
$sql = "UPDATE petugas SET nama_petugas='$nama', username='$user', password='$pass', telp='$telp', level='$level' WHERE id_petugas='$id'";
$query = mysqli_query($conn, $sql);

if ($query){
?>

<script>
alert('Data PETUGAS berhasil di UPDATE')
window.location = 'admin.php?url=view_petugas'
</script>




<?php } ?>