

CREATE PROCEDURE SP_Ingresar_Personal 
	@NumeroCasa VARCHAR(255),
	@Calle_Avenida VARCHAR(255),
	@Ciudad VARCHAR(255),
	@CodigoPostal INT,
	@Colonia VARCHAR(255),
	@Departamento VARCHAR(255),
	@Municipio VARCHAR(255),
	@EstadoDireccion VARCHAR(255),
	@CodigoPersonal VARCHAR(255),
	@Nombre VARCHAR(255),
	@Apellido VARCHAR(255),
	@FechaNacimiento DATE,
	@FechaContratacion DATE,
	@Telefono VARCHAR(255),
	@Email VARCHAR(255),
	@Estado VARCHAR(255),
	@Puesto INT
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
					
			INSERT INTO personal(codigo,direccion,nombre,apellido,fecha_nacimiento,fecha_contratacion,telefono,email,estado,puesto)
				VALUES	(@CodigoPersonal,@IdDireccion,@Nombre,@Apellido,@FechaNacimiento,@FechaContratacion,@Telefono,@Email,@Estado,@Puesto)
			
		COMMIT TRANSACTION 
	END TRY
	BEGIN CATCH
		SELECT ERROR_MESSAGE(), ERROR_SEVERITY()
		ROLLBACK TRANSACTION 
		print 'hay error'
	END CATCH
END

EXEC SP_Ingresar_Personal '24','10 avenida','guatemala','10100','dia alegre','guatemala','guatemala','activo','1203-12345-1270','Esteban','Solares','1991-03-15','2021-06-06','3654-5425','Esteban@mail.com','activo',2

select * from direcciones
select * from personal