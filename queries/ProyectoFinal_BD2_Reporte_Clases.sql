SELECT ci.nombre AS Cliente, 
	ci.telefono AS Telefono,
	ci.email AS Email,
	ca.fecha_inicio AS FechaInicio, 
	ca.fecha_fin AS FechaFin,
	CONCAT(pe.nombre, ' ', pe.apellido) AS Instructor,
	ct.numero_sesiones AS Sesiones
FROM dbo.clases ca 
	JOIN dbo.clientes ci ON ca.cliente = ci.id 
	JOIN dbo.contratos ct ON ca.contrato = ct.numero_contrato
	JOIN dbo.personal pe ON ct.instructor = pe.id
WHERE ct.estado = 'Activo'