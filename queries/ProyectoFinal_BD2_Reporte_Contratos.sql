SELECT numero_contrato, 
	numero_sesiones, 
	CONCAT(nombre,' ',apellido) AS instructor, 
	CONCAT(marca,' ',modelo,' ',anio) AS vehiculo, 
	FORMAT(fecha_inicio, 'dd/MM/yyyy') as fecha_inicio,
	FORMAT(fecha_fin, 'dd/MM/yyyy')
FROM contratos a 
	LEFT JOIN personal b ON a.instructor = b.id
	LEFT JOIN vehiculos c ON a.vehiculo = c.codigo
WHERE a.estado = 'Activo'