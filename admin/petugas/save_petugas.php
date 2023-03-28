<?php

require '../conn.php';
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];
$sql = "INSERT INTO petugas(nama_petugas, username, password, telp, level) VALUES ('$nama', '$user', '$pass', '$telp', '$level')";
$query = mysqli_query($conn, $sql);

if ($query){
?>

<script>
alert('Data PETUGAS berhasil di input')
window.location = 'admin.php?url=view_petugas'
</script>




<?php } ?>