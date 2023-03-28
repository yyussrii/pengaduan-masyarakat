<?php

if (isset($_GET['url'])) 
{

    $url=$_GET['url'];

    switch($url) {
        case 'add_pengaduan':
        include 'add_pengaduan.php';
        break;
        
        case 'view_pengaduan':
        include 'view_pengaduan.php';
        break;
        
        case 'detail_pengaduan':
        include 'detail_pengaduan.php';
        break;
     
        case 'view_tanggapan':
        include 'view_tanggapan.php';
        break;

    }
}

else
{
    ?>

<div class="container">
    <div class="bg-primary p-4 rounded shadow">
        <h5 class=" p-3 text-center text-white rounded shadow ">
            Selamat datang di e-PPeM (Elektronik Pengaduan dan Pelaporan Masyarakat), dibuat untuk melaporkan masyarakat
            secara online, tanpa perlu repot untuk datang ke kantor kecamatan/kelurahan
        </h5>
        <div class="bg-white p-4 rounded">
            <div class="bg-white text-center p-3 rounded shadow">
                <h3>Anda Login Sebagai <div class="my-2 rounded p-2 bg-gray-400 text-dark">
                        <?php echo $_SESSION['nama'];?>
                    </div>
                </h3>
            </div>
            <div class="d-flex justify-content-between">
                <div class="card my-4 col-sm-5 mr-2">
                    <div class="card-header mt-2">
                        Tulis Pengaduan
                    </div>
                    <div class="card-body shadow mb-2">
                        <h5 class="card-title text-dark">Tulis Pengaduan / Keluhan</h5>
                        <p class="card-text">Tulis Pengaduan/Keluhan yang terjadi di lingkungan daerah</p>
                        <a href="?url=add_pengaduan" class="btn btn-primary">Tulis Pengaduan</a>
                    </div>
                </div>
                <div class="card my-4 col-sm-5 ml-2">
                    <div class="card-header mt-2">
                        Lihat Laporan
                    </div>
                    <div class="card-body shadow mb-2">
                        <h5 class="card-title text-dark">Lihat Laporan</h5>
                        <p class="card-text">Lihat Laporan yang telah dibuat oleh anda, anda bisa mengubah laporan</p>
                        <a href="?url=view_pengaduan" class="btn btn-primary">Lihat Laporan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
}
?>