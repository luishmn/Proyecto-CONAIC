use conaic;

DROP TABLE subcriteriosrecomendaciones;
DROP TABLE criteriosrecomendaciones;
ALTER TABLE `Recomendaciones` ADD `archivo` TEXT AFTER `claveRecomendacion`;


ALTER TABLE Recomendaciones
ADD CONSTRAINT FK_recs_subsc
FOREIGN KEY(claveRecomendacion)
REFERENCES SubCriterio(claveSubCriterio);



---------------------------------
DROP TABLE recomendaciones;

CREATE TABLE recomendaciones (
    claveRecomendacion varchar(10) PRIMARY KEY,
    descripcion TEXT, 
    respuesta TEXT, 
    fechaInicio DATE,
    fechaTermino DATE,
    archivo text 
);

ALTER TABLE Recomendaciones
ADD CONSTRAINT FK_recs_subsc
FOREIGN KEY(claveRecomendacion)
REFERENCES SubCriterio(claveSubCriterio);