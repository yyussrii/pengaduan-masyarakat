<?php

$conn = mysqli_connect('localhost', 'root', '', 'pengaduan_masyarakat');

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}