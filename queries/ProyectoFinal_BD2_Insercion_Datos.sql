INSERT INTO direcciones(numero_casa,calle_avenida,ciudad,codigo_postal,colonia,departamento,municipio,estado)
VALUES	('25','7 calle','guatemala',10100,'amparito','guatemala','guatemala','activo'),
          ('69','10 avenida','coban',10110,'buena vista','alta verapaz','coban','activo'),
          ('47','8 calle','salama',00100,'lucecistas','baja verapaz','salama','activo'),
          ('5','3 avenida','jocotenango',10010,'jardinitos','chimaltenango','jocotenango','activo'),
          ('12','5 calle','chiquimula',01000,'margaritas','chiquimula','chiquimula','activo'),
          ('32','6 calle','guastatoya',01008,'islitas','el progreso','gustatoya','activo'),
          ('2','7 calle','palin',01009,'coquitos','escuintla','palin','activo'),
          ('33','3 avenida','jacaltenango',01007,'kolcos','huehuetenango','jacaltenango','activo'),
          ('44','6 avenida','puerto barrios',01006,'puertito','izabal','puerto barrios','activo'),
          ('55','8 calle','ayutla',01010,'pontesitos','san marcos','ayutla','activo'),
          ('36','12 avenida','guatemala',10100,'uniones','guatemala','guatemala','activo'),
          ('22','2 avenida','guatemala',10100,'intentos','guatemala','guatemala','activo'),
          ('16','3 avenida','guatemala',10100,'doritos','guatemala','guatemala','activo'),
          ('23','9 calle','guatemala',10100,'manitas','guatemala','guatemala','activo'),
          ('45','8 calle','jocotenango',10010,'lupitas','chimaltenango','jocotenango','activo'),
          ('23','5 calle','jocotenango',10010,'banquitos','chimaltenango','jocotenango','activo'),
          ('14','12 avenida','guatemala',10100,'lluvias','guatemala','guatemala','activo'),
          ('56','5 calle','guatemala',10100,'lomitas','guatemala','guatemala','activo'),
          ('42','16 avenida','guatemala',10100,'ecobas','guatemala','guatemala','activo'),
          ('33','15 calle','guatemala',10100,'lucerito','guatemala','guatemala','activo'),
          ('25','13 calle','guatemala',10100,'kilitos','guatemala','guatemala','activo'),
          ('36','11 avenida','jocotenango',10010,'panito','chimaltenango','jocotenango','activo'),
          ('21','17 calle','jocotenango',10010,'umbral','chimaltenango','jocotenango','activo'),
          ('29','15 calle','palin',01009,'ramito','escuintla','palin','activo'),
          ('4','3 avenida','palin',01009,'ostritas','escuintla','palin','activo'),
          ('17','2 avenida','villa nueva',01024,'rosarito','guatemala','villa nueva','activo'),
          ('5','1 avenida','mixco',01021,'turbulenta','guatemala','mixco','activo'),
          ('28','1 calle','fraijanes',01019,'san lomito','guatemala','fraijanes','activo'),
          ('16','2 avenida','villa nueva',01024,'merenguito','guatemala','villa nueva','activo'),
          ('11','9 calle','mixco',01021,'villa azul','guatemala','mixco','activo')

    INSERT INTO metodo_pago(nombre_pago)
VALUES	('Efectivo'),
    ('Tarjeta Credito/Debito'),
    ('Cheque')

INSERT INTO puestos(nombre_puesto)
VALUES	('Gerente'),
    ('Instructor'),
    ('Recepcionista'),
    ('Mecanico')

INSERT INTO clientes(codigo,nombre,direccion,fecha_nacimiento,email,telefono,estado)
VALUES	('1203-12345-1245','Fedrah Zarra',1,'1995-09-16','fedrah@correo.com','0912-9012','activo' ),
    ('1203-12345-1246','Roberto Cobreros',2,'1995-09-17','roberto@correo.com','0912-9013','activo' ),
    ('1203-12345-1247','Remigio Urtado',3,'1995-09-18','remigio@correo.com','0912-9014','inactivo' ),
    ('1203-12345-1248','Leonardo Mendibuey',4,'1995-09-19','leonardo@correo.com','0912-9015','activo' ),
    ('1203-12345-1249','Hector Inda',5,'1991-10-09','hector@correo.com','0912-9016','inactivo'),
    ('1203-12345-1250','Soraya Larrauri',6,'1991-10-10','soraya@correo.com','0912-9017','activo' ),
    ('1203-12345-1251','Andonis Aceves',7,'1991-10-11','andonis@correo.com','0912-9018','activo' ),
    ('1203-12345-1252','Oier Cantoral',8,'1991-10-12','oier@correo.com','0912-9019','activo' ),
    ('1203-12345-1253','Alexia Aranzabal',9,'1991-10-13','alexia@correo.com','0912-9020','activo' ),
    ('1203-12345-1254','Said Insausti',10,'1989-03-12','said@correo.com','0912-9021','activo' ),
    ('1203-12345-1255','Jimmy Llanos',11,'1989-03-13','jimmy@correo.com','0912-9022','activo' ),
    ('1203-12345-1256','Africa Esnarriaga',12,'1989-03-14','africa@correo.com','0912-9023','activo' ),
    ('1203-12345-1257','Liberata Jonsansoro',13,'1989-03-15','liberata@correo.com','0912-9024','activo' ),
    ('1203-12345-1258','Edelys Arrizabalaga',14,'1989-03-16','edelys@correo.com','0912-9025','activo' ),
    ('1203-12345-1259','Ines Teberga',15,'1989-03-17','ines@correo.com','0912-9026','activo')


INSERT INTO personal(codigo,direccion,nombre,apellido,fecha_nacimiento,fecha_contratacion,telefono,email,fecha_baja,estado,puesto)
VALUES	('9856-88910-0101',30,'Arquimides','Zurica','1991-12-01','2017-10-09','2255-0910','arquimides@correo.com','2021-12-01','Inactivo',1),
    ('9856-88910-0102',29,'Corina','Murua','1991-12-02','2017-10-10','2255-0911','corina@correo.com','2021-12-02','Inactivo',2),
    ('9856-88910-0103',28,'Pedro','Solis','1991-12-03','2017-10-11','2255-0912','pedro@correo.com','','Activo',2),
    ('9856-88910-0104',27,'Carmen','Oles','1991-12-04','2017-10-12','2255-0913','carmen@correo.com','','Activo',2),
    ('9856-88910-0105',26,'Tobias','Viguri','1991-12-05','2017-10-13','2255-0914','tobias@correo.com','','Activo',3),
    ('9856-88910-0106',25,'Geyner','Gordejuela','1991-12-06','2017-10-14','2255-0915','geyner@correo.com','','Activo',3),
    ('9856-88910-0107',24,'Gorka','Barahona','1991-12-07','2019-06-19','2255-0916','gorka@correo.com','','Activo',2),
    ('9856-88910-0108',23,'Donato','Cardon','1991-12-08','2019-06-20','2255-0917','donato@correo.com','','Activo',2),
    ('9856-88910-0109',22,'Jose','Aliprando','1991-12-09','2019-06-21','2255-0918','jose@correo.com','','Activo',4),
    ('9856-88910-0110',21,'Santino','Chirivoga','1989-05-24','2019-06-22','2255-0919','santino@correo.com','','Activo',2),
    ('9856-88910-0111',20,'Natalia','Esparza','1989-05-25','2019-06-23','2255-0920','natalia@correo.com','','Activo',2),
    ('9856-88910-0112',19,'Keven','Poz','1989-05-26','2019-06-24','2255-0921','keven@correo.com','2021-12-01','Inactivo',4),
    ('9856-88910-0113',18,'Silvana','Ugia','1989-05-27','2019-06-25','2255-0922','silvana@correo.com','2021-12-02','Inactivo',2),
    ('9856-88910-0114',17,'Aixa','Galdamez','1989-05-28','2019-06-26','2255-0923','aixa@correo.com','','Activo',2),
    ('9856-88910-0115',16,'Alix','Tejerizo','1989-05-29','2019-06-27','2255-0924','alix@correo.com','','Activo',2)

INSERT INTO vehiculos(marca,modelo,fecha_compra,anio)
VALUES	('honda','crv','2021-05-02','2006'),
    ('toyota','rav4','2021-02-05','2008'),
    ('mitsubishi','outlander','2017-09-24','2010'),
    ('mazda','cx_7','2019-12-13','2007'),
    ('nissan','x_terra','2018-11-29','2005'),
    ('chevrolet','suburban','2021-01-14','1999'),
    ('ford','explorer','2015-11-17','2003'),
    ('hyundai','santa_fe','2017-10-08','2008'),
    ('kia','sorento','2020-12-20','2012'),
    ('volkswagen','golf','2021-03-27','2011'),
    ('land_rover','discovery','2018-10-20','2009'),
    ('subaru','impreza','2019-07-15','2015'),
    ('gmc','yucon','2020-02-05','2010'),
    ('bmw','x5','2017-05-17','2005'),
    ('cadillac','escalade','2018-03-25','2002')


INSERT INTO contratos(numero_sesiones,instructor,vehiculo,fecha_inicio,fecha_fin,costo_total,estado)
VALUES	(15,15,1,'2021-06-12','2021-10-09','850','Inactivo'),
    (14,14,2,'2021-06-12','2021-07-10','850','Activo'),
    (13,13,3,'2021-06-14','2021-07-11','850','Inactivo'),
    (12,8,4,'2021-06-15','2021-07-12','850','Activo'),
    (11,11,5,'2021-06-16','2021-07-13','850','Activo'),
    (10,2,6,'2021-06-17','2021-07-14','850','Activo'),
    (9,2,7,'2021-06-18','2021-07-15','850','Activo'),
    (8,3,8,'2021-06-19','2021-07-16','850','Activo'),
    (7,4,9,'2021-06-20','2021-07-17','850','Inactivo'),
    (6,4,10,'2021-06-21','2021-07-18','850','Activo'),
    (5,7,11,'2021-06-22','2021-07-19','850','Inactivo'),
    (4,7,12,'2021-06-23','2021-07-20','850','Inactivo'),
    (3,8,13,'2021-06-24','2021-07-21','850','Activo'),
    (2,2,14,'2021-06-25','2021-07-22','850','Activo'),
    (1,10,15,'2021-06-26','2021-07-23','850','Activo')

INSERT INTO clases(fecha,cliente,fecha_inicio,fecha_fin,contrato)
VALUES	('2021-05-16',15,'2021-09-14','2021-10-01',1),
    ('2021-05-17',14,'2021-06-15','2021-07-02',2),
    ('2021-05-18',13,'2021-06-16','2021-07-03',3),
    ('2021-05-19',12,'2021-06-17','2021-07-04',4),
    ('2021-05-20',11,'2021-06-18','2021-07-05',5),
    ('2021-05-21',10,'2021-06-19','2021-07-06',6),
    ('2021-05-22',9,'2021-06-20','2021-07-07',7),
    ('2021-05-23',8,'2021-06-21','2021-07-08',8),
    ('2021-05-24',7,'2021-06-22','2021-07-09',9),
    ('2021-05-25',6,'2021-06-23','2021-07-10',10),
    ('2021-05-26',5,'2021-06-24','2021-07-11',14),
    ('2021-05-27',4,'2021-06-25','2021-07-12',13),
    ('2021-05-28',3,'2021-06-26','2021-07-13',12),
    ('2021-05-29',2,'2021-06-27','2021-07-14',11),
    ('2021-05-30',1,'2021-06-28','2021-07-15',15)

INSERT INTO pagos(fecha_pago,metodo_pago,monto,contrato,tipo_pago)
VALUES	('2021-05-03','3','38500','1','total'),
    ('2021-02-06','2','55400','2','total'),
    ('2017-09-25','3','45000','9','total'),
    ('2019-12-14','3','28700','4','parcial'),
    ('2018-11-30','1','35300','5','parcial'),
    ('2021-01-15','1','15200','6','total'),
    ('2015-11-18','2','24800','7','parcial'),
    ('2017-10-09','3','41700','12','parcial'),
    ('2020-12-21','2','63000','15','total'),
    ('2021-03-28','1','73100','3','total'),
    ('2018-10-21','2','130500','14','total'),
    ('2019-07-16','2','160000','8','total'),
    ('2020-02-06','1','75400','13','total'),
    ('2017-05-18','1','43900','10','parcial'),
    ('2018-03-26','3','21250','11','parcial')


INSERT INTO dbo.usuarios
VALUES (1,'admin','salvaradoc7@miumg.edu.gt','','$2y$10$sLwJfyz/eXJbqKusJDTqmebNz0j2WCMEQKqmiYO2QgXhoaLlPszEG', CURRENT_TIMESTAMP,NULL)