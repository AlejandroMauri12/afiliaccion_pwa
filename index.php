<!DOCTYPE html>
<html lang="es-Mx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="AfiliAcción">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/svg" href="./src/images/icoafiliaccion.svg">
    <link rel="apple-touch-icon" href="./src/images/icoafiliaccion.svg">
    <link rel="apple-touch-startup-image" href="./src/images/icoafiliaccion.svg">
    <link rel="icon" href="./src/images/favicon.ico">
    <link rel="manifest" href="./manifest.json">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Afiliacción</title>
    <!-- Bootstrap core CSS -->
    <link href="./src/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link href="./src/css/estilos.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php
    //require("./conexion.php");
    //require("./src/controlador.php");

    ?>
    <main role="main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="wrapper">
                        <div class="logo">
                            <img src="./src/images/icoafiliaccion.svg" alt="">
                        </div>
                        <div class="text-center mt-4 name">
                            <img src="./src/images/logo2.png" alt="AfiliAcción">
                        </div>
                        <form action="./src/vistas/registro.php" class="p-3 mt-3" method="GET">
                            <div class="form-field d-flex align-items-center">
                                <span class="far fa-user"></span>
                                <input type="text" name="userName" id="userName" placeholder="Usuario">
                            </div>
                            <div class="form-field d-flex align-items-center">
                                <span class="fas fa-key"></span>
                                <input type="password" name="password" id="pwd" placeholder="Contraseña">
                            </div>
                            <button class="btn mt-3">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./src/js/bootstrap.bundle.min.js"></script>
    <script src="./script.js"></script>

</body>

</html>