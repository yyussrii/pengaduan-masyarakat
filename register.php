<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buat Akun | e-PPeM</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/colors.css" rel="stylesheet">


</head>

<body class="bg-gradient-secondary">
    <div id="carouselSlides" class="carousel slide" style="height:50px; filter: brightness(.3);" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carousel-1.webp" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/carousel-2.webp" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/carousel-3.webp" class="d-block w-100">
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" p-5">
                                    <div class="text-center">
                                        <h2 class="text-gray-900 title-custom">Buat Akun
                                        </h2>
                                        <h5 class="text-gray-900">e-Pelaporan dan Pengaduan Masyarakat
                                        </h5>
                                        <p class="small mb-4"> created by <b>yyussrii</b></p>
                                    </div>
                                    <form class="user" method="post" action="save_register.php">
                                        <div class="form-group">
                                            <input type="text" name="nik" class="form-control form-control-user"
                                                placeholder="Masukkan Nomor NIK ..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user"
                                                placeholder="Masukkan Nama Lengkap Sesuai KTP ..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="telp" class="form-control form-control-user"
                                                placeholder=" Masukkan Nomor Telepon ..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                placeholder="Buat Username ..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" placeholder="Buat Password ..."
                                                required>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block"
                                            value="Buat Akun!">
                                        <hr>
                                    </form>

                                    <div class="text-center">
                                        <p>Sudah Punya Akun?</p>
                                        <a class="small" href="index.php">Login</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>