<?php
    require 'conn.php';
    $query = mysqli_query($conn, "SELECT * FROM petugas WHERE id_petugas='$_GET[id] '");
    if ($data = mysqli_fetch_array($query)) {
        
    ?>
<h1 class="container title-custom bg-primary p-2 rounded shadow">Edit Petugas</h1>
<div class="container bg-primary p-1 rounded shadow">
    <div class="card shadow m-3">
        <form class="form-horizontal p-5 row" enctype="multipart/form-data" method="post" action="update_petugas.php">
            <div class="form-group col-sm-12">
                <label>ID Petugas</label>
                <input type="text" name="id_petugas" value="<?= $data['id_petugas']; ?>" class="form-control " readonly>
            </div>
            <div class="form-group col-sm-12">
                <label>Nama Petugas</label>
                <input type="text" name="nama_petugas" value="<?= $data['nama_petugas']; ?>" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label>Username</label>
                <input type="nik" name="username" value="<?= $data['username']; ?>"
                    class="form-control form-control-user">
            </div>
            <div class="form-group col-sm-12">
                <label>Ganti Password</label>
                <input type="text" name="password" value="<?= $data['password']; ?>" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label>Nomor Telepon</label>
                <input type="text" name="telp" value="<?= $data['telp']; ?>" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label>Level saat ini <font color="red"><?= $data['level']; ?></font></label>
                <select name="level" value="petugas" id="" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-user mx-1" value="Kirim Laporan">
                <input type="reset" class="btn btn-danger btn-user" value="Kosongkan Laporan">
            </div>
        </form>
    </div>
</div>

<?php } ?>