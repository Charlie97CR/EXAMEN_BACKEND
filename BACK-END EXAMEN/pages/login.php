<?php
require_once("../system/config.php");
session_start();

$mensaje = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $correoOCedula = $_POST['correoCedula'];
    $password = $_POST['passIngresada'];

    $query = "SELECT id_usuario, contraseña  FROM usuario  WHERE cedula = '$correoOCedula' OR correo = '$correoOCedula'";

    $resultado = mysqli_query($conn, $query);

    $filasEncontradas = mysqli_num_rows($resultado);

    if($filasEncontradas > 0) {

        $usuario = mysqli_fetch_assoc($resultado);
        $passwordHash= hash("sha256", $password);

        if($usuario['contraseña'] === $passwordHash) 
        {
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            header("Location: index.html");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Correo o contraseña incorrectos</div>";
        }

    }else {
        echo "<div class='alert alert-danger'>Correo o contraseña incorrectos</div>";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio de sesion | Mi pagina web</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap"
        rel="stylesheet">

    <link href="../assets/template/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/template/assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="../assets/template/assets/css/tooplate-kool-form-pack.css" rel="stylesheet">


</head>

<body>

    <main>

        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form login-form" role="form" method="post">
                            <h2 class="hero-title text-center mb-4 pb-2">Iniciar Sesión</h2>

                            <div class="form-floating mb-4 p-0">
                                <input type="text" name="correoCedula" id="email" class="form-control"
                                    placeholder="Correo Electrónico" required="">

                                <label for="email">Correo Electrónico o Cedula</label>
                            </div>

                            <div class="form-floating p-0">
                                <input type="password" name="passIngresada" id="password" class="form-control"
                                    placeholder="Contraseña" required="">

                                <label for="password">Contraseña</label>
                            </div>

                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-5 col-12">
                                    <button type="submit" class="form-control">Iniciar Sesión</button>
                                </div>

                                <div class="col-lg-5 col-12">
                                    <a href="Registro.php" class="btn custom-btn custom-border-btn">Registrarse</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="../assets/template/assets/videos/video.mp4" type="video/mp4">
                </video>
            </div>
        </section>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="../assets/template/assets/js/jquery.min.js"></script>
    <script src="../assets/template/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/template/assets/js/countdown.js"></script>
    <script src="../assets/template/assets/js/init.js"></script>

</body>

</html>