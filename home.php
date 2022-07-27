<!DOCTYPE html>
<html lang="en">

<?php
require_once('includes/init.php');

$user_role = get_role();
if($user_role == 'admin' || $user_role == 'user') {
$page = "Dashboard";
// require_once('template/header.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT. Hexpharm Jaya Laboratories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">PT. Hexpharm Jaya Laboratories</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Temp_Vikor/dashboard.php">VIKOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard.php">SMART</a>
                    </li>

                    <li class="nav-item">
                        <!-- jika belum login menampilkan login  -->
                        <?php if(!isset($_SESSION['user_id'])) {
                            echo '<a class="nav-link" href="login.php">Login</a>';
                        } else {
                            // jika sudah login menampilkan logout
                             echo '<a class="nav-link" href="logout.php">Logout</a>';
                         }?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-6">Selamat Datang di Website Kami</h4>
            <h3 class="display-1">Hai! Hallo</h3>
            <a hreff="#sistem">

                <button class="navbar-toggler btn-lg">
                    <!-- pengecekan kalau sudah login tidak muncul halaman login lagi -->
                    <?php if(isset($_SESSION['user_id'])) {
                    echo '<a class="btn btn-primary" style="color: #FFFFFF; text-align: center; padding: 10px; font-weight: bold;" href="dashboard.php">Dashboard SR</a>';
                } else {
                    echo '<a class="btn btn-primary" style="color: #FFFFFF; text-align: center; padding: 10px; font-weight: bold;" href="login.php">Sistem Rekomendasi</a>';
                }?>
                </button>
        </div>
    </div>

    <!-- About -->
    <<section id="about">
        <div class="about-1" style=" margin: 30px; padding: 5px;">
            <h1 style=" text-align: center; padding: 3px; font-weight: bold;">Tentang</h1>
            <p style=" text-align: justify; padding: 3px; color: black;">Melalui perjalanan dan pengalaman yang panjang
                memasuki empat dasawarsa, PT. Hexpharm Jaya Laboratories (HJ) semakin mantap dalam memposisikan dirinya
                sebagai perusahaan farmasi yang berkualitas dan ekonomis.
                Dengan misi ingin membangun masyarakat yang lebih sehat, HJ menyediakan produk-produk kesehatan yang
                dibutuhkan oleh masyarakat Indonesia, dengan tetap mempertahankan mutu mulai dari pengembangan hingga
                proses produksinya.
                Hal ini didukung dengan semangat pelayanan dan integritas yang tinggi, serta melalui proses perbaikan
                yang berkesinambungan, sehingga dapat menciptakan produk-produk kesehatan yang bermanfaat dan berkhasiat
                bagi masyarakat Indonesia.</p>
        </div>
        <div id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item text-center"
                                style="margin-bottom: 20px; margin-top: 20px; background-color: #33c6dc; padding: 80px,30px; box-shadow: border 1px solid; padding: 4px; box-shadow: 5px 10px 18px black;">
                                <!-- <i class="fa fa-book" style="font-size: 40px; margin-top: 10px;"></i> -->
                                <h3 style="font-size: 25px; margin-bottom: 10px;">Misi</h3>
                                <hr
                                    style=" width: 100px; height: 3px; background-color: black; margin: 0 auto; border: none;">
                                <P style="margin-top: 20px;">Menjadi perusahaan terdepan yang berkelanjutan pada segmen
                                    pengobatan terjangkau melalui ketangkasan, inovasi, dan keunggulan operasional</p>
                                </hr>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center"
                                style="margin-bottom: 20px; margin-top: 20px; background-color: #33c6dc; padding: 80px,30px; box-shadow: border 1px solid; padding: 18px; box-shadow: 5px 10px 18px black;">
                                <!-- <i class="fa fa-globe" style="font-size: 40px; margin-top: 10x;"></i> -->
                                <h3 style="font-size: 25px; margin-bottom: 10px;">Visi</h3>
                                <hr
                                    style=" width: 100px; height: 3px; background-color: black; margin: 0 auto; border: none;">
                                <P style="margin-top: 20px;">Membangun masyarakat yang lebih sehat melalui produk-produk
                                    kesehatan yang ekonomis dan berkualitas</p>
                                </hr>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center"
                                style="margin-bottom: 20px; margin-top: 20px; background-color: #33c6dc; padding: 80px,30px; box-shadow: border 1px solid; padding: 40px; box-shadow: 5px 10px 18px black;">
                                <!-- <i class="fa fa-pencil" style="font-size: 40px; margin-top: 1px;"></i> -->
                                <h3 style="font-size: 25px; margin-bottom: 15px;">Motto</h3>
                                <hr
                                    style=" width: 100px; height: 3px; background-color: black; margin: 0 auto; border: none;">
                                <P style="margin-top: 20px;">Komitmen total untuk kesehatan Anda</p>
                                </hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- Produk -->
        <div class="container-fluid pt-5 pb-5 bg-light">
            <div class="container text-center">
                <h2 class="display-5" id="produk" style=" text-align: center; padding: 3px; font-weight: bold;">Produk
                </h2>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos magnam nobis, -->
                <!-- hic tempora animi voluptate soluta error excepturi enim sed?
        </p> -->
                <div class="row pt-4 gx-4 gy-4">
                    <div class="col-md-4">
                        <div class="card" style="box-shadow: 5px 10px 18px #33c6dc;">
                            <img class="card-img-top" src="assets/img/hj2.jpg" width="100px" height="200px" />
                            <div class="card-body">
                                <h5 class="card-title">Pyrazinamide 500Mg</h5>
                                <p class="card-text">Pyrazinamide adalah obat untuk mengobati penyakit tuberkulosis
                                    (TBC). Obat ini bekerja dengan cara membunuh dan menghentikan perkembangan bakteri
                                    penyebab TBC. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="box-shadow: 5px 10px 18px #33c6dc;">
                            <img class="card-img-top" src="assets/img/hj2.jpg" width="100px" height="200px" />
                            <div class="card-body">
                                <h5 class="card-title">Amlodipine 10Mg</h5>
                                <p class="card-text">Obat amlodipine bermanfaat untuk menurunkan tekanan darah tinggi,
                                    membantu mencegah stroke, serangan jantung, dan masalah ginjal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="box-shadow: 5px 10px 18px #33c6dc;">
                            <img class="card-img-top" src="assets/img/hj2.jpg" width="100px" height="200px" />
                            <div class="card-body">
                                <h5 class="card-title">Pioglitazone 30Mg</h5>
                                <p class="card-text">Pioglitazone adalah obat antidiabetes untuk menurunkan kadar gula
                                    darah pada diabetes tipe 2.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center">
            <p>Copyright &copy; 2022 All rights reserved by Sukron Maulana</p>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous">
            </script>
</body>

</html>