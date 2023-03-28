<?php

require '../../conn.php';
$id = $_GET['id'];
$sql = "DELETE FROM petugas WHERE id_petugas='$id'";
$query = mysqli_query($conn, $sql);

if ($query){
?>

<script>
alert('Data PETUGAS berhasil dihapus')
window.location = 'admin.php?url=view_petugas'
</script>




<?php } ?>