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


UPDATE `subcriterio` SET `nombre` = 'Debe existir un balance adecuado entre profesores con grados académicos de la institución y de otras instituciones.' WHERE `subcriterio`.`claveSubCriterio` = '1.5.8';
UPDATE `subcriterio` SET `nombre` = 'Al menos un 50% de la planta docente de tiempo completo debe estar vinculado a un proyecto de investigación o desarrollo tecnológico en el área, o con un proyecto del área del programa educativo para el sector productivo y/ o de servicios.' WHERE `subcriterio`.`claveSubCriterio` = '1.6.2';
UPDATE `subcriterio` SET `nombre` = 'Debe existir un programa de estímulos o incentivos bien definido fundamentado en criterios académicos principalmente y de acuerdo con el desempeño docente.' WHERE `subcriterio`.`claveSubCriterio` = '1.7.4';
UPDATE `subcriterio` SET `nombre` = 'El nivel de salarios y prestaciones sociales del personal académico de tiempo completo, así como sus incrementos y promociones, debe ser tal que le permita una vida digna, y al mismo tiempo le haga atractiva su dedicación a la carrera académica. Asimismo, los honorarios de los profesores de tiempo parcial deben ser atractivos para este tipo de actividad.' WHERE `subcriterio`.`claveSubCriterio` = 'i';
UPDATE `subcriterio` SET `nombre` = 'El programa debe contar con al menos una estrategia, para que todos los docentes que participan en él conozcan la relación, importancia y enfoque de todas y cada una de las asignaturas que lo forman (currícula), a fin de poder dar la orientación adecuada a cada asignatura que imparten.' WHERE `subcriterio`.`claveSubCriterio` = 'iv';
UPDATE `subcriterio` SET `nombre` = 'Se requiere que los estudiantes que ingresan al programa académico cumplan con un mínimo de condiciones en cuanto a conocimientos, actitudes y habilidades, por lo que deben existir en forma explícita los criterios de selección que se emplean. Existencia de un perfil del aspirante a ingresar al programa. Estar establecido que los aspirantes presenten un examen de admisión institucional, que permita que sólo sean aceptados quienes cumplan con el mínimo de conocimientos y habilidades requeridas. De los puntos anteriores debe existir información escrita en forma de guía o manual para los aspirantes.' WHERE `subcriterio`.`claveSubCriterio` = '2.1.1';
UPDATE `subcriterio` SET `nombre` = 'Para poder comparar el contenido curricular de distintos programas, se hace referencia a Unidades de cada curso. Para efectos de equivalencia, una Unidad equivale a 1 hora de Teoría frente a grupo, o bien a 3 horas de Práctica frente a grupo para Licenciatura y para el caso de Técnico Superior Universitario, la equivalencia es 2 horas de práctica frente a grupo. El Comité reconoce que existen nuevos modelos pedagógicos donde los estudiantes realizan actividades de autoestudio; en estos casos, la institución que busca la acreditación deberá de justificar la equivalencia utilizada para el número de Unidades.' WHERE `subcriterio`.`claveSubCriterio` = '3.4.1';
UPDATE `subcriterio` SET `nombre` = 'Indique las materias optativas ofrecidas en los últimos tres años. Las unidades de la asignatura y las áreas deben considerarse en términos de la clasificación indicada en las respuestas 3.1 y 3.2' WHERE `subcriterio`.`claveSubCriterio` = '3.6.1';
UPDATE `subcriterio` SET `nombre` = 'Deben existir mecanismos para la promoción externa (visitas a planteles de nivel medio superior, trípticos, difusión en medios de comunicación masiva, etc.) del programa.' WHERE `subcriterio`.`claveSubCriterio` = '3.8.3';
UPDATE `subcriterio` SET `nombre` = 'Se debe contar con mecanismos de retroalimentación que permitan, a partir de las evaluaciones de los estudiantes, llevar a cabo acciones encaminadas a mejorar el proceso enseñanza-aprendizaje. Certificación de competencias bajo normas nacionales o internacionales según el perfil de TIC a evaluar (A, B, C o D).' WHERE `subcriterio`.`claveSubCriterio` = '4.1.5';
UPDATE `subcriterio` SET `nombre` = '¿Existe un mecanismo de medición sobre las competencias desarrolladas por los estudiantes al finalizar su trayectoria académica de acuerdo con su perfil de egreso? Certificación de competencias bajo normas nacionales o internacionales según el perfil de TIC a evaluar para Licenciatura y TSU reflejados en los modelos curriculares actualizados 2014 de ANIEI-CONAIC).' WHERE `subcriterio`.`claveSubCriterio` = '4.1.7';
UPDATE `subcriterio` SET `nombre` = '¿Opera un programa de orientación profesional que permita a los estudiantes por egresar, insertarse de manera adecuada en el mercado laboral (cursos y conferencias impartidos por expertos del mercado laboral)?' WHERE `subcriterio`.`claveSubCriterio` = '5.4.3';
UPDATE `subcriterio` SET `nombre` = '¿Se cuenta con mecanismos e instrumentos que permitan evaluar el Programa de Tutorías, así como su impacto?' WHERE `subcriterio`.`claveSubCriterio` = '6.1.3';
UPDATE `subcriterio` SET `nombre` = '¿El material didáctico o de aprendizaje de sus distintas asignaturas del programa académico considera contenidos altamente flexibles a los diferentes estilos de aprendizaje de los estudiantes, adecuados al nivel de estos (autosuficiente); es decir, considera un diseño integral y holístico para ser utilizado por el estudiante y favorecer su aprendizaje autónomo?' WHERE `subcriterio`.`claveSubCriterio` = '6.5.1';
UPDATE `subcriterio` SET `nombre` = '¿Cómo parte del modelo educativo, para el caso de los programas no presenciales o semipresenciales, realizan reuniones presenciales en distintas sedes para fortalecer la interacción -en un tiempo definido y un espacio físico- entre todos los miembros que forman parte de la comunidad de aprendizaje: estudiantes, profesores, facilitadores, tutores y personal administrativo, para compartir experiencias y ampliar horizontes de aprendizaje?' WHERE `subcriterio`.`claveSubCriterio` = '6.6.1';
UPDATE `subcriterio` SET `nombre` = '¿El programa cuenta con un mecanismo para el seguimiento de egresados que incluya encuestas a empleadores para conocer el desempeño laboral de los egresados en el campo laboral y encuestas a los propios egresados para conocer su opinión sobre el plan de estudios que cursaron; así como mecanismos para que los resultados de las encuestas se tomen en consideración para la reestructuración del plan de estudios?' WHERE `subcriterio`.`claveSubCriterio` = '7.2.1';
UPDATE `subcriterio` SET `nombre` = '¿Existen bases de datos actualizadas de los egresados del programa académico?' WHERE `subcriterio`.`claveSubCriterio` = '7.2.2';
UPDATE `subcriterio` SET `nombre` = '¿Qué medios brinda la Institución y a qué nivel (General, de la Dirección, de la jefatura, del programa, etc.) para la difusión de la cultura informática, como son: ¿Artículos, reportes de investigación, publicaciones periódicas, libros de texto, conferencias, exposiciones, etc.?' WHERE `subcriterio`.`claveSubCriterio` = '7.6.1';
UPDATE `subcriterio` SET `nombre` = 'Proporcionar los proyectos de investigación vinculados con el programa en las siguientes formas: \r\n- Tabla de Proyecto \r\n- Cronograma por trimestres \r\n- Relación de proyectos de investigación terminados en los últimos cinco años' WHERE `subcriterio`.`claveSubCriterio` = '8.4.1';