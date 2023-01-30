function validacion() {
    //valida Sexo
    var todoCorrecto = true;
    if (document.getElementById('Sexo') != "H"|| "M" ) {
        alert("En el campo Sexo sólo se permite H o M");
        //document.formulario.sexo.focus();
        todoCorrecto = false;
    }
}