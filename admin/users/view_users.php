<!-- Begin Page Content -->
<div class="container">
    <div class="bg-primary p-3 rounded shadow">
        <h1 class="h3 bg-primary p-2 text-light text-center rounded shadow"> Data Petugas <br>
            <span class="small">
                Tambah Edit dan Hapus Data Petugas
            </span>
        </h1>
        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table responsive">
                    <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Telp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                                    
                                    require '../conn.php';
                                    $sql=mysqli_query($conn, "SELECT * FROM masyarakat");
                                    while ($data=mysqli_fetch_array($sql)){

                                    ?>

                        <tbody>
                            <tr>
                                <td><?= $data['nik']?></td>
                                <td><?= $data['nama']?></td>
                                <td><?= $data['username']?></td>
                                <td><?=$data['password']?></td>
                                <td><?=$data['telp']?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="?url=edit_users&id=<?= $data['nik']; ?>"
                                            class="btn btn-primary mx-auto">Edit</a>
                                        <a href="?url=delete_users&id=<?= $data['nik']; ?>"
                                            class="btn btn-danger mx-auto"
                                            onclick="return confirm('Yakin mau Hapus Data <?= $data['nama']; ?> ?')">Hapus</a>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                        <?php };?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>