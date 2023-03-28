<?php

if (isset($_GET['url'])) 
{

    $url=$_GET['url'];

    switch($url) {
     
        case 'tanggap_pengaduan':
        include 'tanggap_pengaduan.php';
        break;

        case 'verif_pengaduan':
        include 'verif_pengaduan.php';
        break;
        case 'verif_detail_pengaduan':
        include 'verif_detail_pengaduan.php';
        break;

        case 'detail_pengaduan':
        include 'detail_pengaduan.php';
        break;

        case 'tanggapan_pengaduan':
        include 'tanggapan.php';
        break;
        
        case 'create_petugas':
        include 'petugas/create_petugas.php';
        break;

        case 'view_petugas':
        include 'petugas/view_petugas.php';
        break;

        case 'edit_petugas':
        include 'petugas/edit_petugas.php';
        break;

        case 'delete_petugas':
        include 'petugas/delete_petugas.php';
        break;

        case 'view_users':
        include 'users/view_users.php';
        break;

        case 'edit_users':
        include 'users/edit_users.php';
        break;

        case 'delete_users':
        include 'users/delete_users.php';
        break;

        case 'create_laporan':
        include 'create_laporan.php';
        break;

        case 'view_laporan':
        include 'view_laporan.php';
        break;

        case 'edit_laporan':
        include 'edit_laporan.php';
        break;

        case 'delete_laporan':
        include 'delete_laporan.php';
        break;

    }
}

else
{
    ?>
<?php
require '../conn.php';
$query = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='proses'");
$query2 = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='0'");
$check=mysqli_num_rows($query);
$check2=mysqli_num_rows($query2);
if ($check >= 0 && $check2 >= 0)
{
?>


<div class="container bg-primary p-3 rounded shadow">
    <h2 class="text-center text-white text-uppercase mt-2">
        HALAMAN ADMIN
    </h2>
    <h5 class="text-center bg-primary text-white mb-3">
        Selamat datang di e-PPeM (Elektronik Pengaduan dan Pelaporan Masyarakat), dibuat untuk melaporkan masyarakat
        secara online, tanpa perlu repot untuk datang ke kantor kecamatan/kelurahan
    </h5>
    <div class="bg-white p-3">
        <div class="bg-white text-center p-3 rounded shadow">
            <h3>Anda Login Sebagai <div class="my-2 rounded p-2 bg-gray-400 text-dark">
                    <?php echo $_SESSION['nama_petugas'];?>
                </div>
            </h3>
        </div>
        <div class="d-flex flex-wrap justify-content-around">
            <div class="card my-4 col-sm-5">
                <div class="card-header">
                    Verifikasi Pengaduan
                </div>
                <div class="card-body shadow">
                    <h5 class="card-title text-dark">Verifikasi <?= $check2;?> Laporan dan Pengaduan dari Masyarakat
                    </h5>
                    <p class="card-text">Verifikasi Laporan</p>
                    <a href="?url=verif_pengaduan" class="btn btn-primary">Verifikasi Pengaduan</a>
                </div>
            </div>
            <div class="card my-4 col-sm-5">
                <div class="card-header">
                    Laporan Pengaduan
                </div>
                <div class="card-body shadow">
                    <h5 class="card-title text-dark">Tanggapi <?= $check;?> Laporan dan Pengaduan dari Masyarakat</h5>
                    <p class="card-text">Sudah diverifikasi oleh petugas</p>
                    <a href="?url=verif_pengaduan" class="btn btn-primary">Tanggapi Pengaduan</a>
                </div>
            </div>
            <div class="card my-4 col-sm-5">
                <div class="card-header">
                    Lihat Data Petugas
                </div>
                <div class="card-body shadow">
                    <h5 class="card-title text-dark">Lihat Data Petugas</h5>
                    <p class="card-text">Lihat tambah dan edit data petugas</p>
                    <a href="?url=view_petugas" class="btn btn-primary">Tanggapi Pengaduan</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
}}
?>