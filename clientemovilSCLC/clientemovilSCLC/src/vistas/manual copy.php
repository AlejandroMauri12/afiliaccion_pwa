<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AfiliAcción</title>
    <link rel="icon" href="../images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link href="../css/estilos.css" rel="stylesheet">
    <!--<script src="../js/validar.js"></script>-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-light">
    <main>
        <?php
        session_start();
        require("../../conexion.php");

        echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "¡USUARIO AUTORIZADO!",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';

        if (!empty($_POST["btningresar"])) {
            if (empty($_POST["cveusuario"]) and empty($_POST["pass1"])) {
                echo '<div class = "alert alert-danger"> Los Campos estan vacíos</div>';
            } else {

                $cveusuario = $_POST["cveusuario"];
                $pass1 = $_POST["pass1"];

                if (!isset($_SESSION['usuarioValido'])) {
                    $_SESSION['usuarioValido'] = $cveusuario;
                }

                $sql = $conn->query(" SELECT * FROM login WHERE userName='$cveusuario' and pass='$pass1'");
                /*if ($datos = $sql->fetch_object()) {
                    echo '<div class="alert alert-success">USUARIO AUTORIZADO</div>';
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "¡USUARIO AUTORIZADO!",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';
                } else {
                    echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
                    /*echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "¡ACCESO DENEGADO!",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';
                    header("location: /clientemovil/index.php");
                }*/
            }
        }
        ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="wrapper">
                        <div class="logo">
                            <img src="../images/icoafiliaccion.svg" alt="icoafiliacción">
                        </div>
                        <div class="text-center mt-4 name">
                            <img src="../images/logo2.png" alt="logo2.png">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="p-4 mb-3 bg-light rounded">
                                    <ul class="list-group list-group-flush anyClass">
                                        <li class="list-group-item my-2">
                                            <div>
                                                <form method="post">
                                                    <!-- class="was-validated" class="form-inline"-->
                                                    <div class="form-floating mb-3">
                                                        <input name=cveElectoral class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" placeholder="Clave Electoral" required minlength="18"/>
                                                        <!-- required maxlength="18"-->
                                                        <label for="floatingInput">Clave Electoral</label>
                                                        <!--<div class="valid-feedback"> Ingrese 18 caracteres</div>-->
                                                    </div>

                                                    <div class="form-floating">
                                                        <input name=Curp class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" placeholder="CURP" required minlength="18" />
                                                        <label for="floatingInput">CURP</label>
                                                        <div class="valid-feedback"> Ingrese 18 caracteres</div>
                                                    </div>

                                                    <div class="form-floating">
                                                        <input name=Paterno class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" maxlength="35" placeholder="Apellido Paterno" required /><label for="floatingInput">Apellido Paterno</label>
                                                    </div>

                                                    <div class="form-floating">
                                                        <input name=Materno class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" maxlength="35" placeholder="Apellido Materno" required />
                                                        <label for="floatingInput">Apellido Materno</label>
                                                    </div>

                                                    <div class="form-floating">
                                                        <input name=Nombre class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" maxlength="35" placeholder="Nombre" required />
                                                        <label for="floatingInput">Nombre</label>
                                                    </div>

                                                    <div class="form-floating">
                                                        <input name=Fecha class="form-control mr-sm-2 my-2" placeholder="Fecha Nacimiento" type="date" required />
                                                        <label for="floatingInput">Fecha de Nacimiento</label>
                                                    </div>

                                                    <div class="form-floating">
                                                        <div class="form-check">
                                                            <label for="floatingInput">Sexo</label><br>
                                                            <label class="form-check-label" for="flexRadioDefault1"><input class="form-check-input" type="radio" id="flexRadioDefault1" name="Sexo" value="H" required />
                                                                    Hombre
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                                <label class="form-check-label" for="flexRadioDefault2"><input class="form-check-input" type="radio" id="flexRadioDefault2" name="Sexo" value="M" required />
                                                                    Mujer
                                                                </label>
                                                        </div>
                                                    </div>

                                                        <div class="form-floating">
                                                            <select name=Estado class="form-control mr-sm-2 my-3" placeholder="Estado">
                                                                <option value="Estado">Elige Estado</option>
                                                                <option value="1AguasCalientes">1 AGUAS CALIENTES</option>
                                                                <option value="2BajaCalifornia">2 BAJA CALIFORNIA</option>
                                                                <option value="3BajaCaliforniaSur">3 BAJA CALIFORNIA SUR</option>
                                                                <option value="4Campeche">4 CAMPECHE</option>
                                                                <option value="5Coahula">5 COAHUILA</option>
                                                                <option value="6Colima">6 COLIMA</option>
                                                                <option value="7Chiapas" selected>7 CHIAPAS</option>
                                                                <option value="8Chihuahua">8 CHIHUAHUA</option>
                                                                <option value="9CiudadDeMexico">9 CIUDAD DE MEXICO</option>
                                                                <option value="10Durango">10 DURANGO</option>
                                                                <option value="11Guanajuato">11 GUANAJUATO</option>
                                                                <option value="12Guerrero">12 GUERRERO</option>
                                                                <option value="13Hidalgo">13 HIDALGO</option>
                                                                <option value="14Jalisco">14 JALISCO</option>
                                                                <option value="15Mexico">15 MEXICO</option>
                                                                <option value="16Michoacan">16 MICHOACAN</option>
                                                                <option value="17Morelos">17 MORELOS</option>
                                                                <option value="18Nayarit">18 NAYARIT</option>
                                                                <option value="19NuevoLeon">19 NUEVO LEON</option>
                                                                <option value="20Oaxaca">20 OAXACA</option>
                                                                <option value="21Puebla">21 PUEBLA</option>
                                                                <option value="22Queretaro">22 QUERETARO</option>
                                                                <option value="23QuintanaRoo">23 QUINTANA ROO</option>
                                                                <option value="24SanLuisPotosi">24 SAN LUIS POTOSI</option>
                                                                <option value="25Sinaloa">25 SINALOA</option>
                                                                <option value="26Sonora">26 SONORA</option>
                                                                <option value="27Tabasco">27 TABASCO</option>
                                                                <option value="28Tamaulipas">28 TAMAULIPAS</option>
                                                                <option value="29Tlaxcala">29 TLAXCALA</option>
                                                                <option value="30Veracruz">30 VERACRUZ</option>
                                                                <option value="31Yucatan">31 YUCATAN</option>
                                                                <option value="32Zacatecas">32 ZACATECAS</option>
                                                            </select>
                                                            <label for="floatingInput">Estado</label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <select name=Municipio class="form-control mr-sm-2 my-3" placeholder="Municipio">
                                                                <option value="102Tuxtla Gutiérrez">102 TUXTLA GUTIERREZ</option>
                                                            </select>
                                                            <label for="floatingInput">Municipio</label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <select name=Localidad class="form-control mr-sm-2 my-3" placeholder="Localidad">
                                                                <optgroup label="TUXTLA GUTIERREZ">
                                                                    <option value="Estado">Elige Localidad</option>
                                                                    <option>ADELITA</option>
                                                                    <option>AGUA ESCONDIDA</option>
                                                                    <option>ALBORES GUILLEN</option>
                                                                    <option>AMPLIACION CONDESA</option>
                                                                    <option>ARGELIA</option>
                                                                    <option>BUENA VISTA</option>
                                                                    <option>BUENOS AIRES</option>
                                                                    <option>CAÑON DEL SUMIDERO</option>
                                                                    <option>CABEZA DE TORO</option>
                                                                    <option>GUADALUPE COUNTRY</option>
                                                                    <option>CHULAVISTA</option>
                                                                    <option>COLINAS DE GETSEMANI</option>
                                                                    <option>CONSORCIO BUENOS AIRES</option>
                                                                    <option>COPOYA</option>
                                                                    <option>DOS HERMANOS</option>
                                                                    <option>EL BARBASCO</option>
                                                                    <option>EL CAPRICHO</option>
                                                                    <option>EL CARMEN</option>
                                                                    <option>EL CARRIZAL</option>
                                                                    <option>EL CHORRITO</option>
                                                                    <option>EL DOLAR</option>
                                                                    <option>EL DIAMANTE</option>
                                                                    <option>EL ENCANTO</option>
                                                                    <option>EL GRAN CHAPARRAL</option>
                                                                    <option>EL JOBO</option>
                                                                    <option>EL LIMON</option>
                                                                    <option>EL MILAGRO</option>
                                                                    <option>EL NANCHAL</option>
                                                                    <option>EL NUEVO TRIUNFO</option>
                                                                    <option>EL PARAISO</option>
                                                                    <option>EL PEÑASCO II</option>
                                                                    <option>EL PORVENIR</option>
                                                                    <option>EL REFUGIO</option>
                                                                    <option>EL RELICARIO</option>
                                                                    <option>EL SABINITO</option>
                                                                    <option>EL TEMPISQUE</option>
                                                                    <option>RANCHO ALEGRE</option>
                                                                    <option>EL ZAPOTE NEGRO</option>
                                                                    <option>EMILIANO ZAPATA (AGUA FRIA)</option>
                                                                    <option>FLAMBOYAN</option>
                                                                    <option>FLOR DE MAYO</option>
                                                                    <option>FLORITA</option>
                                                                    <option>FRACCIONAMIENTO LA VICTORIA</option>
                                                                    <option>FRATERNIDAD ANTORCHISTA</option>
                                                                    <option>GUADALUPE</option>
                                                                    <option>EL POTRILLO</option>
                                                                    <option>HERNAN CUNDAPI</option>
                                                                    <option>HEROES DE LA PATRIA</option>
                                                                    <option>DEMOCRACIA</option>
                                                                    <option>SANTA SOFIA</option>
                                                                    <option>LA CRUZ DEL MOJON</option>
                                                                    <option>LA ESPERANZA</option>
                                                                    <option>LA FLORIDA</option>
                                                                    <option>LA FORTUNA</option>
                                                                    <option>LA GUARIDA DEL TIGRE</option>
                                                                    <option>LA ILUSION</option>
                                                                    <option>LA LIBERTAD</option>
                                                                    <option>LA LOMITA</option>
                                                                    <option>LA PIMIENTA</option>
                                                                    <option>LA PRECIOSA</option>
                                                                    <option>LA PROVIDENCIA</option>
                                                                    <option>LA PURISIMA</option>
                                                                    <option>LACANDON</option>
                                                                    <option>LARGAS LOMAS</option>
                                                                    <option>LAS ARBOLEDAS</option>
                                                                    <option>LAS CIRIAS</option>
                                                                    <option>LAS CRUCES</option>
                                                                    <option>LAS GRANJAS</option>
                                                                    <option>LAS MARAVILLAS</option>
                                                                    <option>LAS MURALLAS</option>
                                                                    <option>LINDAVISTA</option>
                                                                    <option>LLANO DE LA VIRGEN</option>
                                                                    <option>LLANO REDONDO</option>
                                                                    <option>LOS 3 POTRILLOS</option>
                                                                    <option>QUINTA BEATRIZ</option>
                                                                    <option>LOS CRISANTEMOS</option>
                                                                    <option>LOS FRAMBOYANES</option>
                                                                    <option>EL SEÑOR DE TILA</option>
                                                                    <option>LOS SABINOS</option>
                                                                    <option>MAWICHO</option>
                                                                    <option>NUEVO JERUSALEN</option>
                                                                    <option>NUEVO SAN JUAN</option>
                                                                    <option>OTATAL</option>
                                                                    <option>PEÑASCO ZAPATA</option>
                                                                    <option>EL TRAILERO (PENSION)</option>
                                                                    <option>PIEDRA SANTA</option>
                                                                    <option>POMARROSA</option>
                                                                    <option>PUENTE VIEJO</option>
                                                                    <option>QUINTA AMELIA</option>
                                                                    <option>QUINTA CAROLINA</option>
                                                                    <option>QUINTA CONCORDIA</option>
                                                                    <option>QUINTA FLORECITA</option>
                                                                    <option>QUINTA GUADALUPE</option>
                                                                    <option>QUINTA MARIA</option>
                                                                    <option>QUINTA PRIMAVERA</option>
                                                                    <option>REPETIDORA DE RADIO LA PEDRERA</option>
                                                                    <option>RIZO DE ORO</option>
                                                                    <option>ROBERTO TRUJILLO LOPEZ</option>
                                                                    <option>SACRAMENTO DE JESUS</option>
                                                                    <option>SAGRADO CORAZON DE JESUS</option>
                                                                    <option>UNIDAD DE ATENCION A LA SALUD MENTAL SAN AGUSTIN</option>
                                                                    <option>SAN ANTONIO</option>
                                                                    <option>SAN ANTONIO (EL CARRIZAL)</option>
                                                                    <option>SAN DIEGO</option>
                                                                    <option>SAN FERNANDO</option>
                                                                    <option>SAN FRANCISCO DE ASIS</option>
                                                                    <option>SAN FRANCISCO JAVIER</option>
                                                                    <option>SAN GABRIEL</option>
                                                                    <option>SAN ISIDRO</option>
                                                                    <option>SAN JOSE</option>
                                                                    <option>SAN JOSE LAHUALOYO</option>
                                                                    <option>SAN JUAN</option>
                                                                    <option>SAN JUAN DE LAS POZAS</option>
                                                                    <option>SAN JUDITAS</option>
                                                                    <option>SAN LUIS</option>
                                                                    <option>SAN RAFAEL</option>
                                                                    <option>SAN VICENTE EL ALTO</option>
                                                                    <option>SAN RAFAEL LA CIRIA</option>
                                                                    <option>SANTA CECILIA PRIMAVERA</option>
                                                                    <option>SANTA CRUZ</option>
                                                                    <option>SANTA ELENA</option>
                                                                    <option>SANTA ISABEL</option>
                                                                    <option>SANTA JULIA</option>
                                                                    <option>SANTA MARTHA</option>
                                                                    <option>SANTA RITA</option>
                                                                    <option>SANTA TERESA</option>
                                                                    <option>SANTA TRINIDAD</option>
                                                                    <option>SANTO TOMAS</option>
                                                                    <option>RESIDENCIAL LA CABAÑA</option>
                                                                    <option>SUÑIMATZA</option>
                                                                    <option>TERCERA FRACCION CRUZ DEL MOJON</option>
                                                                    <option>TIERRA COLORADA</option>
                                                                    <option>TOLEDO</option>
                                                                    <option>TRES HERMANOS</option>
                                                                    <option>TUXTLA GUTIERREZ</option>
                                                                    <option>UNION FAMILIAR</option>
                                                                    <option>VILLA ACACIA</option>
                                                                    <option>LA FORTUNA</option>
                                                                    <option>VILLA SAN JORGE</option>
                                                                    <option>YUQUIZ</option>
                                                                </optgroup>
                                                            </select>
                                                            <label for="floatingInput">Localidad</label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <input name=Colonia class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" maxlength="50" placeholder="Colonia" required />
                                                            <label for="floatingInput">Colonia</label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <input name=Domicilio class="form-control mr-sm-2 my-2" type="text" onkeyup="this.value = this.value.toUpperCase();" maxlength="50" placeholder="Domicilio" required />
                                                            <label for="floatingInput">Domicilio</label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <input name=Telefono class="form-control mr-sm-2 my-2" type="integer" maxlength="10" placeholder="Número Telefónico" required />
                                                            <label for="floatingInput">Número Telefónico</label>
                                                            <div class="valid-feedback"> Ingrese 10 dijitos</div>
                                                        </div>


                                                        <div class="form-floating">
                                                            <input name=Facebook class="form-control mr-sm-2 my-2" type="text" placeholder="Facebook" required />
                                                            <label for="floatingInput">Facebook</label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <input name=Instagram class="form-control mr-sm-2 my-2" type="text" placeholder="Instagram" required />
                                                            <label for="floatingInput">Instagram</label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <input name=Otro class="form-control mr-sm-2 my-2" type="text" placeholder="Otra Red Social" required />
                                                            <label for="floatingInput">Otra Red Social</label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <select name=Seccion class="form-control mr-sm-2 my-3" placeholder="Sección">
                                                                <option value="Seccion">Elige Seccion</option>
                                                                <optgroup label="TUXTLA GUTIERREZ">
                                                                    <option>1602</option>
                                                                    <option>1603</option>
                                                                    <option>1604</option>
                                                                    <option>1605</option>
                                                                    <option>1607</option>
                                                                    <option>1608</option>
                                                                    <option>1609</option>
                                                                    <option>1610</option>
                                                                    <option>1611</option>
                                                                    <option>1612</option>
                                                                    <option>1613</option>
                                                                    <option>1614</option>
                                                                    <option>1615</option>
                                                                    <option>1616</option>
                                                                    <option>1617</option>
                                                                    <option>1618</option>
                                                                    <option>1619</option>
                                                                    <option>1620</option>
                                                                    <option>1621</option>
                                                                    <option>1622</option>
                                                                    <option>1623</option>
                                                                    <option>1624</option>
                                                                    <option>1625</option>
                                                                    <option>1626</option>
                                                                    <option>1627</option>
                                                                    <option>1628</option>
                                                                    <option>1629</option>
                                                                    <option>1630</option>
                                                                    <option>1631</option>
                                                                    <option>1632</option>
                                                                    <option>1633</option>
                                                                    <option>1634</option>
                                                                    <option>1635</option>
                                                                    <option>1636</option>
                                                                    <option>1637</option>
                                                                    <option>1643</option>
                                                                    <option>1644</option>
                                                                    <option>1645</option>
                                                                    <option>1646</option>
                                                                    <option>1647</option>
                                                                    <option>1648</option>
                                                                    <option>1649</option>
                                                                    <option>1650</option>
                                                                    <option>1651</option>
                                                                    <option>1652</option>
                                                                    <option>1653</option>
                                                                    <option>1654</option>
                                                                    <option>1655</option>
                                                                    <option>1656</option>
                                                                    <option>1657</option>
                                                                    <option>1659</option>
                                                                    <option>1660</option>
                                                                    <option>1661</option>
                                                                    <option>1662</option>
                                                                    <option>1663</option>
                                                                    <option>1664</option>
                                                                    <option>1665</option>
                                                                    <option>1666</option>
                                                                    <option>1667</option>
                                                                    <option>1668</option>
                                                                    <option>1669</option>
                                                                    <option>1670</option>
                                                                    <option>1671</option>
                                                                    <option>1673</option>
                                                                    <option>1674</option>
                                                                    <option>1675</option>
                                                                    <option>1676</option>
                                                                    <option>1677</option>
                                                                    <option>1678</option>
                                                                    <option>1679</option>
                                                                    <option>1680</option>
                                                                    <option>1681</option>
                                                                    <option>1682</option>
                                                                    <option>1683</option>
                                                                    <option>1684</option>
                                                                    <option>1685</option>
                                                                    <option>1686</option>
                                                                    <option>1687</option>
                                                                    <option>1688</option>
                                                                    <option>1689</option>
                                                                    <option>1690</option>
                                                                    <option>1691</option>
                                                                    <option>1692</option>
                                                                    <option>1693</option>
                                                                    <option>1694</option>
                                                                    <option>1695</option>
                                                                    <option>1696</option>
                                                                    <option>1697</option>
                                                                    <option>1698</option>
                                                                    <option>1699</option>
                                                                    <option>1700</option>
                                                                    <option>1707</option>
                                                                    <option>1708</option>
                                                                    <option>1709</option>
                                                                    <option>1710</option>
                                                                    <option>1711</option>
                                                                    <option>1712</option>
                                                                    <option>1713</option>
                                                                    <option>1714</option>
                                                                    <option>1715</option>
                                                                    <option>1716</option>
                                                                    <option>1717</option>
                                                                    <option>1718</option>
                                                                    <option>1719</option>
                                                                    <option>1720</option>
                                                                    <option>1721</option>
                                                                    <option>1722</option>
                                                                    <option>1723</option>
                                                                    <option>1724</option>
                                                                    <option>1725</option>
                                                                    <option>1726</option>
                                                                    <option>1727</option>
                                                                    <option>1728</option>
                                                                    <option>1729</option>
                                                                    <option>1742</option>
                                                                    <option>1743</option>
                                                                    <option>1745</option>
                                                                    <option>1746</option>
                                                                    <option>1747</option>
                                                                    <option>1748</option>
                                                                    <option>1749</option>
                                                                    <option>1750</option>
                                                                    <option>1751</option>
                                                                    <option>1752</option>
                                                                    <option>1753</option>
                                                                    <option>1754</option>
                                                                    <option>1930</option>
                                                                    <option>1931</option>
                                                                    <option>1932</option>
                                                                    <option>1933</option>
                                                                    <option>1934</option>
                                                                    <option>1935</option>
                                                                    <option>1936</option>
                                                                    <option>1937</option>
                                                                    <option>1938</option>
                                                                    <option>1939</option>
                                                                    <option>1940</option>
                                                                    <option>1941</option>
                                                                    <option>1942</option>
                                                                    <option>1943</option>
                                                                    <option>1944</option>
                                                                    <option>1945</option>
                                                                    <option>1946</option>
                                                                    <option>1947</option>
                                                                    <option>1948</option>
                                                                    <option>1949</option>
                                                                    <option>1950</option>
                                                                    <option>1951</option>
                                                                    <option>1952</option>
                                                                    <option>1953</option>
                                                                    <option>1954</option>
                                                                    <option>1955</option>
                                                                    <option>1956</option>
                                                                    <option>1957</option>
                                                                    <option>1958</option>
                                                                    <option>1959</option>
                                                                    <option>1960</option>
                                                                    <option>1961</option>
                                                                    <option>1962</option>
                                                                    <option>1963</option>
                                                                    <option>1964</option>
                                                                    <option>1965</option>
                                                                    <option>1966</option>
                                                                    <option>1967</option>
                                                                    <option>1968</option>
                                                                    <option>1969</option>
                                                                    <option>1970</option>
                                                                    <option>1971</option>
                                                                    <option>1972</option>
                                                                    <option>1973</option>
                                                                    <option>1974</option>
                                                                    <option>1975</option>
                                                                    <option>2012</option>
                                                                    <option>2013</option>
                                                                    <option>2014</option>
                                                                    <option>2015</option>
                                                                    <option>2016</option>
                                                                    <option>2017</option>
                                                                    <option>2018</option>
                                                                    <option>2019</option>
                                                                    <option>2020</option>
                                                                    <option>2021</option>
                                                                    <option>2022</option>
                                                                    <option>2023</option>
                                                                    <option>2024</option>
                                                                    <option>2025</option>
                                                                    <option>2026</option>
                                                                    <option>2027</option>
                                                                    <option>2028</option>
                                                                    <option>2029</option>
                                                                    <option>2030</option>
                                                                    <option>2031</option>
                                                                    <option>2032</option>
                                                                    <option>2033</option>
                                                                    <option>2034</option>
                                                                    <option>2035</option>
                                                                    <option>2036</option>
                                                                    <option>2037</option>
                                                                    <option>2038</option>
                                                                    <option>2039</option>
                                                                    <option>2040</option>
                                                                    <option>2041</option>
                                                                    <option>2042</option>
                                                                    <option>2043</option>
                                                                    <option>2044</option>
                                                                    <option>2045</option>
                                                                    <option>2046</option>
                                                                    <option>2116</option>
                                                                    <option>2116</option>
                                                                    <option>2117</option>
                                                                    <option>2118</option>
                                                                    <option>2119</option>
                                                                    <option>2131</option>
                                                                    <option>2132</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>

                                                        <div class="form-floating">
                                                            <input name=ValidaUsuario class="form-control mr-sm-2 my-2" type="text" placeholder="Validar Usuario" required />
                                                            <label for="floatingInput">Validar Usuario</label>
                                                        </div>

                                                        <input name="btnAgendar" class="btn btn-primary btn mt-3" type="submit" value="Agendar">

                                                        <a href="./finalizar.php" class="btn btn-primary btn mt-3">Salir</a>

                                                </form>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (!empty($_POST["btnAgendar"])) {
            if (empty($_POST["cveElectoral"]) or empty($_POST["Curp"])) {
                echo '<script>
                Swal.fire({
                    icon: "warning",
                    title: "¡Campos vacios!",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';
            } else {
                $cveusuario = $_POST["cveusuario"] ?? null;
                $pass1 = $_POST["pass1"] ?? null;
                date_default_timezone_set("America/Mexico_City");
                $cveElectoral = $_POST["cveElectoral"];
                $curp = $_POST["Curp"];
                $nombre = $_POST["Nombre"];
                $apaterno = $_POST["Paterno"];
                $amaterno = $_POST["Materno"];
                $fecha_nac = $_POST["Fecha"];
                $sexo = $_POST["Sexo"];
                $domicilio = $_POST["Domicilio"];
                $colonia = $_POST["Colonia"];
                $localidad = $_POST["Localidad"];
                $municipio = $_POST["Municipio"];
                $estado = $_POST["Estado"];
                $numtelefono = $_POST["Telefono"];
                $facebook = $_POST["Facebook"];
                $instagram = $_POST["Instagram"];
                $otro = $_POST["Otro"];
                $dt2 = date("Y-m-d H:i:s");
                $usuario = $_POST["ValidaUsuario"];
                $cveseccion = $_POST["Seccion"];

                if (strlen($_POST["cveElectoral"]) > 18) {
                    echo '<script>
                    Swal.fire({
                        icon: "warning",
                        title: "¡Clave Electoral mayor a 18 caracteres verifique los datos!",
                        showConfirmButton: true,
                        confirmButtonText: "ACEPTAR"
                    });
                </script>';}
                elseif (strlen($_POST["cveElectoral"]) < 18) {
                    echo '<script>
                    Swal.fire({
                        icon: "erroe",
                        title: "¡Clave Electoral menor a 18 caracteres verifique los datos!",
                        showConfirmButton: true,
                        confirmButtonText: "ACEPTAR"
                    });
                </script>';}
                else{
                    if (strlen($_POST["Curp"]) > 18) {
                        echo '<script>
                        Swal.fire({
                            icon: "warning",
                            title: "¡CURP mayor a 18 caracteres verifique los datos!",
                            showConfirmButton: true,
                            confirmButtonText: "ACEPTAR"
                        });
                    </script>';}
                    elseif (strlen($_POST["Curp"]) < 18) {
                        echo '<script>
                        Swal.fire({
                            icon: "erroe",
                            title: "¡CURP menor a 18 caracteres verifique los datos!",
                            showConfirmButton: true,
                            confirmButtonText: "ACEPTAR"
                        });
                    </script>';}
                    else{
                        if (strlen($_POST["Telefono"]) > 10) {
                            echo '<script>
                            Swal.fire({
                                icon: "warning",
                                title: "¡Numero telefonico invalido!",
                                showConfirmButton: true,
                                confirmButtonText: "ACEPTAR"
                            });
                        </script>';}
                        elseif (strlen($_POST["Telefono"]) < 10) {
                            echo '<script>
                            Swal.fire({
                                icon: "erroe",
                                title: "¡Numero telefonico invalido!",
                                showConfirmButton: true,
                                confirmButtonText: "ACEPTAR"
                            });
                        </script>';}
                        else{
                     $sql = "INSERT INTO simpatizantes(cveElectoral,curp,nombre,apaterno, amaterno,fecha_nac,sexo,domicilio,colonia,localidad,municipio,estado,numtelefono,facebook,instagram,otrared,fecha_sistema,userName,cvesec) VALUES ('$cveElectoral','$curp','$nombre','$apaterno','$amaterno','$fecha_nac','$sexo','$domicilio','$colonia','$localidad','$municipio','$estado','$numtelefono','$facebook','$instagram','$otro','$dt2','$usuario','$cveseccion')";

                if (mysqli_query($conn, $sql)) {
                    echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "¡Correcto!",
                    text: "Registro creado satisfactoriamente",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';
                    echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "¡ERROR!",
                    text: "Error de registro, verifique sus datos",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';
                }
            }
            $result = $conn->query("SELECT idcliente FROM login WHERE userName='$usuario'");
            $row = mysqli_fetch_row($result);
            $cliente = $row[0];

            $sql2 = "UPDATE simpatizantes SET idcliente='$cliente'";

            if (mysqli_query($conn, $sql2)) {
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "¡Correcto!",
                    text: "Cliente actualizado satisfactoriamente",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';
            } else {
                echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "¡ERROR!",
                    text: "Cliente no actualizado, verifique los datos",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            </script>';
            }
                        }
                    }
                }

            }
        mysqli_close($conn);
        ?>
    </main>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/vali.js"></script>

</body>

</html>