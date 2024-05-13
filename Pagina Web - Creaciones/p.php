<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>auto centro</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <?php
     ?> <a href="cerrar_sesion.php">Cerrar Sesion </a><?php
      session_start();
      echo  $_SESSION['usuario'];
      if($_SESSION['usuario']== null || $_SESSION['usuario']==''){
        header("Location:inicio_sesion.php");
      }
  ?>
</head>

<body>
<div>
        <header class="text-start">
            <h1 style="color: var(--bs-body-bg);margin: 21px;margin-left: 21px;background: var(--bs-red);border-radius: 7px;">AutoCentro 2.0</h1>
        </header>
    </div>
    <div style="text-align: right;"><input class="form-control-sm" type="search" style="margin-left: 0;margin-right: 10px;" placeholder="Buscar" name="buscar" autocomplete="on"><button class="btn btn-primary btn-sm" type="button" style="margin-right: 20px;margin-left: 0;height: 32px;margin-top: -6px;color: var(--bs-white);background: var(--bs-red);font-size: 15px;">Buscar</button></div>
    <div style="margin-top: 13px;">
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item active" style="width: 100%;"><img class="w-100 d-block" src="assets/img/1.jpg" alt="Slide Image" style="height: 607.838px;width: 1080.6px;" loading="lazy"></div>
                <div class="carousel-item" style="width: 100%;"><img class="w-100 d-block" src="assets/img/2.jpg" alt="Slide Image" style="height: 607.838px;width: 1080.6px;"></div>
                <div class="carousel-item" style="width: 100%;"><img class="w-100 d-block" src="assets/img/3.jpg" alt="Slide Image" style="height: 607.838px;width: 1080.6px;"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png" loading="lazy"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="text-align: center;"><img class="img-fluid" src="assets/img/llanta.png"></div>
                    <div>
                        <p style="text-align: center;">Paragraph</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-clean">
        <div class="container">
            <div class="row justify-content-center" style="color: var(--bs-red);">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">CreacionesAna © 2022</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
