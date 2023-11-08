DROP TABLE subcriteriosrecomendaciones;
DROP TABLE criteriosrecomendaciones;
ALTER TABLE `Recomendaciones` ADD `archivo` TEXT AFTER `claveRecomendacion`;


ALTER TABLE Recomendaciones
ADD CONSTRAINT FK_recs_subsc
FOREIGN KEY(claveRecomendacion)
REFERENCES SubCriterio(claveSubCriterio);