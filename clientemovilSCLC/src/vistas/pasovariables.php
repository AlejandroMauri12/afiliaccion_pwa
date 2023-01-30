<?php
if (!empty($_POST["btningresar"])) {

if (empty($_POST["userName"]) and empty($_POST["pass1"])) {
echo '<div class="alert alert-danger"> Los Campos estan vacios</div>';
} else {

$cveusuario = $_POST["cveusuario"];
$pass1 = $_POST["pass1"];
$sql = $conn->query(" SELECT * FROM login WHERE userName='$cveusuario' and pass='$pass1'");
if ($datos = $sql->fetch_object()) {
echo '<div class="alert alert-success">USUARIO AUTORIZADO</div>';
echo $cveusuario;
echo " ";
echo $pass1;
//header("location: ./vistas/manual.php");
} else {
echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
}
}
//mysqli_close($conn);
}
//require("./config/");

//require("./variables.php");
                /*$result = $conn->query("SELECT userName FROM login WHERE pass='$pass1'");
                    $row = mysqli_fetch_row($result);
                    $usuario = $row[0];

                    $sql1 = "UPDATE simpatizantes SET userName='$usuario'";

                    if (mysqli_query($conn, $sql1)) {
                        echo "Usuario actualizado satisfactoriamente\n";
                    } else {
                        echo "<br>" . "Error: " . $sql1 . "<br>" . mysqli_error($conn);
                    }
            }
        }



        /*$result1 = $conn->query("SELECT idpartido FROM login WHERE pass='$passleido'");
            $row = mysqli_fetch_row($result1);
            $partido = $row[0];

            $sql2 = "UPDATE simpatizantes SET idpartido='$partido'";

            if (mysqli_query($conn, $sql2)) {
                echo "Partido actualizado satisfactoriamente\n";
            } else {
                echo "<br>" . "Error: " . $sql2 . "<br>" . mysqli_error($conn);
            }*/
?>