
$(document).ready(iniciar);


function iniciar() {
    var form = $("#formulario");
    form.on("submit", validar);

}


/*function popup(){
    var nombre = document.getElementById("name");
    if (nombre.value.length > 0 ) {
        $("#modala").collapse();
    }
}*/

function validar(event){

    event.preventDefault();

    var formulario = document.getElementById("formulario");
    var camposcorrectos = true;
    for (var i=0;i<formulario.elements.length;i++){
        var elemento = formulario.elements[i];
        if(campoAComprobar(elemento)) {
            if (esIncorrecto(elemento)) {
                event.preventDefault();
                //boolean para comprobar si todos se pueden enviar, y fuera del for  hacer el collapse
                //console.log("esincorrecto:" + elemento.name);
                camposcorrectos = false;

            }
        }
    }
    if(camposcorrectos){
        //$("#modala").collapse();

        var datosForm = $(this).serialize();

        var request = $.ajax({
            dataType : "text",
            url:"contact",
            type:"post",
            data:datosForm
        });

        request.done(function(response){

            swal({
                title: 'Buen Trabajo!',
                text: 'Mensaje de contacto enviado',
                type: 'success',
                confirmButtonText: 'OK',
            }).then(function(){
                location.reload();
            });


        });

    }else{
        $("#errordiv").collapse();

    }
}

function campoAComprobar(elemento) {
    if (elemento.name !== "_token" &&
        elemento.name !== "button"){
        return true;
    }
    return false;
}


function esIncorrecto(elemento){
    if(elemento.name === "name" || elemento.name === "message" ){
        return estaVacio(elemento);
    }
    else if (elemento.name === "email"){
        return emailIncorrecto(elemento);
    }
}


function estaVacio(campo){
    if (campo.value.length === 0) {
        return true;
    }
    else {
        return false;
    }
}

function emailIncorrecto(campo){
    if ( campo.value.indexOf("@") < 0 ||
        (campo.value.indexOf("@") > campo.value.lastIndexOf(".") )
    ){
        return true;
    }
    else {
        return false;
    }
}