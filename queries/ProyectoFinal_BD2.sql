CREATE TABLE [personal] (
  [id] integer PRIMARY KEY,
  [codigo] nvarchar(255) UNIQUE,
  [direccion] integer NOT NULL,
  [nombre] nvarchar(255) NOT NULL,
  [apellido] nvarchar(255) NOT NULL,
  [fecha_nacimiento] date NOT NULL,
  [fecha_contratacion] date NOT NULL,
  [telefono] nvarchar(255),
  [email] nvarchar(255) UNIQUE,
  [fecha_baja] date NULL,
  [estado] nvarchar(255) NOT NULL,
  [puesto] integer NOT NULL
)
GO

CREATE TABLE [puestos] (
  [id] integer PRIMARY KEY,
  [nombre_puesto] nvarchar(255) NOT NULL
)
GO

CREATE TABLE [direcciones] (
  [codigo] integer PRIMARY KEY,
  [numero_casa] nvarchar(255) NOT NULL,
  [calle_avenida] nvarchar(255) NOT NULL,
  [ciudad] nvarchar(255) NULL,
  [codigo_postal] integer NULL,
  [colonia] nvarchar(255) NULL,
  [departamento] nvarchar(255) NOT NULL,
  [municipio] nvarchar(255) NOT NULL,
  [estado] nvarchar(255) NOT NULL
)
GO

CREATE TABLE [vehiculos] (
  [codigo] integer PRIMARY KEY,
  [marca] nvarchar(255),
  [modelo] nvarchar(255),
  [fecha_compra] date,
  [anio] nvarchar(255)
)
GO

CREATE TABLE [clientes] (
  [id] integer PRIMARY KEY,
  [codigo] nvarchar(255) UNIQUE,
  [nombre] nvarchar(255) NOT NULL,
  [direccion] integer NOT NULL,
  [fecha_nacimiento] date NOT NULL,
  [email] nvarchar(255) UNIQUE NOT NULL,
  [telefono] nvarchar(255) NOT NULL,
  [estado] nvarchar(255) NOT NULL
)
GO

CREATE TABLE [contratos] (
  [numero_contrato] integer PRIMARY KEY,
  [numero_sesiones] integer NOT NULL,
  [instructor] integer NOT NULL,
  [vehiculo] integer NOT NULL,
  [fecha_inicio] date NOT NULL,
  [fecha_fin] date NOT NULL,
  [costo_total] float NOT NULL,
  [estado] nvarchar(255) NOT NULL
)
GO

CREATE TABLE [pagos] (
  [id] integer PRIMARY KEY,
  [fecha_pago] date NOT NULL,
  [metodo_pago] integer NOT NULL,
  [monto] float NOT NULL,
  [contrato] integer NOT NULL,
  [tipo_pago] nvarchar(255) NOT NULL
)
GO

CREATE TABLE [metodo_pago] (
  [id] integer PRIMARY KEY,
  [nombre_pago] nvarchar(255) NOT NULL
)
GO

CREATE TABLE [clases] (
  [id] integer PRIMARY KEY,
  [fecha] date NOT NULL,
  [cliente] integer NOT NULL,
  [fecha_inicio] datetime NOT NULL,
  [fecha_fin] datetime NOT NULL,
  [contrato] integer NOT NULL
)
GO

CREATE TABLE [usuarios] (
  [id] integer PRIMARY KEY,
  [usuario] nvarchar(255) NOT NULL,
  [email] nvarchar(255) UNIQUE NOT NULL,
  [contrasenia] nvarchar(255) NOT NULL,
  [con_hash] nvarchar(255),
  [creado_el] datetime 
			Default current_timestamp,
  [actualizado_el] datetime NULL
)
GO

ALTER TABLE [personal] ADD CONSTRAINT [puesto_personal] FOREIGN KEY ([puesto]) REFERENCES [puestos] ([id])
GO

ALTER TABLE [clientes] ADD CONSTRAINT [direccion_cliente] FOREIGN KEY ([direccion]) REFERENCES [direcciones] ([codigo])
GO

ALTER TABLE [pagos] ADD CONSTRAINT [pagos_tipo] FOREIGN KEY ([metodo_pago]) REFERENCES [metodo_pago] ([id])
GO

ALTER TABLE [contratos] ADD CONSTRAINT [instructor] FOREIGN KEY ([instructor]) REFERENCES [personal] ([id])
GO

ALTER TABLE [clases] ADD CONSTRAINT [clase_cliente] FOREIGN KEY ([cliente]) REFERENCES [clientes] ([id])
GO

ALTER TABLE [clases] ADD CONSTRAINT [clase_contrato] FOREIGN KEY ([contrato]) REFERENCES [contratos] ([numero_contrato])
GO

ALTER TABLE [contratos] ADD CONSTRAINT [contrato_vehiculo] FOREIGN KEY ([vehiculo]) REFERENCES [vehiculos] ([codigo])
GO

ALTER TABLE [pagos] ADD CONSTRAINT [pago_contrato] FOREIGN KEY ([contrato]) REFERENCES [contratos] ([numero_contrato])
GO

ALTER TABLE [personal] ADD CONSTRAINT [direccion_personal] FOREIGN KEY ([direccion]) REFERENCES [direcciones] ([codigo])
GO

EXEC sp_addextendedproperty
@name = N'Column_Description',
@value = 'DPI',
@level0type = N'Schema', @level0name = 'dbo',
@level1type = N'Table',  @level1name = 'personal',
@level2type = N'Column', @level2name = 'codigo';
GO

EXEC sp_addextendedproperty
@name = N'Column_Description',
@value = 'DPI',
@level0type = N'Schema', @level0name = 'dbo',
@level1type = N'Table',  @level1name = 'clientes',
@level2type = N'Column', @level2name = 'codigo';
GO
