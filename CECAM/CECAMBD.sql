CREATE DATABASE CECAM;
USE CECAM;

CREATE TABLE  ASPIRANTE (
No_Aspirante INT (10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
CURP VARCHAR(18) NOT NULL,
Nombre VARCHAR (80) NOT NULL,
Apellido_Paterno VARCHAR (100) NOT NULL,
Apellido_Materno VARCHAR (100) NOT NULL, 
Edad INT(2) NOT NULL, 
Sexo VARCHAR (10) NOT NULL,
Direccion VARCHAR (200), 
Profesion VARCHAR (200) NOT NULL, 
Tel_Celular VARCHAR (13) NOT NULL,
Tel_casa VARCHAR (12), 
Otro VARCHAR (15), 
Email VARCHAR (30), 
Especialidad VARCHAR (200),
Ced_Profesional VARCHAR (200) NOT NULL, 
Lugar_Trabajo VARCHAR (200),
Tel_Fijo VARCHAR (10));

CREATE TABLE CURSO (
Codigo VARCHAR (10) PRIMARY KEY NOT NULL, 
Curso VARCHAR (180) NOT NULL, 
Tipo VARCHAR (180),
Costo DECIMAL (18,2));

CREATE TABLE INSCRIPCION (
Inscripcion INT (10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
CURP VARCHAR (18) NOT NULL,
Codigo VARCHAR (10) NOT NULL);

INSERT INTO CURSO VALUES ('LEGO','SALVA CORAZONES PRIMEROS AUXILIOS Y USO DEL DEA','PARA TODO PUBLICO',1250);
INSERT INTO CURSO VALUES ('BLS','SOPORTE VITAL BASICO (BLS)','INVERSION',1500);
INSERT INTO CURSO VALUES ('ACLS','SOPORTE CARDIOVASCULAR AVANZADO (ACLS)','INVERSION',3500);
INSERT INTO CURSO VALUES ('PALS','SOPORTE CARDIOVASCULAR AVANZADO PEDIATRICO (PALS)','INVERSION',3500);
INSERT INTO CURSO VALUES ('BLS + ACLS','BLS + ACLS','BASIC LIFE SUPPORT',4500);
INSERT INTO CURSO VALUES ('BLS + PALS','BLS + PALS','BASIC LIFE SUPPORT',4500);

