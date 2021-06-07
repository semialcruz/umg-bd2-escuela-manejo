$(document).ready(function () {
    $('#catBtn').click(function (){
        $('.home').hide();
    });

    $('.fecha').datepicker({
        format: 'yyyy-mm-dd',
        language: 'es'
    });


    $('#new-client').submit(function (e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url : 'crud/save.php',
            data: $(this).serialize(),
            success: function (response){
                var jsonData = JSON.parse(response);

                if (jsonData.exito){
                    $('#alerta').addClass('alert-success');
                    $('#alerta').html(
                        '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>'+
                        'Los datos del cliente se ingresaron con éxito'+
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                    );
                    $('#new-client').trigger("reset");
                }else{
                    $('#alerta').addClass('alert-success');
                    $('#alerta').html(
                        '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>'+
                        'Los datos del cliente se ingresaron con éxito'+
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                    );
                }
            }
        });
    });

});