<?php

require '../conn.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$sql = "UPDATE masyarakat SET nik='$nik', nama='$nama', username='$user', password='$pass', telp='$telp' WHERE nik='$nik'";
$query = mysqli_query($conn, $sql);

if ($query){
?>

<script>
alert('Data MASYARAKAT berhasil di UPDATE')
window.location = 'admin.php?url=view_users'
</script>




<?php } ?>