$(document).ready(function () {
    $('#catBtn').click(function (){
        $('.home').hide();
        //$('.reports').hide();
    });

    $('#reBtn').click(function (){
        $('.home').hide();
        //$('.catalogs').hide();

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
                console.log(jsonData);
                if (jsonData.exito){
                    $('#alerta').addClass('alert-success');
                    $('#alerta').html(
                        '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>'+
                        'Los datos del cliente se ingresaron con éxito'+
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                    );
                    $('#new-client').trigger("reset");
                }else{
                    $('#alerta').addClass('alert-warning');
                    $('#alerta').html(
                        '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>'+
                        'Algo salió mal y los datos no pudieron guardarse. Por favor intente de nuevo'+
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                    );
                }
            }
        });
    });

    $('#new-personal').submit(function (e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url : 'crud/save.php',
            data: $(this).serialize(),
            success: function (response){
                var jsonData = JSON.parse(response);
                console.log(jsonData);
                if (jsonData.exito){
                    $('#alerta').addClass('alert-success');
                    $('#alerta').html(
                        '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>'+
                        'Los datos del nuevo personal se ingresaron con éxito'+
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                    );
                    $('#new-client').trigger("reset");
                }else{
                    $('#alerta').addClass('alert-warning');
                    $('#alerta').html(
                        '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>'+
                        'Algo salió mal y los datos no pudieron guardarse. Por favor intente de nuevo'+
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                    );
                }
            }
        });
    });

    $('#eventGrid').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "../../crud/select.php?table=1",
            "type": "POST"
        },
        "columns": [
            { "data": "no" },
            { "data": "cliente" },
            { "data": "telefono" },
            { "data": "email" },
            { "data": "fecha_inicio" },
            { "data": "fecha_fin" },
            { "data": "instructor" },
            { "data": "sesiones" }
        ]
    } );

    $('#contractGrid').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "../../crud/select.php?contrato=1",
            "type": "POST"
        },
        "columns": [
            { "data": "numero_contrato" },
            { "data": "numero_sesiones" },
            { "data": "instructor" },
            { "data": "vehiculo" },
            { "data": "fecha_inicio" },
            { "data": "fecha_fin" }
        ]
    } );

});