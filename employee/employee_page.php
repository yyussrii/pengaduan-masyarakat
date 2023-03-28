<?php

if (isset($_GET['url'])) 
{

    $url=$_GET['url'];

    switch($url) {
     
        case 'verif_pengaduan':
        include 'verification_pengaduan.php';
        break;

        case 'detail_pengaduan':
        include 'detail_pengaduan.php';
        break;

    }
}

else
{
    ?>
<?php
require '../conn.php';
$query = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='0'");
if ($check=mysqli_num_rows($query))
{
?>


<div class="container bg-primary p-3 rounded shadow">
    <h2 class="text-center text-white text-uppercase mt-2">HALAMAN petugas</h2>
    <h5 class="text-center text-white mb-3">
        Selamat datang di e-PPeM (Elektronik Pengaduan dan Pelaporan Masyarakat), dibuat untuk melaporkan masyarakat
        secara online, tanpa perlu repot untuk datang ke kantor kecamatan/kelurahan
    </h5>
    <div class="bg-white p-3 rounded shadow">
        <div class="bg-white text-center p-3 rounded shadow">
            <h3>Anda Login Sebagai <div class="my-2 rounded p-2 bg-gray-400 text-dark">
                    <?php echo $_SESSION['nama_petugas'];?>
                </div>
            </h3>
        </div>
        <div class="card my-4">
            <div class="card-header">
                Laporan Pengaduan
            </div>
            <div class="card-body shadow">
                <h5 class="card-title text-dark">Ada <?= $check;?> Laporan dan Pengaduan dari Masyarakat</h5>
                <p class="card-text">Klik dibawah untuk Verifikasi pengaduan</p>
                <a href="?url=verif_pengaduan" class="btn btn-primary">Verifikasi Pengaduan</a>
            </div>
        </div>
    </div>
</div>


<?php
}}
?>