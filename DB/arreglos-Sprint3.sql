use conaic;

DROP TABLE subcriteriosrecomendaciones;
DROP TABLE criteriosrecomendaciones;

DROP TABLE Recomendaciones;

CREATE TABLE Recomendaciones(
claveRecomendacion varchar(10) NOT NULL,
descripcion text,
respuesta text,
fechaInicio date,
fechaTermino date,
archivo TEXT
);

ALTER TABLE Recomendaciones
ADD CONSTRAINT FK_recs_subsc
FOREIGN KEY(claveRecomendacion)
REFERENCES SubCriterio(claveSubCriterio);