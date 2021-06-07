<?php

    require_once('../config/config.php');
    require_once('../classes/database.php');

    $db = new database();
    $connection = $db->getDatabaseConnection();

    if (isset($_POST['client']) && $_POST['client'] == 'new'){

        $active = 'Activo';
        $idCliente = 41;
        $idDireccion = 41;
        $params = array(
            array(&$idDireccion, SQLSRV_PARAM_IN),
            array(&$_POST['numero_casa'], SQLSRV_PARAM_IN),
            array(&$_POST['calle_avenida'], SQLSRV_PARAM_IN),
            array(&$_POST['ciudad'], SQLSRV_PARAM_IN),
            array(&$_POST['codigo_postal'], SQLSRV_PARAM_IN),
            array(&$_POST['colonia'], SQLSRV_PARAM_IN),
            array(&$_POST['departamento'], SQLSRV_PARAM_IN),
            array(&$_POST['municipio'], SQLSRV_PARAM_IN),
            array(&$active, SQLSRV_PARAM_IN),
            array(&$idCliente, SQLSRV_PARAM_IN),
            array(&$_POST['codigo'], SQLSRV_PARAM_IN),
            array(&$_POST['nombre'], SQLSRV_PARAM_IN),
            array(&$_POST['fecha_nacimiento'], SQLSRV_PARAM_IN),
            array(&$_POST['email'], SQLSRV_PARAM_IN),
            array(&$_POST['telefono'], SQLSRV_PARAM_IN),
            array(&$active, SQLSRV_PARAM_IN)
        );

        $q = "EXEC SP_Ingresar_Cliente 
            @CodigoDireccion = ?, @NumeroCasa = ?, 
            @Calle_Avenida = ?, @Ciudad = ?, 
            @CodigoPostal = ?, @Colonia = ?, 
            @Departamento = ?, @Municipio = ?, 
            @EstadoDireccion = ?, @IdCliente = ?, 
            @CodigoCliente = ?, @NombreCliente = ?, 
            @FechaNacimiento = ?, @Email = ?, 
            @Telefono = ?, @EstadoCliente = ?";
        $r = sqlsrv_prepare($connection, $q, $params);

        if ( sqlsrv_execute( $r ) === true ){
            $res = array(
                'exito' => true
            );
            echo json_encode($res);
        }else{
            $res = array(
                'exito' => false,
                'errores' => sqlsrv_errors()
            );
            echo json_encode($res);
        }

    }