<div class="container-fluid">
    <div class="bg-primary p-3 rounded shadow">
        <h1 class="h3 bg-primary p-2 text-light text-center rounded shadow"> TANGGAPI PENGADUAN/PELAPORAN <br>
            <span class="small">
                Tanggapi pengaduan yang telah di ajukan oleh masyarakat
            </span>
        </h1>
        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal Pengaduan</th>
                                <th>NIK</th>
                                <th>Isi Laporan</th>
                                <th>Foto Bukti</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                            
                            require '../conn.php';
                            $sql=mysqli_query($conn, "SELECT*FROM pengaduan WHERE status = 'proses'");
                            while ($data=mysqli_fetch_array($sql)){

                            ?>

                        <tbody>
                            <tr>
                                <td><?= $data['id_pengaduan']?></td>
                                <td><?= $data['tgl_pengaduan']?></td>
                                <td><?= $data['nik']?></td>
                                <td width="10">
                                    <div style="height:100px; min-width:300px; max-width:400px; overflow-y:auto">
                                        <?=$data['isi_laporan']?>
                                    </div>
                                </td>
                                <td>
                                    <div style="height:100px; max-width:300px; overflow-y:auto">
                                        <?=$data['foto']?>
                                    </div>
                                </td>
                                <td><?=$data['status']?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="?url=detail_pengaduan&id=<?= $data['id_pengaduan'];?>"
                                            class="btn btn-primary mx-auto">Detail</a>
                                        <a href="?url=tanggapan_pengaduan&id=<?= $data['id_pengaduan'];?>"
                                            class="btn btn-success mx-auto">Tanggapi</a>
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