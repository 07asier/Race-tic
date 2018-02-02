$(document).ready(iniciar);

function iniciar(){

    $("#formulario").on("submit", validar);
}

function validar(event){

    event.preventDefault();

    var pass =$("#pass");
    var passconf = $("#passconf");

    if(pass.val().length < 6 || pass.val().length < 6){

        console.log("contraseña menor a 6");
        $("#errordiv").collapse();


    }else if(pass.value !== passconf.value){

        console.log("las contraseñas no coinciden");
        $("#errordiv").collapse();



    }else{

        var datosForm = $(this).serialize();

        var request = $.ajax({
            dataType : "text",
            url:"dato",
            type:"post",
            data:datosForm
        });

        request.done(function(response){

            swal({
                title: 'Buen Trabajo!',
                text: 'Contraseña cambiada',
                type: 'success',
                confirmButtonText: 'OK',
            });

        });

        console.log("contraseña cambiada");

        var form = $("#formulario");
        for(var i=0 ; i< form.length; i++)
        {

            form[i].reset();
        }

    }
}


function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = $(".tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}


document.getElementById("defaultOpen").click();