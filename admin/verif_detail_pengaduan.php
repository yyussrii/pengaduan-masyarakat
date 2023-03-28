<?php
    require '../conn.php';
    $sql=mysqli_query($conn, "select * from pengaduan where id_pengaduan='$_GET[id]'");
    $data= mysqli_fetch_array($sql);
    if($sql)
    {
    ?>
<h1 class="container title-custom bg-primary p-2 rounded shadow">Data Pengaduan Tanggal
    <?= $data['tgl_pengaduan'];?></h1>
<div class="container bg-primary p-1 rounded shadow">
    <div class="card d-flex shadow m-3">
        <div class="d-flex flex-row m-3">
            <div class="bg-gray-300 col-sm-3 my-auto mx-3 p-3 rounded shadow">
                <p style="margin-bottom: 5px;" class="text-dark text-center"><b>Tanggal Pengaduan</b></p>
                <p class="text-center"><?= $data['tgl_pengaduan']?></p>
                <p class="text-dark text-center"><b>Foto Bukti Pelaporan</b> </p>
                <img src="../img/<?= $data['foto'];?>" class="w-100 mb-3" alt="">
            </div>
            <div class="p-3 text-justify">
                <p style="margin-bottom: 0;" class="bg-gray-300 p-3 rounded shadow text-dark">
                    <?= $data['isi_laporan'];?>
                </p>
            </div>
            <?php };?>
        </div>
        <div class="container d-flex">
            <a href="?url=verif_pengaduan" class="w-50 btn btn-primary m-3">Kembali</a>
            <a href="proses.php?id=<?= $data['id_pengaduan'];?>" data-toggle="modal" data-target="#confirmModal"
                class="w-50 btn btn-success m-3">Verifikasi</a>
        </div>
    </div>
</div>