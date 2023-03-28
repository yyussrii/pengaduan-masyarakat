<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print Data Pengaduan</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top" style="height:100vh;"">

    <!-- Page Wrapper -->
    <div id=" wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->

                <!-- DataTables Example -->
                <div class="mb-4">
                    <?php require 'conn.php';
                    $sql1=mysqli_query($conn, "SELECT * FROM petugas"); 
                    if ($data=mysqli_fetch_array($sql1)) {
                    ?>


                    <h2 class="text-dark title-custom text-center my-3"> e-Pelaporan dan e-Pengaduan Masyarakat</h2>
                    <h5 class="text-center">Kelurahan Kota Kulon, Kec. Garut Kota, Kabupaten Garut, Jawa Barat 44112
                    </h5>
                    <hr>
                    <h4 class="text-dark text-center my-3 text-uppercase"> LAPORAN pengaduan TANGGAL
                        <b><?= date('d F Y'); ?></b> oleh <b><?= $data['nama_petugas']; ?></b>
                    </h4>
                    <?php }?>
                    <h6 class="text-dark text-center my-2"><?= date('H:i:s'); ?></h6>
                    <table class="table table-bordered" style="border: 2px solid gray;" width="100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Pelapor</th>
                                <th>Isi Laporan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        
                        require 'conn.php';
                        $sql=mysqli_query($conn, "SELECT * FROM pengaduan");
                        while ($data=mysqli_fetch_array($sql)){

                        ?>

                        <tbody>
                            <tr>
                                <td><?= $data['id_pengaduan']?></td>
                                <td><?= $data['tgl_pengaduan']?></td>
                                <td><?= $data['nik']?></td>
                                <td><?=$data['isi_laporan']?></td>
                                <td><?=$data['status']?></td>
                            </tr>
                        </tbody>
                        <?php };?>
                    </table>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script>
    window.print()
    </script>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>