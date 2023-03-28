<?php
require '../conn.php';
$query = mysqli_query($conn, "UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$_GET[id]' ");
if ($query) {
    header ('location:employee.php?url=verif_pengaduan');
};



?>