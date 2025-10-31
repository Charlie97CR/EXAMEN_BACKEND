<?php
require_once("../system/config.php");
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombreUsuario = $_POST['full-name'];
    $correoUsuario = $_POST['email'];
    $cedulaUsuario = $_POST['cedulaUsario'];
    $passUsuario = $_POST['Contraseña'];
    $passConfirmar = $_POST['confirmarContraseña'];


    if ($passConfirmar === $passUsuario) {

        //Hashear contraseña
        $passwordHash = hash("sha256", $passUsuario);

        $query = "INSERT INTO `usuario`(`nombre`, `cedula`, `contraseña`,`correo`) VALUES ('$nombreUsuario','$cedulaUsuario','$passwordHash','$correoUsuario')";

        $resultado = mysqli_query($conn, $query);

        // Ejecutar la consulta
        if ($resultado) {
            echo "<div class='alert alert-success'>Usuario registrado correctamente.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Las contraseñas no coinciden.</div>";
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

    <title>Crear cuenta | Mi pagina web</title>

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

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form" role="form" method="post">
                            <h2 class="hero-title text-center mb-4 pb-2">Crear una cuenta</h2>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="full-name" id="full-name" class="form-control"
                                            placeholder="Nombre completo" required="">

                                        <label for="floatingInput">Nombre completo</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating mb-4 p-0">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Correo Electrónico" required="">

                                        <label for="email">Correo Electrónico</label>
                                    </div>
                                </div>
                                
                                <!-- Campo cedula -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating mb-4 p-0">
                                        <input type="text" name="cedulaUsario" id="cedulaUsario"
                                            class="form-control" placeholder="cedulaUsario" required="">

                                        <label for="email">Número de Cedula</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating p-0">
                                        <input type="password" name="Contraseña" id="password" class="form-control"
                                            placeholder="Password" required="">

                                        <label for="password">Contraseña</label>
                                    </div>

                                </div>

                                <!-- Campo confirmar contraseña -->         
                                <div class="col-lg-12 col-12">
                                    <div class="form-floating mb-4 p-0">
                                        <input type="password" name="confirmarContraseña" id="confirmarContraseña"
                                            class="form-control" placeholder="Confirmar contraseña" required="">

                                        <label for="email">Confirmar contraseña</label>
                                    </div>
                                </div>

                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-5 col-md-5 col-5 ms-auto">
                                        <button type="submit" class="form-control">Crear Cuenta</button>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-7">
                                        <p class="mb-0">¿Ya tienes una cuenta? <a href="login.php"
                                                class="ms-2">Iniciar Sesión</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="../assets/template/assets/videos/video.mp4" type="video/mp4">

                    Your browser does not support the video tag.
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