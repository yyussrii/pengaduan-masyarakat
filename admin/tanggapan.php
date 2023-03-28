<?php
    require '../conn.php';
    $sql=mysqli_query($conn, "select * from pengaduan where id_pengaduan='$_GET[id]'");
    $data= mysqli_fetch_array($sql);
    if($sql)
    {
    ?>

<div class="container bg-primary p-3 rounded shadow">
    <h1 class="h3 p-2 text-light text-center"> Tanggapi Pengaduan <br>
        <span class="small">
            Verifikasi Pengaduan dari masyarakat untuk diteruskan kepada petugas penanggap
        </span>
    </h1>
    <div class="card p-3">
        <div class="bg-gray-300 p-3 my-3 rounded">
            <h5 class="text-primary text-uppercase">Isi Laporan</h5>
            <p style="margin-bottom: 0;"><?= $data['isi_laporan']; ?></p>
        </div>
        <form action="save_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <p>Tanggal Tanggapan <b><?php echo date('Y-m-d');?></b> </p>
            <p>ID Pengaduan No. <b><?= $_SESSION['id_petugas'];?></b></p>
            <input type="hidden" name="id_pengaduan" value="<?= $_GET['id']?>">
            <input type="hidden" name="tgl_tanggapan" value="<?= date('Y-m-d');?>">
            <div class="form-group cols-sm-4">
                <label>Tulis Tanggapan</label>
                <textarea name="tanggapan" rows="6" class="form-control" minlength="20" required></textarea>
            </div>
            <input type="hidden" name="id_petugas" value="<?= $_SESSION['id_petugas'];?>">

            <input type="submit" class="btn btn-primary w-100" value="Submit">
        </form>
    </div>
</div>

<?php } ?>