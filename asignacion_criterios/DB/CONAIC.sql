CREATE DATABASE CONAIC;

USE CONAIC;



CREATE TABLE Usuario(
nombre varchar(20) NOT NULL,
apellidoPat varchar(20) NOT NULL,
apellidoMat varchar(20),
cargo varchar(40),
contrasena varchar(20) NOT NULL,
correo varchar(50) NOT NULL,
tipo int NOT NULL
);

CREATE TABLE RecuperarContrasena(
codigoRecuperacion varchar(6) NOT NULL,
idCodigo int NOT NULL
);

CREATE TABLE UsuarioRecuperacion(
correo varchar(50) NOT NULL,
idCodigo int NOT NULL
);

CREATE TABLE Categoria(
nombre varchar(50) NOT NULL,
claveCategoria varchar(10) NOT NULL
);

CREATE TABLE Criterio(
nombre varchar(50) NOT NULL,
claveCriterio varchar(10) NOT NULL
);

CREATE TABLE AsignacionCriterio(
claveCriterio varchar(10) NOT NULL,
correo varchar(50) NOT NULL
);

CREATE TABLE CriteriosCategoria(
claveCriterio varchar(10) NOT NULL,
claveCategoria varchar(10) NOT NULL
);

CREATE TABLE Recomendaciones(
descripcion text,
respuesta text,
fechaInicio date,
fechaTermino date,
claveRecomendacion varchar(10) NOT NULL
);

CREATE TABLE CriteriosRecomendaciones(
claveCriterio varchar(10) NOT NULL,
claveRecomendacion varchar(10) NOT NULL
);

CREATE TABLE Respuestas(
respuesta text,
numPregunta int NOT NULL,
claveRespuesta varchar(10) NOT NULL
);

CREATE TABLE CriterioRespuesta(
claveCriterio varchar(10) NOT NULL,
claveRespuesta varchar(10) NOT NULL
);

CREATE TABLE PDF(
referencia varchar(100) NOT NULL,
nombre varchar(20),
clavePDF varchar(10) NOT NULL
);

CREATE TABLE CriteriosPDF(
claveCriterio varchar(10) NOT NULL,
clavePDF varchar(10) NOT NULL
);

CREATE TABLE SubCriterio(
nombre varchar(50) NOT NULL,
claveSubCriterio varchar(10) NOT NULL
);

CREATE TABLE CriteriosSubCriterio(
claveCriterio varchar(10) NOT NULL,
claveSubCriterio varchar(10) NOT NULL
);

CREATE TABLE SubCriterioRespuesta(
claveSubCriterio varchar(10) NOT NULL,
claveRespuesta varchar(10) NOT NULL
);

CREATE TABLE SubCriteriosPDF(
claveSubCriterio varchar(10) NOT NULL,
clavePDF varchar(10) NOT NULL
);

CREATE TABLE SubCriteriosRecomendaciones(
claveSubCriterio varchar(10) NOT NULL,
claveRecomendacion varchar(10) NOT NULL
);


ALTER TABLE UsuarioRecuperacion
ADD CONSTRAINT PK_coid_usurec
PRIMARY KEY (correo, idCodigo);

ALTER TABLE RecuperarContrasena
ADD CONSTRAINT PK_idc_reccon
PRIMARY KEY (idCodigo);

ALTER TABLE Usuario
ADD CONSTRAINT PK_cor_usu
PRIMARY KEY (correo);

ALTER TABLE AsignacionCriterio
ADD CONSTRAINT PK_claco_ascr
PRIMARY KEY (claveCriterio, correo);

ALTER TABLE CriteriosCategoria
ADD CONSTRAINT PK_cricat_crica
PRIMARY KEY (claveCriterio, claveCategoria);

ALTER TABLE Categoria
ADD CONSTRAINT PK_cla_cat
PRIMARY KEY (claveCategoria);

ALTER TABLE Criterio
ADD CONSTRAINT PK_cla_cri
PRIMARY KEY (claveCriterio);

ALTER TABLE Recomendaciones
ADD CONSTRAINT PK_cla_rec
PRIMARY KEY (claveRecomendacion);

ALTER TABLE CriteriosRecomendaciones
ADD CONSTRAINT PK_cla_crirec
PRIMARY KEY (claveCriterio, claveRecomendacion);

ALTER TABLE Respuestas
ADD CONSTRAINT PK_cla_resp
PRIMARY KEY (claveRespuesta);

ALTER TABLE CriterioRespuesta
ADD CONSTRAINT PK_cla_crires
PRIMARY KEY (claveCriterio, claveRespuesta);

ALTER TABLE PDF
ADD CONSTRAINT PK_cla_pdf
PRIMARY KEY (clavePDF);

ALTER TABLE CriteriosPDF
ADD CONSTRAINT PK_cla_cripdf
PRIMARY KEY (claveCriterio, clavePDF);


ALTER TABLE SubCriterio
ADD CONSTRAINT PK_cla_subcri
PRIMARY KEY (claveSubCriterio);

ALTER TABLE CriteriosSubCriterio
ADD CONSTRAINT PK_crisub_crisub
PRIMARY KEY (claveCriterio, claveSubCriterio);

ALTER TABLE SubCriterioRespuesta
ADD CONSTRAINT PK_clasr_subcrires
PRIMARY KEY (claveSubCriterio, claveRespuesta);

ALTER TABLE SubCriteriosPDF
ADD CONSTRAINT PK_clas_cripdf
PRIMARY KEY (claveSubCriterio, clavePDF);

ALTER TABLE SubCriteriosRecomendaciones
ADD CONSTRAINT PK_clas_subcrire
PRIMARY KEY (claveSubCriterio, claveRecomendacion);



ALTER TABLE UsuarioRecuperacion
ADD CONSTRAINT FK_usRec_Usuario
FOREIGN KEY(correo)
REFERENCES Usuario(correo);

ALTER TABLE UsuarioRecuperacion
ADD CONSTRAINT FK_usRec_RecuperarContrasena
FOREIGN KEY(idCodigo)
REFERENCES RecuperarContrasena(idCodigo);



ALTER TABLE AsignacionCriterio
ADD CONSTRAINT FK_asCri_Usuario
FOREIGN KEY(correo)
REFERENCES Usuario(correo);

ALTER TABLE AsignacionCriterio
ADD CONSTRAINT FK_asCri_Criterio
FOREIGN KEY(claveCriterio)
REFERENCES Criterio(claveCriterio);



ALTER TABLE CriteriosCategoria
ADD CONSTRAINT FK_criCat_Criterio
FOREIGN KEY(claveCriterio)
REFERENCES Criterio(claveCriterio);

ALTER TABLE CriteriosCategoria
ADD CONSTRAINT FK_criCat_Categoria
FOREIGN KEY(claveCategoria)
REFERENCES Categoria(claveCategoria);



ALTER TABLE CriteriosRecomendaciones
ADD CONSTRAINT FK_criRec_Recomendaciones
FOREIGN KEY(claveRecomendacion)
REFERENCES Recomendaciones(claveRecomendacion);

ALTER TABLE CriteriosRecomendaciones
ADD CONSTRAINT FK_criRec_Criterio
FOREIGN KEY(claveCriterio)
REFERENCES Criterio(claveCriterio);



ALTER TABLE CriterioRespuesta
ADD CONSTRAINT FK_criRes_Respuestas
FOREIGN KEY(claveRespuesta)
REFERENCES Respuestas(claveRespuesta);

ALTER TABLE CriterioRespuesta
ADD CONSTRAINT FK_criRes_Criterio
FOREIGN KEY(claveCriterio)
REFERENCES Criterio(claveCriterio);



ALTER TABLE CriteriosPDF
ADD CONSTRAINT FK_cripdf_PDF
FOREIGN KEY(clavePDF)
REFERENCES PDF(clavePDF);

ALTER TABLE CriteriosPDF
ADD CONSTRAINT FK_cripdf_Criterio
FOREIGN KEY(claveCriterio)
REFERENCES Criterio(claveCriterio);


ALTER TABLE CriteriosSubCriterio
ADD CONSTRAINT FK_subcriCat_Criterio
FOREIGN KEY(claveCriterio)
REFERENCES Criterio(claveCriterio);

ALTER TABLE CriteriosSubCriterio
ADD CONSTRAINT FK_subcriCat_SubCriterio
FOREIGN KEY(claveSubCriterio)
REFERENCES SubCriterio(claveSubCriterio);



ALTER TABLE SubCriteriosPDF
ADD CONSTRAINT FK_subcripdf_PDF
FOREIGN KEY(clavePDF)
REFERENCES PDF(clavePDF);

ALTER TABLE SubCriteriosPDF
ADD CONSTRAINT FK_subcripdf_SubCriterio
FOREIGN KEY(claveSubCriterio)
REFERENCES SubCriterio(claveSubCriterio);



ALTER TABLE SubCriterioRespuesta
ADD CONSTRAINT FK_scriRes_Respuestas
FOREIGN KEY(claveRespuesta)
REFERENCES Respuestas(claveRespuesta);

ALTER TABLE SubCriterioRespuesta
ADD CONSTRAINT FK_scriRes_SubCriterio
FOREIGN KEY(claveSubCriterio)
REFERENCES SubCriterio(claveSubCriterio);


ALTER TABLE SubCriteriosRecomendaciones
ADD CONSTRAINT FK_scriRec_Recomendaciones
FOREIGN KEY(claveRecomendacion)
REFERENCES Recomendaciones(claveRecomendacion);

ALTER TABLE SubCriteriosRecomendaciones
ADD CONSTRAINT FK_scriRec_SubCriterio
FOREIGN KEY(claveSubCriterio)
REFERENCES SubCriterio(claveSubCriterio);