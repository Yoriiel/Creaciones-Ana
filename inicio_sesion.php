<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-clean">
        <div style="margin-top: 36px;">
            <h2 class="visually-hidden">Login Form</h2>
            <form action="user.php" class="border-primary" method="post" style="border-radius: 27px;box-shadow: 0px 0px 20px 4px var(--bs-red);border-color: var(--bs-red);border-top-color: var(--bs-red);border-left-color: var(--bs-red);">
                <div class="illustration"><i class="icon ion-ios-contact border-primary" style="color: var(--bs-danger);"></i>
                    <h1 class="text-center" style="color: var(--bs-red);margin-top: -23px;">Iniciar sesión</h1>
                </div>
                <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Usuario"></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Contraseña"></div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-red);">Log In</button></div><a class="forgot" href="#"></a>
            </form>
        </div>
    </section>
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
