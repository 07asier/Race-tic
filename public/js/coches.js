$(document).ready(iniciar);

function iniciar(){

    $("#formulario").on("submit", validar);
}

function validar(event){

    event.preventDefault();

    var numserie = $("#numserie");
    var marca = ("#subject");
    var motor = $("#motor");
    var modelo = $("#modelo");

    if(numserie.val().length < 1 || motor.val().length < 1 || modelo.val().length < 1){

        console.log("rellenar campos");
        $("#errordiv").collapse();


    }else{

        var datosForm = $(this).serialize();

        var request = $.ajax({
            dataType : "text",
            url:"add",
            type:"post",
            data:datosForm
        });

        request.done(function(response){

            swal({
                title: 'Buen Trabajo!',
                text: 'Coche añadido',
                type: 'success',
                confirmButtonText: 'OK',
            }).then(function(){
                location.reload();
            });

        });

        //
        var form = $("#formulario");
        for(var i=0 ; i< form.length; i++)
        {

            form[i].reset();
        }

    }
}