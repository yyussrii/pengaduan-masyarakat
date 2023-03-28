<!-- Begin Page Content -->
<div class="container">
    <div class="bg-primary p-3 rounded shadow">

        <h1 class="h3 bg-primary p-2 text-light text-center rounded shadow"> Data Petugas <br>
            <span class="small">
                Tambah Edit dan Hapus Data Petugas
            </span>
        </h1>

        <!-- table Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table responsive">
                    <a href="?url=create_petugas" class="btn btn-primary mb-3">+ Tambah Petugas</a>
                    <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Petugas</th>
                                <th>Nama Petugas</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Telp</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                                        
                                        require '../conn.php';
                                        $sql=mysqli_query($conn, "SELECT * FROM petugas");
                                        while ($data=mysqli_fetch_array($sql)){
    
                                        ?>

                        <tbody>
                            <tr>
                                <td><?= $data['id_petugas']?></td>
                                <td><?= $data['nama_petugas']?></td>
                                <td><?= $data['username']?></td>
                                <td><?=$data['password']?></td>
                                <td><?=$data['telp']?></td>
                                <td><?=$data['level']?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="?url=edit_petugas&id=<?= $data['id_petugas']; ?>"
                                            class="btn btn-primary mx-auto">Edit</a>
                                        <a href="?url=delete_petugas&id=<?= $data['id_petugas']; ?>"
                                            class="btn btn-danger mx-auto"
                                            onclick="return confirm('Yakin mau Hapus Data <?= $data['nama_petugas']; ?> ?')">Hapus</a>
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