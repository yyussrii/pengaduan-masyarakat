<?php
    require 'conn.php';
    $sql=mysqli_query($conn, "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan='$_GET[id]' AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");
    $cek = mysqli_num_rows($sql);
    if ($cek <1) 
    {
        echo "<font color='red'> Pengaduan belum ditanggapi! </font>";
    }
    else
    {
        if($data= mysqli_fetch_array($sql));
    {
    ?>
<h1 class="container title-custom bg-primary p-2 rounded shadow">Data Pengaduan Tanggal
    <?= $data['tgl_pengaduan'];?></h1>
<div class="container bg-primary p-1 rounded shadow">
    <div class="card d-flex shadow m-3">
        <div class="d-flex flex-column m-3">
            <div class="bg-gray-300 col-sm-3 my-auto mx-3 p-3 rounded shadow">
                <p style="margin-bottom: 5px;" class="text-dark text-center"><b>Tanggal Ditanggapi</b></p>
                <p class="text-center"><?= $data['tgl_tanggapan'];?></p>
            </div>
            <div class="p-3 text-justify">
                <p>Laporan Anda</p>
                <p style="margin-bottom: 0;" class="bg-gray-300 p-3 rounded shadow text-dark">
                    <?= $data['isi_laporan'];?>
                </p>
            </div>
            <div class="p-3 text-justify">
                <p>Tanggapan</p>
                <p style="margin-bottom: 0;" class="bg-gray-200 p-3 rounded shadow text-dark">
                    <?= $data['tanggapan'];?>
                </p>
            </div>
            <?php } }?>
        </div>
        <a href="?url=view_pengaduan" class="btn btn-primary m-3">Kembali</a>
    </div>
</div>