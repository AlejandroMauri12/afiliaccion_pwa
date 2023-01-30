<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registro Simpatizantes</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- css nativo -->
    <link rel="stylesheet" href="../css/estilosRegistor.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="icon" href="../images/favicon.ico">
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-light">
    <header>
        <nav class="navbar navbar-dark bg-light">
            <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand " href="#">
                    <div class="d-flex flex-column mb-3">
                        <img class="rounded d-flex justify-content-center " src="../images/ico384.png" alt="Logo" width="100" height="100">
                    </div>
                </a>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="size bg-gris rounded-4">

            <div class="wrapper p-3 margin-top rounded">
                <p class="h2 text-dark text-center">
                    <Font color="red">Afliacción</Font>
                </p>
                <p class="h4 text-dark text-center" id="resultado">Registro Simpatizantes</p>
                <div class="card ">

                    <div class="bg-ligth ">
                        <div class="card-body p-2 bg-white  rounded">

                            <form class="row g-3 was-validated" method="post" id="formulario">
                                <!-- clave electoral -->
                                <div class="col-md-6">
                                    <label for="claveElectoral" class="form-label">Clave Electoral</label>
                                    <input type="text" class="form-control" id="claveElectoral" placeholder="Clave Electoral" required maxlength="18" onkeyup="this.value = this.value.toUpperCase();" onkeydown="longitud('claveElectoral','invalid-clave');" name="claveElectoral"></input>
                                    <div class="" id="invalid-clave"> Ingrese Clave Electoral.
                                    </div>

                                </div>
                                <!-- Curp -->
                                <div class="col-md-6">
                                    <label for="curp" class="form-label">Curp</label>
                                    <input type="text" class="form-control" id="curp" placeholder="Curp" required maxlength="18" onkeyup="this.value = this.value.toUpperCase()" onkeydown="longitud('curp','invalid-curp');" name="curp">
                                    <div class="" id="invalid-curp">
                                        Ingrese Curp
                                    </div>
                                </div>
                                <!-- nombre -->
                                <div class="col-12">
                                    <label for="Nombre" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Nombre(s)" required>
                                </div>
                                <!-- apellido paterno -->
                                <div class="col-md-6">
                                    <label for="apellidoPat" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="apellidoPat" required name="apellidoPat">
                                </div>
                                <!-- apellido materno -->
                                <div class="col-md-6">
                                    <label for="apellidoMat" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control" id="apellidoMat" required name="apellidoMat">
                                </div>
                                <!-- Fecha de nacimiento -->
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Fecha de Nacimiento</label>
                                    <input name=Fecha class="form-control mr-sm-2 my-2" placeholder="Fecha Nacimiento" type="date" required name="fecha" />
                                </div>
                                <!-- Genero -->
                                <div class="col-md-4 border border-secondary rounded">
                                    <p class="text-center h6">Genero</p>
                                    <div class="row row-cols-2  g-2 g-lg-3 d-flex justify-content-center">
                                        <div class="col">
                                            <div class="p-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="genero" id="hombre" value="masculino" />
                                                    <label class="form-check-label" for="masculino">
                                                        Hombre
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <div class="p-3">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="radio" name="genero" id="mujer" value="femenino" />
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Mujer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- seccion -->
                                <div class="col-md-2">
                                    <label for="seccion" class="form-label">Seccion</label>
                                    <select id="seccion" class="form-select" onchange="ShowSelectedSeccion();">
                                        <option value="Elige una opcion">Elige una seccion</option>
                                        <option value="1113">1113 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1114">1114 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1116">1116 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1117">1117 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1118">1118 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1119">1119 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1120">1120 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1121">1121 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1122">1122 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1123">1123 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1124">1124 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1125">1125 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1126">1126 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1127">1127 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1129">1129 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1129">1129 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1130">1130 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1131">1131 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1132">1132 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1133">1133 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1134">1134 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1135">1135 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1136">1136 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1113">1113 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1137">1137 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1113">1113 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1138">1138 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1139">1139 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1140">1140 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1141">1141 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1142">1142 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1143">1143 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1144">1144 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1145">1145 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1146">1146 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1147">1147 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1148">1148 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1149">1149 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1150">1150 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1151">1151 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1152">1152 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1153">1153 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1154">1154 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1155">1155 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1156">1156 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1157">1157 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1158">1158 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1159">1159 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1160">1160 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1161">1161 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1162">1162 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1163">1163 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2094">2094 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2095">2095 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2096">2096 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2097">2097 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2098">2098 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                    </select>
                                </div>
                                <!-- Estado -->
                                <div class="col-md-4">
                                    <label for="estado" class="form-label">Estado</label>
                                    <select id="estado" class="form-select" onchange="ShowSelectedEstado();">
                                        <option value="7Chiapas" selected>7 CHIAPAS</option>
                                    </select>
                                </div>
                                <!-- Municipio -->
                                <div class="col-md-6">
                                    <label for="municipio" class="form-label">Municipio</label>
                                    <select id="municipio" class="form-select" onchange="ShowSelectedMunicipio();">
                                        <option value="Elige una opcion">Elige una opcion...</option>
                                        <option value="7Chiapas" selected>77 SAN CRISTÓBAL DE LAS CASAS</option>
                                    </select>
                                </div>
                                <!-- Localidad -->
                                <div class="col-md-6">
                                    <label for="localidad" class="form-label">Localidad</label>
                                    <select id="localidad" class="form-select">
                                        <option value="Elige una opcion">Elige una opcion...</option>
                                        <option value="1">1 URBANO(A)-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2">2 RURAL-AGUA BENDITA</option>
                                        <option value="4">4 RURAL-AGUA DE LEON</option>
                                        <option value="5">5 RURAL AGUA DE PAJARITO</option>
                                        <option value="6">6 RURAL-AGUA DE TIGRE</option>
                                        <option value="8">8 RURAL-BUENA VISTA</option>
                                        <option value="10">10 RURAL-CANDELARIA</option>
                                        <option value="11">11 RURAL-CARMEN ARCOTETE</option>
                                        <option value="12">12 RURAL-CARRIZALITO</option>
                                        <option value="13">13 RURAL CHUPACTIC </option>
                                        <option value="14">14 RURAL CORAZON DE MARIA</option>
                                        <option value="15">15 RURAL CORRALITO</option>
                                        <option value="16">16 RURAL-CRUZ CANTULAN</option>
                                        <option value="17">17 RURAL-DOS LAGUNAS</option>
                                        <option value="18">18 RURAL-EL PEDERNAL</option>
                                        <option value="19">19 RURAL-EL AGUAJE</option>
                                        <option value="21">21 RURAL-EL BOSQUE</option>
                                        <option value="23">23 RURAL-EL CARRIZAL</option>
                                        <option value="25">25 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="26">1133 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="27">1134 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="28">1135 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="">1136 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1113">1113 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1137">1137 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1113">1113 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1138">1138 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1139">1139 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1140">1140 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1141">1141 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1142">1142 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1143">1143 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1144">1144 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1145">1145 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1146">1146 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1147">1147 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1148">1148 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1149">1149 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1150">1150 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1151">1151 URBANO-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1152">1152 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1153">1153 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1154">1154 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1155">1155 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1156">1156 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1157">1157 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1158">1158 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1159">1159 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1160">1160 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1161">1161 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1162">1162 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="1163">1163 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2094">2094 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2095">2095 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2096">2096 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2097">2097 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                        <option value="2098">2098 RURAL-SAN CRISTOBAL DE LAS CASAS</option>
                                    </select>
                                </div>
                                <!-- colonia -->
                                <div class="col-md-2">
                                    <label for="colonia" class="form-label">Colonia</label>
                                    <input type="text" class="form-control" id="colonia" required name="colonia">
                                </div>
                                <!-- Domicilio -->
                                <div class="col-md-2">
                                    <label for="domicilio" class="form-label">Domicilio</label>
                                    <input type="text" class="form-control" id="domicilio" required name="domicilio">
                                </div>
                                <!-- Numero de telefono -->
                                <div class="col-md-2">
                                    <label for="numero" class="form-label">Núm.Telefónico</label>
                                    <input type="number" class="form-control" id="numero" onkeyup="errorTelefono()" required name="numeroTelefono">
                                    <div id="erroNumero"></div>
                                </div>
                                <!-- Facebook-->
                                <div class="col-md-2">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook">
                                </div>

                                <!-- instagram-->
                                <div class="col-md-2">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram">
                                </div>
                                <!-- Otra red Social-->
                                <div class="col-md-2">
                                    <label for="otro" class="form-label">Otra red Social</label>
                                    <input type="text" class="form-control" id="otro" name="otraRed">
                                </div>

                                <!-- Boton summit -->

                                <button type="button" class="btn btn-primary" id="enviar" onclick="camposPrincipales()">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    // evento que se ejecuta cuando da click en boton
    // $("#enviar").click(function () {
    //     $.ajax({
    //         url: "./registro.php",
    //         type: "post",
    //         data: $("#formulario").serialize(),
    //         success: function (resultado) {
    //             $("#resultado").html(resultado);
    //         }
    //     });
    // });


    //Datos de formulario
    let curp = document.getElementById("curp").value;
    let nombre = document.getElementById("Nombre").value;
    let apellidoPat = document.getElementById("apellidoPat").value;
    let apellidoMat = document.getElementById("apellidoMat").value;
    let hombre = document.getElementById("hombre").value;
    let seccion = "";
    let selectSeccion = "";
    let estado = ""
    let selectEstado = "";
    let municipio = ""
    let selectmunicipio = "";
    let localidad = ""
    let selectLocalidad = "";

    let colonia = document.getElementById("colonia").value;
    let domicilio = document.getElementById("domicilio").value;
    let numero = document.getElementById("numero").value;
    let facebook = document.getElementById("facebook").value;
    let instagram = document.getElementById("instagram").value;
    let otro = document.getElementById("otro").value;




    // longitud de cadenas
    function longitud(id, mensaje) {
        console.log(id);
        let valor = document.getElementById(id).value;
        document.getElementById(mensaje).innerHTML = 'Valores insertados: ' + valor.length + "/18";
    }

    function errorTelefono() {
        let numero = document.getElementById("numero").value;
        document.getElementById("erroNumero").innerHTML = 'Valores insertados: ' + numero.length + "/10";

        if (numero.length > 10) {
            Swal.fire({
                icon: "error",
                title: "¡ERROR!",
                text: "Exede la longitud del campo: " + numero.length + "/10",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });
        }
    }

    function camposPrincipales() {
        let claveElectoral = document.getElementById("claveElectoral").value;
        let curp = document.getElementById("curp").value;

        console.log(curp)
        console.log(claveElectoral)

        if (claveElectoral == "" || curp == "") {
            Swal.fire({
                icon: "error",
                title: "¡ERROR!",
                text: "Algún Campo no ha sido completado",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });
        } else if (claveElectoral.length < 18) {
            Swal.fire({
                icon: "error",
                title: "¡ERROR!",
                text: "Faltan datos de la Clave electoral: " + claveElectoral.length + "/18",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });
        } else if (curp.length < 18) {
            Swal.fire({
                icon: "error",
                title: "¡ERROR!",
                text: "Faltan datos de la Curp" + curp.length + "/18",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });
        } else if (claveElectoral.length === 18 && curp.length == 18) {
            Swal.fire({
                icon: "success",
                title: "¡Correcto!",
                text: "Cliente actualizado satisfactoriamente",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });

            //evento que se ejecuta despues de validar los campos principales
            $.ajax({
                url: "captura.php",
                type: "post",
                data: $("#formulario").serialize(),
                success: function(resultado) {
                    $("#resultado").html(resultado);
                }
            });
        }


    }

    function send() {
        camposPrincipales();
    }
    //Valor de un selectd Seccion
    function ShowSelectedSeccion() {
        seccion = document.getElementById("seccion");
        selectSeccion = seccion.options[seccion.selectedIndex].text
    }

    //Valor de un selectd Estado
    function ShowSelectedEstado() {
        estado = document.getElementById("estado");
        selectEstado = estado.options[estado.selectedIndex].text
    }

    //Valor de un selectd municipio
    function ShowSelectedMunicipio() {
        municipio = document.getElementById("municipio");
        selectMunicipio = municipio.options[municipio.selectedIndex].text
    }

    //Valor de un selectd localidad
    function ShowSelectedLocalidad() {
        localidad = document.getElementById("localidad");
        selectLocalidad = localidad.options[localidad.selectedIndex].text
    }

    // espacio vacios curp y clave elecotoral
    $("#claveElectoral").keyup(function() {
        let string = $("#claveElectoral").val();
        $("#claveElectoral").val(string.replace(/ /g, ""))
    });

    $("#curp").keyup(function() {
        let string = $("#curp").val();
        $("#curp").val(string.replace(/ /g, ""))
    });

    // evento que se ejecuta cuando da click en boton
    // $("#enviar").click(function () {

    //     console.log("click")
    //     $.ajax({
    //         url: "captura.php",
    //         type: "post",
    //         data: $("#formulario").serialize(),
    //         success: function (resultado) {
    //             $("#resultado").html(resultado);
    //         }
    //     });
    // });
</script>

</html>