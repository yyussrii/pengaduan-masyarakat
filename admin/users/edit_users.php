<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../css/custom.css">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <h1 class="container title-custom bg-primary p-2 rounded shadow">Edit Masyarakat</h1>
    <?php
    require '../conn.php';
    $query = mysqli_query($conn, "SELECT * FROM masyarakat WHERE nik='$_GET[id] '");
    if ($data = mysqli_fetch_array($query)) {
        
    ?>
    <div class="container bg-primary p-1 rounded shadow">
        <div class="card shadow m-3">
            <form class="form-horizontal p-5 row" enctype="multipart/form-data" method="post" action="update_users.php">
                <div class="form-group col-sm-12">
                    <label>NIK</label>
                    <input type="text" name="nik" value="<?= $data['nik']; ?>" class="form-control " readonly>
                </div>
                <div class="form-group col-sm-12">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control">
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
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-user mx-1" value="Kirim Laporan">
                    <input type="reset" class="btn btn-danger btn-user  " value="Kosongkan Laporan">
                </div>
            </form>
        </div>
    </div>

    <?php } ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>