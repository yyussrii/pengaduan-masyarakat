<body id="page-top">
    <div class="container bg-primary p-1 rounded shadow">
        <h1 class="h3 bg-primary my-2 text-light text-center rounded shadow"> TULIS PENGADUAN/PELAPORAN </h1>
        <div class="card shadow m-3">
            <form class="form-horizontal p-5 row" enctype="multipart/form-data" method="post"
                action="save_pengaduan.php">
                <div class="form-group col-sm-6">
                    <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                    <input type="text" name="tgl_pengaduan" value="<?= date('d/m/Y');?>" class="form-control"
                        minlength="20" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="nik">NIK</label>
                    <input type="nik" name="nik" value="<?= $_SESSION['nik'];?>" class="form-control form-control-user"
                        readonly>
                </div>
                <div class="form-group col-sm-12">
                    <label for="isi_laporan">Isi Laporan</label>
                    <textarea rows="5" name="isi_laporan" class="form-control" minlength="20" required></textarea>
                </div>
                <div class="form-group col-sm-12">
                    <label for="foto">Upload Foto Bukti Pelaporan</label>
                    <input type="file" name="foto" class="fileForm w-100" accept=".jpg, .png, .webp, .jpeg" multiple>
                    <font color=red>* File yang dapat diterima yaitu .jpg, .jpeg, .webp, .png</font>
                </div>
                <input type="submit" class="btn btn-primary btn-user mx-1" value="Kirim Laporan">
                <input type="reset" class="btn btn-danger btn-user  " value="Kosongkan Laporan">
                <hr>
            </form>
        </div>
    </div>
</body>