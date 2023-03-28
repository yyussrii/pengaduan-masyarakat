<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | e-PPeM</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/colors.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

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
                            <div class="col-lg-12 ">
                                <div class="p-4">
                                    <div class="text-center">
                                        <h2 class="text-gray-900 title-custom"> e-Pelaporan dan Pengaduan Masyarakat
                                        </h2>
                                        <h5 class="text-gray-900"> Kelurahan Kota Kulon, Kec. Garut Kota, Kabupaten
                                            Garut, Jawa
                                            Barat 44112
                                        </h5>
                                        <p class="small mb-4"> created by <b>yyussrii</b></p>
                                    </div>
                                    <form class="user" method="post" action="login.php">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                placeholder="Masukkan Username ...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan Password ...">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                                        <hr>
                                    </form>

                                    <div class="text-center">
                                        <p>Belum Punya Akun?</p>
                                        <a class="small" href="register.php">Buat Akun</a>
                                        <hr>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="admin_index.php">Masuk Sebagai Petugas!</a>
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