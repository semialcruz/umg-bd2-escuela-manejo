INSERT INTO dbo.direcciones
	VALUES	(1,'25','7 calle','guatemala',10100,'amparito','guatemala','guatemala','activo'),
			(2,'69','10 avenida','coban',10110,'buena vista','alta verapaz','coban','activo'),
			(3,'47','8 calle','salama',00100,'lucecistas','baja verapaz','salama','activo'),
			(4,'5','3 avenida','jocotenango',10010,'jardinitos','chimaltenango','jocotenango','activo'),
			(5,'12','5 calle','chiquimula',01000,'margaritas','chiquimula','chiquimula','activo'),
			(6,'32','6 calle','guastatoya',01008,'islitas','el progreso','gustatoya','activo'),
			(7,'2','7 calle','palin',01009,'coquitos','escuintla','palin','activo'),
			(8,'33','3 avenida','jacaltenango',01007,'kolcos','huehuetenango','jacaltenango','activo'),
			(9,'44','6 avenida','puerto barrios',01006,'puertito','izabal','puerto barrios','activo'),
			(10,'55','8 calle','ayutla',01010,'pontesitos','san marcos','ayutla','activo'),
			(11,'36','12 avenida','guatemala',10100,'uniones','guatemala','guatemala','activo'),
			(12,'22','2 avenida','guatemala',10100,'intentos','guatemala','guatemala','activo'),
			(13,'16','3 avenida','guatemala',10100,'doritos','guatemala','guatemala','activo'),
			(14,'23','9 calle','guatemala',10100,'manitas','guatemala','guatemala','activo'),
			(15,'45','8 calle','jocotenango',10010,'lupitas','chimaltenango','jocotenango','activo'),
			(16,'23','5 calle','jocotenango',10010,'banquitos','chimaltenango','jocotenango','activo'),
			(17,'14','12 avenida','guatemala',10100,'lluvias','guatemala','guatemala','activo'),
			(18,'56','5 calle','guatemala',10100,'lomitas','guatemala','guatemala','activo'),
			(19,'42','16 avenida','guatemala',10100,'ecobas','guatemala','guatemala','activo'),
			(20,'33','15 calle','guatemala',10100,'lucerito','guatemala','guatemala','activo'),
			(21,'25','13 calle','guatemala',10100,'kilitos','guatemala','guatemala','activo'),
			(22,'36','11 avenida','jocotenango',10010,'panito','chimaltenango','jocotenango','activo'),
			(23,'21','17 calle','jocotenango',10010,'umbral','chimaltenango','jocotenango','activo'),
			(24,'29','15 calle','palin',01009,'ramito','escuintla','palin','activo'),
			(25,'4','3 avenida','palin',01009,'ostritas','escuintla','palin','activo'),
			(26,'17','2 avenida','villa nueva',01024,'rosarito','guatemala','villa nueva','activo'),
			(27,'5','1 avenida','mixco',01021,'turbulenta','guatemala','mixco','activo'),
			(28,'28','1 calle','fraijanes',01019,'san lomito','guatemala','fraijanes','activo'),
			(29,'16','2 avenida','villa nueva',01024,'merenguito','guatemala','villa nueva','activo'),
			(30,'11','9 calle','mixco',01021,'villa azul','guatemala','mixco','activo')

INSERT INTO dbo.metodo_pago
	VALUES	(1,'Efectivo'),
			(2,'Tarjeta Credito/Debito'),
			(3,'Cheque')

INSERT INTO dbo.puestos
	VALUES	(1,'Gerente'),
			(2,'Instructor'),
			(3,'Recepcionista'),
			(4,'Mecanico')

INSERT INTO dbo.clientes
	VALUES	(1,'1203-12345-1245','Fedrah Zarra',1,'1995-09-16','Fedrah@correo.com','0912-9012','activo' ),
			(2,'1203-12345-1246','Roberto Cobreros',2,'1995-09-17','Roberto@correo.com','0912-9013','activo' ),
			(3,'1203-12345-1247','Remigio Urtado',3,'1995-09-18','Remigio@correo.com','0912-9014','inactivo' ),
			(4,'1203-12345-1248','Leonardo Mendibuey',4,'1995-09-19','Leonardo@correo.com','0912-9015','activo' ),
			(5,'1203-12345-1249','H�ctor Inda',5,'1991-10-09','H�ctor@correo.com','0912-9016','inactivo'),
			(6,'1203-12345-1250','Soraya Larrauri',6,'1991-10-10','Soraya@correo.com','0912-9017','activo' ),
			(7,'1203-12345-1251','Andonis Aceves',7,'1991-10-11','Andonis@correo.com','0912-9018','activo' ),
			(8,'1203-12345-1252','Oier Cantoral',8,'1991-10-12','Oier@correo.com','0912-9019','activo' ),
			(9,'1203-12345-1253','Alexia Aranzabal',9,'1991-10-13','Alexia@correo.com','0912-9020','activo' ),
			(10,'1203-12345-1254','Said Insausti',10,'1989-03-12','Said@correo.com','0912-9021','activo' ),
			(11,'1203-12345-1255','Jimmy Llanos',11,'1989-03-13','Jimmy@correo.com','0912-9022','activo' ),
			(12,'1203-12345-1256','Africa Esnarriaga',12,'1989-03-14','Africa@correo.com','0912-9023','activo' ),
			(13,'1203-12345-1257','Liberata Jonsansoro',13,'1989-03-15','Liberata@correo.com','0912-9024','activo' ),
			(14,'1203-12345-1258','Edelys Arrizabalaga',14,'1989-03-16','Edelys@correo.com','0912-9025','activo' ),
			(15,'1203-12345-1259','In�s Teberga',15,'1989-03-17','In�s@correo.com','0912-9026','activo')


INSERT INTO dbo.personal
	VALUES	(1,'9856-88910-0101',30,'Arquimides','Zurica','1991-12-01','2017-10-09','2255-0910','Arquimides@correo.com','2021-12-01','Inactivo',1),
			(2,'9856-88910-0102',29,'Corina','Murua','1991-12-02','2017-10-10','2255-0911','Corina@correo.com','2021-12-02','Inactivo',2),
			(3,'9856-88910-0103',28,'Pedro','Solis','1991-12-03','2017-10-11','2255-0912','Pedro@correo.com','','Activo',2),
			(4,'9856-88910-0104',27,'Carmen','Oles','1991-12-04','2017-10-12','2255-0913','Carmen@correo.com','','Activo',2),
			(5,'9856-88910-0105',26,'Tobias','Viguri','1991-12-05','2017-10-13','2255-0914','Tobias@correo.com','','Activo',3),
			(6,'9856-88910-0106',25,'Geyner','Gordejuela','1991-12-06','2017-10-14','2255-0915','Geyner@correo.com','','Activo',3),
			(7,'9856-88910-0107',24,'Gorka','Barahona','1991-12-07','2019-06-19','2255-0916','Gorka@correo.com','','Activo',2),
			(8,'9856-88910-0108',23,'Donato','Cardon','1991-12-08','2019-06-20','2255-0917','Donato@correo.com','','Activo',2),
			(9,'9856-88910-0109',22,'Jos�','Aliprando','1991-12-09','2019-06-21','2255-0918','Jos�@correo.com','','Activo',4),
			(10,'9856-88910-0110',21,'Santino','Chirivoga','1989-05-24','2019-06-22','2255-0919','Santino@correo.com','','Activo',2),
			(11,'9856-88910-0111',20,'Natalia','Esparza','1989-05-25','2019-06-23','2255-0920','Natalia@correo.com','','Activo',2),
			(12,'9856-88910-0112',19,'Keven','Poz','1989-05-26','2019-06-24','2255-0921','Keven@correo.com','2021-12-01','Inactivo',4),
			(13,'9856-88910-0113',18,'Silvana','Ugia','1989-05-27','2019-06-25','2255-0922','Silvana@correo.com','2021-12-02','Inactivo',2),
			(14,'9856-88910-0114',17,'Aixa','Galdamez','1989-05-28','2019-06-26','2255-0923','Aixa@correo.com','','Activo',2),
			(15,'9856-88910-0115',16,'Alix','Tejerizo','1989-05-29','2019-06-27','2255-0924','Alix@correo.com','','Activo',2)

INSERT INTO dbo.vehiculos
	VALUES	(1,'honda','crv','2021-05-02','2006'),
			(2,'toyota','rav4','2021-02-05','2008'),
			(3,'mitsubishi','outlander','2017-09-24','2010'),
			(4,'mazda','cx_7','2019-12-13','2007'),
			(5,'nissan','x_terra','2018-11-29','2005'),
			(6,'chevrolet','suburban','2021-01-14','1999'),
			(7,'ford','explorer','2015-11-17','2003'),
			(8,'hyundai','santa_fe','2017-10-08','2008'),
			(9,'kia','sorento','2020-12-20','2012'),
			(10,'volkswagen','golf','2021-03-27','2011'),
			(11,'land_rover','discovery','2018-10-20','2009'),
			(12,'subaru','impreza','2019-07-15','2015'),
			(13,'gmc','yucon','2020-02-05','2010'),
			(14,'bmw','x5','2017-05-17','2005'),
			(15,'cadillac','escalade','2018-03-25','2002')

INSERT INTO dbo.contratos
	VALUES	(1,15,15,1,'2020-09-12','2020-10-09','850','Inactivo'),
			(2,14,14,2,'2020-09-13','2020-10-10','850','Inactivo'),
			(3,13,13,3,'2020-09-14','2020-10-11','850','Inactivo'),
			(4,12,12,4,'2020-09-15','2020-10-12','850','Inactivo'),
			(5,11,11,5,'2020-09-16','2020-10-13','850','Inactivo'),
			(6,10,1,6,'2020-09-17','2020-10-14','850','Inactivo'),
			(7,9,2,7,'2020-09-18','2020-10-15','850','Inactivo'),
			(8,8,3,8,'2020-09-19','2020-10-16','850','Inactivo'),
			(9,7,4,9,'2020-09-20','2020-10-17','850','Inactivo'),
			(10,6,5,10,'2020-09-21','2020-10-18','850','Inactivo'),
			(11,5,6,11,'2020-09-22','2020-10-19','850','Inactivo'),
			(12,4,7,12,'2020-09-23','2020-10-20','850','Inactivo'),
			(13,3,8,13,'2020-09-24','2020-10-21','850','Inactivo'),
			(14,2,9,14,'2020-09-25','2020-10-22','850','Inactivo'),
			(15,1,10,15,'2020-09-26','2020-10-23','850','Inactivo')

INSERT INTO dbo.clases
	VALUES	(1,'2020-09-16',15,'2020-09-14','2020-10-01',1),
			(2,'2020-09-17',14,'2020-09-15','2020-10-02',2),
			(3,'2020-09-18',13,'2020-09-16','2020-10-03',3),
			(4,'2020-09-19',12,'2020-09-17','2020-10-04',4),
			(5,'2020-09-20',11,'2020-09-18','2020-10-05',5),
			(6,'2020-09-21',10,'2020-09-19','2020-10-06',6),
			(7,'2020-09-22',9,'2020-09-20','2020-10-07',7),
			(8,'2020-09-23',8,'2020-09-21','2020-10-08',8),
			(9,'2020-09-24',7,'2020-09-22','2020-10-09',9),
			(10,'2020-09-25',6,'2020-09-23','2020-10-10',10),
			(11,'2020-09-26',5,'2020-09-24','2020-10-11',14),
			(12,'2020-09-27',4,'2020-09-25','2020-10-12',13),
			(13,'2020-09-28',3,'2020-09-26','2020-10-13',12),
			(14,'2020-09-29',2,'2020-09-27','2020-10-14',11),
			(15,'2020-09-30',1,'2020-09-28','2020-10-15',15)

INSERT INTO dbo.pagos
	VALUES	(1,'2021-05-03','3','38500','1','total'),
			(2,'2021-02-06','2','55400','2','total'),
			(3,'2017-09-25','3','45000','9','total'),
			(4,'2019-12-14','3','28700','4','parcial'),
			(5,'2018-11-30','1','35300','5','parcial'),
			(6,'2021-01-15','1','15200','6','total'),
			(7,'2015-11-18','2','24800','7','parcial'),
			(8,'2017-10-09','3','41700','12','parcial'),
			(9,'2020-12-21','2','63000','15','total'),
			(10,'2021-03-28','1','73100','3','total'),
			(11,'2018-10-21','2','130500','14','total'),
			(12,'2019-07-16','2','160000','8','total'),
			(13,'2020-02-06','1','75400','13','total'),
			(14,'2017-05-18','1','43900','10','parcial'),
			(15,'2018-03-26','3','21250','11','parcial')

INSERT INTO dbo.usuarios
	VALUES (1,'salvaradoc7@miumg.edu.gt','admin',NULL,'$2y$10$sLwJfyz/eXJbqKusJDTqmebNz0j2WCMEQKqmiYO2QgXhoaLlPszEG', CURRENT_TIMESTAMP,NULL)