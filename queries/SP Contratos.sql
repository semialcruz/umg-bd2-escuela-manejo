CREATE PROCEDURE [dbo].[Reporte_Contratos]
	
AS BEGIN

	SET NOCOUNT ON
	SET TRANSACTION ISOLATION LEVEL READ COMMITTED

	BEGIN TRY
	BEGIN TRANSACTION
	
		SELECT numero_contrato, numero_sesiones, CONCAT(nombre,' ',apellido) AS Instructor, 
		CONCAT(marca,' ',modelo,' ',anio)AS Vehiculo, fecha_inicio, fecha_fin
		FROM contratos a LEFT JOIN personal b ON a.instructor = b.id
					     LEFT JOIN vehiculos c ON a.vehiculo = c.codigo 

		COMMIT
	END TRY
	BEGIN CATCH
		ROLLBACK
	END CATCH
END

EXEC Reporte_Contratos


