<h1 class="container title-custom bg-primary p-2 rounded shadow">Tambah Petugas</h1>
<div class="container bg-primary p-1 rounded shadow">
    <div class="card shadow m-3">
        <form class="form-horizontal p-5 row" enctype="multipart/form-data" method="post" action="save_petugas.php">
            <div class="form-group col-sm-12">
                <label for="nama_petugas">Nama Petugas</label>
                <input type="text" name="nama_petugas" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label for="username">Username</label>
                <input type="nik" name="username" class="form-control form-control-user">
            </div>
            <div class="form-group col-sm-12">
                <label for="password">Buat Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label for="telp">Nomor Telepon</label>
                <input type="password" name="telp" class="form-control">
            </div>
            <div class="form-group col-sm-12">
                <label for="level">Level</label>
                <select name="level" id="" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-user mx-1" value="Kirim Data">
                <input type="reset" class="btn btn-danger btn-user  " value="Kosongkan Data">
            </div>
        </form>
    </div>
</div>