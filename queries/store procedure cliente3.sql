
ALTER PROCEDURE SP_Ingresar_Cliente 
	@CodigoDireccion INT,
	@NumeroCasa VARCHAR(255),
	@Calle_Avenida VARCHAR(255),
	@Ciudad VARCHAR(255),
	@CodigoPostal INT,
	@Colonia VARCHAR(255),
	@Departamento VARCHAR(255),
	@Municipio VARCHAR(255),
	@EstadoDireccion VARCHAR(255),
	@IdCliente INT,
	@CodigoCliente VARCHAR(255),
	@NombreCliente VARCHAR(255),
	@FechaNacimiento DATE,
	@Email VARCHAR(255),
	@Telefono VARCHAR(255),
	@EstadoCliente VARCHAR(255)
AS BEGIN
	SET NOCOUNT ON
	SET TRANSACTION ISOLATION LEVEL READ COMMITTED
	BEGIN TRY
		BEGIN TRANSACTION 
			INSERT INTO dbo.direcciones
				VALUES (@CodigoDireccion,@NumeroCasa,@Calle_Avenida,@Ciudad,@CodigoPostal,@Colonia,@Departamento,@Municipio,@EstadoDireccion)
			INSERT INTO dbo.clientes
				VALUES (@IdCliente,@CodigoCliente,@NombreCliente,@CodigoDireccion,@FechaNacimiento,@Email,@Telefono,@EstadoCliente)
			
		COMMIT TRANSACTION 
	END TRY
	BEGIN CATCH
		SELECT ERROR_MESSAGE(), ERROR_SEVERITY()
		ROLLBACK TRANSACTION 
		print 'hay error'
	END CATCH
END

EXEC SP_Ingresar_Cliente 31,'31','6 avenida','guatemala','10100','villa marina','guatemala','guatemala','activo','16','1203-12345-1260','Jadir Solema','1991-04-25','jadir@mail.com','3654-5425','activo'
commit
select * from clientes
select * from direcciones
DELETE from direcciones where codigo = 31

SET TRANSACTION ISOLATION LEVEL READ UNCOMMITTED
select * from direcciones