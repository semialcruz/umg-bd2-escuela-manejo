
CREATE PROCEDURE SP_Ingresar_Cliente
    @NumeroCasa VARCHAR(255),
	@Calle_Avenida VARCHAR(255),
	@Ciudad VARCHAR(255),
	@CodigoPostal INT,
	@Colonia VARCHAR(255),
	@Departamento VARCHAR(255),
	@Municipio VARCHAR(255),
	@EstadoDireccion VARCHAR(255),
	@CodigoCliente VARCHAR(255),
	@NombreCliente VARCHAR(255),
	@FechaNacimiento DATE,
	@Email VARCHAR(255),
	@Telefono VARCHAR(255),
	@EstadoCliente VARCHAR(255)
AS BEGIN
	SET NOCOUNT ON
	SET TRANSACTION ISOLATION LEVEL READ COMMITTED
	DECLARE
@IdDireccion int
BEGIN TRY
BEGIN TRANSACTION
			INSERT INTO direcciones(numero_casa,calle_avenida,ciudad,codigo_postal,colonia,departamento,municipio,estado)
				VALUES (@NumeroCasa,@Calle_Avenida,@Ciudad,@CodigoPostal,@Colonia,@Departamento,@Municipio,@EstadoDireccion)

			SET @IdDireccion = (SELECT SCOPE_IDENTITY())

			INSERT INTO clientes(codigo,nombre,direccion,fecha_nacimiento,email,telefono,estado)
				VALUES (@CodigoCliente,@NombreCliente,@IdDireccion,@FechaNacimiento,@Email,@Telefono,@EstadoCliente)
			
		COMMIT TRANSACTION
END TRY
BEGIN CATCH
SELECT ERROR_MESSAGE(), ERROR_SEVERITY()
    ROLLBACK TRANSACTION
		print 'hay error'
END CATCH
END

