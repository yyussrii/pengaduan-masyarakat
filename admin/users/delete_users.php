<?php

require 'conn.php';
$id = $_GET['nik'];
$sql = "DELETE FROM masyarakat WHERE nik='$nik'";
$query = mysqli_query($conn, $sql);

if ($query){
?>

<script>
alert('Data USERS berhasil dihapus')
window.location = 'admin.php?url=view_petugas'
</script>




<?php } ?>