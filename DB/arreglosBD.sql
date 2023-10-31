UPDATE `subcriterio` SET `nombre` = 'Deben existir procedimientos que garanticen la calidad de los trabajos de titulación en el que participen las academias o algún grupo colegiado designado para tal fin y con participación externa.' WHERE `subcriterio`.`claveSubCriterio` = '2.5.3';

DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.7.4';

INSERT INTO `subcriterio` (`nombre`, `claveSubCriterio`) VALUES ('Debe existir un procedimiento permanente de evaluación curricular.', '3.7.4');

INSERT INTO `subcriterio` (`nombre`, `claveSubCriterio`) VALUES ('Deben existir mecanismos para la promoción externa (visitas a planteles de nivel medio superior,\r\ntrípticos, difusión en medios masivos de comunicación, etc.) del programa.', '3.8.3');

INSERT INTO `criteriossubcriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.7', '3.7.4'), ('3.8', '3.8.3');

DELETE FROM `criteriossubcriterio` WHERE `criteriossubcriterio`.`claveCriterio` = '3.6' AND `criteriossubcriterio`.`claveSubCriterio` = '3.6.2';
DELETE FROM `criteriossubcriterio` WHERE `criteriossubcriterio`.`claveCriterio` = '3.6' AND `criteriossubcriterio`.`claveSubCriterio` = '3.6.3';
DELETE FROM `criteriossubcriterio` WHERE `criteriossubcriterio`.`claveCriterio` = '3.6' AND `criteriossubcriterio`.`claveSubCriterio` = '3.6.4';

DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.6.2';
DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.6.3';
DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.6.4';

UPDATE `criterio` SET `nombre` = 'Flexibilidad Curricular' WHERE `criterio`.`claveCriterio` = '3.6';
UPDATE `criterio` SET `nombre` = 'Evaluación y actualización' WHERE `criterio`.`claveCriterio` = '3.7';
UPDATE `criterio` SET `nombre` = 'Difusión' WHERE `criterio`.`claveCriterio` = '3.8';

INSERT INTO `criterio` (`nombre`, `claveCriterio`) VALUES ('Justificación de las Competencias', '3.9');
INSERT INTO `criterioscategoria` (`claveCriterio`, `claveCategoria`) VALUES ('3.9', '3');

UPDATE `subcriterio` SET `nombre` = 'Indique las materias optativas ofrecidas en los últimos tres años.\r\nLas unidades de la asignatura y las áreas debe considerarse en términos de la clasificación indicada en las\r\nrespuestas 3.1 y 3.2' WHERE `subcriterio`.`claveSubCriterio` = '3.6.1';

DELETE FROM `criteriossubcriterio` WHERE `criteriossubcriterio`.`claveCriterio` = '3.7' AND `criteriossubcriterio`.`claveSubCriterio` = '3.7.1';
DELETE FROM `criteriossubcriterio` WHERE `criteriossubcriterio`.`claveCriterio` = '3.7' AND `criteriossubcriterio`.`claveSubCriterio` = '3.7.2';
DELETE FROM `criteriossubcriterio` WHERE `criteriossubcriterio`.`claveCriterio` = '3.7' AND `criteriossubcriterio`.`claveSubCriterio` = '3.7.3';

DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.7.1';
DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.7.2';
DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.7.3';

INSERT INTO `subcriterio` (`nombre`, `claveSubCriterio`) VALUES ('El plan de estudios debe ser revisado y actualizado en su caso, al menos cada cinco años', '3.7.1'), ('Debe existir un procedimiento oficial y funcional,  para la revisión y actualización del plan de\r\nestudios. \r\n', '3.7.2'), ('En los procesos de revisión y actualización deben participar los cuerpos colegiados, así como un grupo de asesores externos representantes del sector productivo, egresados en activo e  investigadores\r\nreconocidos', '3.7.3');
INSERT INTO `criteriossubcriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.7', '3.7.1'), ('3.7', '3.7.2'), ('3.7', '3.7.3');

DELETE FROM `criteriossubcriterio` WHERE `criteriossubcriterio`.`claveCriterio` = '3.8' AND `criteriossubcriterio`.`claveSubCriterio` = '3.8.1';
DELETE FROM `criteriossubcriterio` WHERE `criteriossubcriterio`.`claveCriterio` = '3.8' AND `criteriossubcriterio`.`claveSubCriterio` = '3.8.2';

DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.8.1';
DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '3.8.2';

INSERT INTO `subcriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Los programas actualizados de todas las asignaturas del plan de estudios están a disposición para\r\nsu consulta por parte de profesores, estudiantes y el público en general?', '3.8.1'), ('Indique cuáles de los siguientes aspectos se le da conocer al estudiante', '3.8.2');
INSERT INTO `criteriossubcriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.8', '3.8.1'), ('3.8', '3.8.2');

INSERT INTO `subcriterio` (`nombre`, `claveSubCriterio`) VALUES ('Tabla de cumplimiento de competencias transversales. Considerar la definición y justificación\r\ncompetencias iniciales, de desarrollo y de evaluación.  Rellenar tabla competencias transversales. Etapa\r\nde planificación del modelo de competencias.\r\n', '3.9.1'), ('Tabla de cumplimiento de competencias específicas. Considerar la definición y justificación\r\ncompetencias iniciales, de desarrollo y de evaluación. Rellenar tabla competencias específicas. Etapa de\r\nplanificación del modelo de competencias.\r\n', '3.9.2');
INSERT INTO `criteriossubcriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.9', '3.9.1'), ('3.9', '3.9.2');

ALTER TABLE `subcriteriospdf` ADD `nombrePDF` TEXT NOT NULL AFTER `clavePDF`;

UPDATE `criterio` SET `nombre` = 'Proceso de selección ' WHERE `criterio`.`claveCriterio` = '2.1';
UPDATE `criterio` SET `nombre` = 'Plataforma tecnológica y de aprendizaje\r\n\r\n' WHERE `criterio`.`claveCriterio` = '6.4';
UPDATE `criterio` SET `nombre` = 'Material y recursos de aprendizaje utilizando tecnología educativa\r\n\r\n' WHERE `criterio`.`claveCriterio` = '6.5';
UPDATE `criterio` SET `nombre` = 'Integración de los actores del aprendizaje' WHERE `criterio`.`claveCriterio` = '6.6';

DELETE FROM criteriossubcriterio WHERE `criteriossubcriterio`.`claveCriterio` = '2.3' AND `criteriossubcriterio`.`claveSubCriterio` = '2.3.4';
DELETE FROM `subcriterio` WHERE `subcriterio`.`claveSubCriterio` = '2.3.4';