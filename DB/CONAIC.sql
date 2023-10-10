CREATE DATABASE CONAIC;

USE CONAIC;



CREATE TABLE Usuario(
nombre varchar(20) NOT NULL,
apellidoPat varchar(20) NOT NULL,
apellidoMat varchar(20),
cargo varchar(40),
contrasena varchar(20) NOT NULL,
correo varchar(50) NOT NULL,
tipo int NOT NULL,
confirmacion int NOT NULL
);


CREATE TABLE Categoria(
nombre varchar(50) NOT NULL,
claveCategoria varchar(10) NOT NULL
);

CREATE TABLE Criterio(
nombre text NOT NULL,
claveCriterio varchar(10) NOT NULL
);

CREATE TABLE AsignacionSubCriterio(
claveSubCriterio varchar(10) NOT NULL,
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






CREATE TABLE SubCriterio(
nombre text NOT NULL,
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
clavePDF text NOT NULL
);

CREATE TABLE SubCriteriosRecomendaciones(
claveSubCriterio varchar(10) NOT NULL,
claveRecomendacion varchar(10) NOT NULL
);




ALTER TABLE Usuario
ADD CONSTRAINT PK_cor_usu
PRIMARY KEY (correo);

ALTER TABLE AsignacionSubCriterio
ADD CONSTRAINT PK_claco_ascr
PRIMARY KEY (claveSubCriterio, correo);

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







ALTER TABLE AsignacionSubCriterio
ADD CONSTRAINT FK_asCri_Usuario
FOREIGN KEY(correo)
REFERENCES Usuario(correo);

ALTER TABLE AsignacionSubCriterio
ADD CONSTRAINT FK_asCri_Criterio
FOREIGN KEY(claveSubCriterio)
REFERENCES SubCriterio(claveSubCriterio);



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









ALTER TABLE CriteriosSubCriterio
ADD CONSTRAINT FK_subcriCat_Criterio
FOREIGN KEY(claveCriterio)
REFERENCES Criterio(claveCriterio);

ALTER TABLE CriteriosSubCriterio
ADD CONSTRAINT FK_subcriCat_SubCriterio
FOREIGN KEY(claveSubCriterio)
REFERENCES SubCriterio(claveSubCriterio);

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