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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
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
                        <img class="rounded d-flex justify-content-center " src="../images/icoafiliaccion.svg"
                            alt="Logo" width="100" height="100">
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
                                    <input type="text" class="form-control" id="claveElectoral"
                                        placeholder="Clave Electoral" required maxlength="18"
                                        onkeyup="this.value = this.value.toUpperCase();"
                                        onkeydown="longitud('claveElectoral','invalid-clave');"
                                        name="claveElectoral"></input>
                                    <div class="" id="invalid-clave"> Ingrese Clave Electoral.
                                    </div>

                                </div>
                                <!-- Curp -->
                                <div class="col-md-6">
                                    <label for="curp" class="form-label">Curp</label>
                                    <input type="text" class="form-control" id="curp" placeholder="Curp" required
                                        maxlength="18" onkeyup="this.value = this.value.toUpperCase()"
                                        onkeydown="longitud('curp','invalid-curp');" name="curp">
                                    <div class="" id="invalid-curp">
                                        Ingrese Curp
                                    </div>
                                </div>
                                <!-- nombre -->
                                <div class="col-12">
                                    <label for="Nombre" class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" id="Nombre" name="nombre"
                                        placeholder="Nombre(s)" required>
                                </div>
                                <!-- apellido paterno -->
                                <div class="col-md-6">
                                    <label for="apellidoPat" class="form-label">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="apellidoPat" required
                                        name="apellidoPat">
                                </div>
                                <!-- apellido materno -->
                                <div class="col-md-6">
                                    <label for="apellidoMat" class="form-label">Apellido Materno</label>
                                    <input type="text" class="form-control" id="apellidoMat" required
                                        name="apellidoMat">
                                </div>
                                <!-- Fecha de nacimiento -->
                                <div class="col-md-2">
                                    <label for="inputZip" class="form-label">Fecha de Nacimiento</label>
                                    <input name=Fecha class="form-control mr-sm-2 my-2" placeholder="Fecha Nacimiento"
                                        type="date" required name="fecha" id="myDate" value="2023-01-01" />
                                </div>
                                <!-- Genero -->
                                <div class="col-md-4 border border-secondary rounded">
                                    <p class="text-center h6">Genero</p>
                                    <div class="row row-cols-2  g-2 g-lg-3 d-flex justify-content-center">
                                        <div class="col">
                                            <div class="p-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="genero"
                                                        id="hombre" value="masculino" />
                                                    <label class="form-check-label" for="masculino">
                                                        Hombre
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <div class="p-3">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="radio" name="genero"
                                                        id="mujer" value="femenino" />
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
                                    <select id="seccion" class="form-select" required onchange="ShowSelectedSeccion();">
                                        <option value="">Elige una opcion</option>
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
                                    <select id="estado" class="form-select" required onchange="ShowSelectedEstado()">
                                        <option value="" selected>Elige una opcion</option>
                                        <option value="1Chiapas">7 CHIAPAS</option>
                                    </select>
                                </div>
                                <!-- Municipio -->

                                <div class="col-md-6">
                                    <label for="municipio" class="form-label">Municipio</label>
                                    <select id="municipio" class="form-select" required
                                        onchange="ShowSelectedMunicipio();">
                                        <option selected value="">Elige una opcion</option>
                                        <option value="77Chiapas">77 SAN CRISTÓBAL DE LAS CASAS</option>
                                    </select>
                                </div>
                                <!-- Localidad -->
                                <div class="col-md-6">
                                    <label for="localidad" class="form-label">Localidad</label>
                                    <select id="localidad" class="form-select" required
                                        onchange="ShowSelectedLocalidad();">
                                        <option value="">Elige una opcion</option>
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
                                    <input type="number" class="form-control" id="numero" onkeyup="errorTelefono()"
                                        required name="numeroTelefono">
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

                                <button type="button" class="btn btn-primary" id="enviar"
                                    onclick="camposPrincipales()">Registrar</button>
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
    let hombre = document.getElementById("hombre").value;

    var dateControl = document.querySelector('input[type="date"]');


    const aux = [false, false, false, false];



    let facebook = document.getElementById("facebook").value;
    let instagram = document.getElementById("instagram").value;
    let otro = document.getElementById("otro").value;

    var bandera = new Boolean(false);


    // longitud de cadenas
    function longitud(id, mensaje) {
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

    //campos principales a validar
    function camposPrincipales() {

        let claveElectoral = document.getElementById("claveElectoral").value;
        let curp = document.getElementById("curp").value;

        // clave electoral y curp esten vacios
        if (claveElectoral == "" || curp == "") {
            Swal.fire({
                icon: "error",
                title: "¡ERROR!",
                text: "Clave elecotoral O Curp, no ha sido completado",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });
            // clave electoral menor a 18 dig
        } else if (claveElectoral.length < 18) {
            Swal.fire({
                icon: "error",
                title: "¡ERROR!",
                text: "Faltan datos de la Clave electoral: " + claveElectoral.length + "/18",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });
            // Curp menor a 18 dig
        } else if (curp.length < 18) {
            Swal.fire({
                icon: "error",
                title: "¡ERROR!",
                text: "Faltan datos de la Curp" + curp.length + "/18",
                showConfirmButton: true,
                confirmButtonText: "ACEPTAR"
            });
            // Curp y Clave cumplen los 18 dig.
        } else if (claveElectoral.length === 18 && curp.length == 18) {

            let nombre = document.getElementById("Nombre").value;
            let apellidoPat = document.getElementById("apellidoPat").value;
            let apellidoMat = document.getElementById("apellidoMat").value;

            // Nombre y apellidos esten vacios
            if (nombre == "" || apellidoMat == "" || apellidoPat == "") {
                Swal.fire({
                    icon: "error",
                    title: "¡ERROR!",
                    text: "Nombre O apellidos, no ha sido completados",
                    showConfirmButton: true,
                    confirmButtonText: "ACEPTAR"
                });
            } else {
                //consigue la fecha colocada 
                var x = document.getElementById("myDate").value;
                //valor de radioInputs
                let genero = $("input:radio[name=genero]:checked").val();
                // No hay elemento seleccionado H o M
                if (genero == null) {
                    Swal.fire({
                        icon: "error",
                        title: "¡ERROR!",
                        text: "No se ha seleccionado un genero",
                        showConfirmButton: true,
                        confirmButtonText: "ACEPTAR"
                    });
                } else {

                    let colonia = document.getElementById("colonia").value;
                    let domicilio = document.getElementById("domicilio").value;
                    //campos  colonia y domicilio no estan vacios
                    if (colonia != "" && domicilio != "") {
                        var banderAux = true;
                        // bucle para encontrar una bandera en false y no poder seguir el proceso
                        for (let i = 0; i < aux.length; i++) {
                            if (aux[i] == false) {
                                banderAux = false;
                            }
                        }
                        //no se encontro una bandera en F prosigue con el proceso
                        if (banderAux == true) {
                            let numero = document.getElementById("numero").value;
                            // valida de numero sea de long 10 y que no este vacio;
                            if (numero.length == 10 && numero != "") {

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
                                    success: function (resultado) {
                                        $("#resultado").html(resultado);
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "¡ERROR!",
                                    text: "No se ha completado numero de Telefono",
                                    showConfirmButton: true,
                                    confirmButtonText: "ACEPTAR"
                                });
                            }
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "¡ERROR!",
                                text: "No se escogio Seccion o municipio o Estado o Localidad",
                                showConfirmButton: true,
                                confirmButtonText: "ACEPTAR"
                            });
                            banderAux = true;
                        }
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "¡ERROR!",
                            text: "Domicilio O Colonia no se ha complentado",
                            showConfirmButton: true,
                            confirmButtonText: "ACEPTAR"
                        });
                    }
                }
            }
        }
    }


    // variable de seleccion 
    let seccion = "";
    var selectSeccion = "";
    let estado = ""
    var selectEstado = "";
    let municipio = ""
    var selectmunicipio = "";
    let localidad = ""
    var selectLocalidad = "";

    //devuelve T o F por cada funcion que la ejecute
    function valoresAsignados(valor) {
        if (valor == "Elige una opcion") {
            bandera = false;
        } else {
            bandera = true;
        }
        return bandera;
    }

    //Valor de un selectd Seccion
    function ShowSelectedSeccion() {
        let valor;
        seccion = document.getElementById("seccion");
        selectSeccion = seccion.options[seccion.selectedIndex].text

        valor = valoresAsignados(selectSeccion);
        aux[0] = valor;
    }

    //Valor de un selectd Estado
    function ShowSelectedEstado() {
        let valor;
        estado = document.getElementById("estado");
        selectEstado = estado.options[estado.selectedIndex].text
        console.log(selectEstado);
        valor = valoresAsignados(selectEstado);
        aux[1] = valor;

    }

    //Valor de un selectd municipio
    function ShowSelectedMunicipio() {
        let valor;
        municipio = document.getElementById("municipio");
        selectMunicipio = municipio.options[municipio.selectedIndex].text
        valor = valoresAsignados(selectMunicipio);
        aux[2] = valor;
    }

    //Valor de un selectd localidad
    function ShowSelectedLocalidad() {
        let valor;
        localidad = document.getElementById("localidad");
        selectLocalidad = localidad.options[localidad.selectedIndex].text
        valor = valoresAsignados(selectLocalidad);
        aux[3] = valor;
    }

    // espacio vacios curp y clave elecotoral
    $("#claveElectoral").keyup(function () {
        let string = $("#claveElectoral").val();
        $("#claveElectoral").val(string.replace(/ /g, ""))
    });

    $("#curp").keyup(function () {
        let string = $("#curp").val();
        $("#curp").val(string.replace(/ /g, ""))
    });

    //Se ejecuta cuando se oprimer el Boton
    function send() {
        camposPrincipales();
    }


</script>

</html>