
<?php
require("../conexion.php");

if (!empty($_POST["btningresar"])) {

    if (empty($_POST["cveusuario"]) and empty($_POST["pass1"])) {
        echo '<div class = "alert alert-danger"> Los Campos estan vacios</div>';
    } else {

        $cveusuario = $_POST["cveusuario"];
        $pass1 = $_POST["pass1"];
        $sql = $conn->query(" SELECT * FROM login WHERE userName='$cveusuario' and pass='$pass1'");
        if ($datos = $sql->fetch_object()) {
            header("location: ../src/vistas/manual.php");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            header("location: ../index.php");
        }
        
    }
    mysqli_close($conn);
}
?>