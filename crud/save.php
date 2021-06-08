<?php

    require_once('../config/config.php');
    require_once('../classes/database.php');

    $db = new database();
    $connection = $db->getDatabaseConnection();

    if (isset($_POST['client']) && $_POST['client'] == 'new'){

        $active = 'Activo';
        $params = array(
            array(&$_POST['numero_casa'], SQLSRV_PARAM_IN),
            array(&$_POST['calle_avenida'], SQLSRV_PARAM_IN),
            array(&$_POST['ciudad'], SQLSRV_PARAM_IN),
            array(&$_POST['codigo_postal'], SQLSRV_PARAM_IN),
            array(&$_POST['colonia'], SQLSRV_PARAM_IN),
            array(&$_POST['departamento'], SQLSRV_PARAM_IN),
            array(&$_POST['municipio'], SQLSRV_PARAM_IN),
            array(&$active, SQLSRV_PARAM_IN),
            array(&$_POST['codigo'], SQLSRV_PARAM_IN),
            array(&$_POST['nombre'], SQLSRV_PARAM_IN),
            array(&$_POST['fecha_nacimiento'], SQLSRV_PARAM_IN),
            array(&$_POST['email'], SQLSRV_PARAM_IN),
            array(&$_POST['telefono'], SQLSRV_PARAM_IN),
            array(&$active, SQLSRV_PARAM_IN)
        );

        $q = "EXEC SP_Ingresar_Cliente 
            @NumeroCasa = ?, 
            @Calle_Avenida = ?, @Ciudad = ?, 
            @CodigoPostal = ?, @Colonia = ?, 
            @Departamento = ?, @Municipio = ?, 
            @EstadoDireccion = ?, 
            @CodigoCliente = ?, @NombreCliente = ?, 
            @FechaNacimiento = ?, @Email = ?, 
            @Telefono = ?, @EstadoCliente = ?";

        $r = sqlsrv_prepare($connection, $q, $params);

        $res = array();

        if ( sqlsrv_execute( $r ) === true ){
            $row = sqlsrv_fetch_array( $r, SQLSRV_FETCH_ASSOC);
            if (($row[''] > 10) && ($row[''] < 20)){
                $res = array( 'exito' => false, 'errores' => $row[''] );
            }else{
                $res = array( 'exito' => true, 'errores' => $row[''] );
            }

        }else{
            $res = array(
                'exito' => false,
                'errores' => sqlsrv_errors()
            );
        }
        echo json_encode($res);

    }

    if (isset($_POST['personal']) && $_POST['personal'] == 'new'){

        $active = 'Activo';
        $params = array(
            array(&$_POST['numero_casa'], SQLSRV_PARAM_IN),
            array(&$_POST['calle_avenida'], SQLSRV_PARAM_IN),
            array(&$_POST['ciudad'], SQLSRV_PARAM_IN),
            array(&$_POST['codigo_postal'], SQLSRV_PARAM_IN),
            array(&$_POST['colonia'], SQLSRV_PARAM_IN),
            array(&$_POST['departamento'], SQLSRV_PARAM_IN),
            array(&$_POST['municipio'], SQLSRV_PARAM_IN),
            array(&$active, SQLSRV_PARAM_IN),
            array(&$_POST['codigo'], SQLSRV_PARAM_IN),
            array(&$_POST['nombre'], SQLSRV_PARAM_IN),
            array(&$_POST['apellido'], SQLSRV_PARAM_IN),
            array(&$_POST['fecha_nacimiento'], SQLSRV_PARAM_IN),
            array(&$_POST['fecha_contratacion'], SQLSRV_PARAM_IN),
            array(&$_POST['email'], SQLSRV_PARAM_IN),
            array(&$_POST['telefono'], SQLSRV_PARAM_IN),
            array(&$active, SQLSRV_PARAM_IN),
            array(&$_POST['puesto'], SQLSRV_PARAM_IN)
        );

        $q = "EXEC SP_Ingresar_Personal 
                @NumeroCasa = ?, 
                @Calle_Avenida = ?, @Ciudad = ?, 
                @CodigoPostal = ?, @Colonia = ?, 
                @Departamento = ?, @Municipio = ?, 
                @EstadoDireccion = ?, 
                @CodigoPersonal = ?, @Nombre = ?, 
                @Apellido = ?,
                @FechaNacimiento = ?, @FechaContratacion = ?, 
                @Email = ?, @Telefono = ?, 
                @Estado = ?, @Puesto = ?";

        $r = sqlsrv_prepare($connection, $q, $params);

        $res = array();

        if ( sqlsrv_execute( $r ) === true ){
            $row = sqlsrv_fetch_array( $r, SQLSRV_FETCH_ASSOC);
            if (($row[''] > 10) && ($row[''] < 20)){
                $res = array( 'exito' => false, 'errores' => $row[''] );
            }else{
                $res = array( 'exito' => true, 'errores' => $row[''] );
            }

        }else{
            $res = array(
                'exito' => false,
                'errores' => sqlsrv_errors()
            );
        }
        echo json_encode($res);

    }