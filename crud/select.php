<?php

require_once('../config/config.php');
require_once('../classes/database.php');

$db = new database();
$connection = $db->getDatabaseConnection();

    if ($_POST['cal'] = 1 && isset($_POST['view'])){
        header('Content-Type: application/json');

        $res = array();

        $q = "
            SELECT ct.numero_contrato AS id, 
                ci.nombre AS title,
                FORMAT(ca.fecha_inicio,'yyyy-MM-dd') AS start,
                FORMAT(ca.fecha_fin,'yyyy-MM-dd') AS [fin],
                ct.numero_sesiones AS sesiones
            FROM dbo.clases ca 
                JOIN dbo.clientes ci ON ca.cliente = ci.id 
                JOIN dbo.contratos ct ON ca.contrato = ct.numero_contrato
                JOIN dbo.personal pe ON ct.instructor = pe.id
        ";
        $r = sqlsrv_query($connection, $q);

        while ($row = sqlsrv_fetch_array( $r, SQLSRV_FETCH_ASSOC)){
            $res[] = $row;
        }
        //echo var_dump($res);
        sqlsrv_free_stmt($r);
        echo json_encode($res);
        //echo json_last_error_msg();
        exit;
    }

    if (isset($_GET['table'])){
        header('Content-Type: application/json');

        $res = array();

        $q = "
            SELECT ci.id AS [no], 
                ci.nombre AS cliente, 
                ci.telefono AS telefono,
                ci.email AS email,
                FORMAT(ca.fecha_inicio,'dd/MM/yyyy') AS fecha_inicio, 
                FORMAT(ca.fecha_fin,'dd/MM/yyyy') AS fecha_fin,
                CONCAT(pe.nombre, ' ', pe.apellido) AS instructor,
                ct.numero_sesiones AS sesiones
            FROM dbo.clases ca 
                JOIN dbo.clientes ci ON ca.cliente = ci.id 
                JOIN dbo.contratos ct ON ca.contrato = ct.numero_contrato
                JOIN dbo.personal pe ON ct.instructor = pe.id
            WHERE ct.estado = 'Activo'
        ";

        $params = array();
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $r = sqlsrv_query($connection, $q ,$params, $options);

        while ($row = sqlsrv_fetch_array( $r, SQLSRV_FETCH_ASSOC)){
            $res[] = $row;
        }

        $resultado = array(
            "draw" => 1,
            "recordsTotal" => sqlsrv_num_rows($r),
            "recordsFiltered" => sqlsrv_num_rows($r),
            "data" => $res
        );
        //var_dump($resultado);
        echo json_encode($resultado);
        //echo json_last_error();
        exit;
    }

    if (isset($_GET['contrato'])){
        header('Content-Type: application/json');

        $res = array();

        $q = "
            SELECT numero_contrato, 
                numero_sesiones, 
                CONCAT(nombre,' ',apellido) AS instructor, 
                CONCAT(marca,' ',modelo,' ',anio) AS vehiculo, 
                FORMAT(fecha_inicio, 'dd/MM/yyyy') AS fecha_inicio,
	            FORMAT(fecha_fin, 'dd/MM/yyyy') AS fecha_fin
            FROM contratos a 
                LEFT JOIN personal b ON a.instructor = b.id
                LEFT JOIN vehiculos c ON a.vehiculo = c.codigo
            WHERE a.estado = 'Activo'
        ";

        $params = array();
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $r = sqlsrv_query($connection, $q ,$params, $options);

        while ($row = sqlsrv_fetch_array( $r, SQLSRV_FETCH_ASSOC)){
            $res[] = $row;
        }

        $resultado = array(
            "draw" => 1,
            "recordsTotal" => sqlsrv_num_rows($r),
            "recordsFiltered" => sqlsrv_num_rows($r),
            "data" => $res
        );
        //var_dump($resultado);
        echo json_encode($resultado);
        //echo json_last_error();
        exit;
    }