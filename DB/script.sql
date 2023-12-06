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
claveCategoria integer NOT NULL
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
claveCategoria integer NOT NULL
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
clavePDF text NOT NULL,
id integer AUTO_INCREMENT PRIMARY KEY
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

INSERT INTO `usuario` (`nombre`, `apellidoPat`, `apellidoMat`, `cargo`, `contrasena`, `correo`, `tipo`, `confirmacion`) VALUES ('Admin', 'Admin', NULL, 'Administrador del sistema ', '12345678', 'admin@admin.com', '1', '0');

INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Personal Académico', '1');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Reclutamiento', '1.1'), ('Selección', '1.2'), ('Contratación', '1.3'), ('Desarrollo', '1.4'), ('Categorización y nivel de estudios', '1.5'), ('Distribución de la carga académica de los PTC.', '1.6'), ('Evaluación.', '1.7'), ('Promoción', '1.8'), ('Movilidad internacional de profesores.', '1.9'), ('Criterios específicos del personal académico de programas en TIC.', 'A');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('1.1', '1'), ('1.2', '1'), ('1.3', '1'), ('1.4', '1'), ('1.5', '1'), ('1.6', '1'), ('1.7', '1'), ('1.8', '1'), ('1.9', '1'), ('A', '1');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Existe un proceso formal de reclutamiento del personal académico?', '1.1.1'), ('¿Existe un proceso formal de ingreso del personal académico?', '1.2.1'), ('¿Existe un proceso formal de contratación del personal académico?', '1.3.1'), ('¿Existe un plan permanente de superación académica para el personal académico de tiempo completo que esté aprobado por la máxima autoridad personal o colegiada de la institución?', '1.4.1'), ('Contar con un plan de actualización / capacitación que permita la rápida respuesta a temas emergentes en el área, así como mantener al personal académico actualizado.', '1.4.2'), ('Deben existir planes permanentes de formación docente.', '1.4.3'), ('Estimar el porcentaje de profesores que integran la planta docente que tienen un perfil académico que corresponde al área de conocimiento a la que están asignados.', '1.5.1'), ('El programa debe tener claramente especificado el grupo de profesores que participen en él, su tiempo de dedicación y dispondrá de un currículum actualizado de cada uno de ellos, donde se señalen los aspectos sobresalientes en cuanto a grados académicos obtenidos, experiencia profesional y docente, publicaciones, pertenencia a sociedades científicas y/ o profesionales, premios y distinciones, etc.', '1.5.2'), ('Como mínimo, 50% del total de horas de clase deberá ser impartido por profesores de tiempo completo. No es permisible, para efectos de acreditación, que el titular de una materia envíe a ayudantes a impartir sus clases.', '1.5.3'), ('El 50% de las materias de la especialidad del programa educativo, deben ser impartidas por profesores con maestría, doctorado, o mínimo licenciatura y cinco años de experiencia profesional comprobables y que estén actualizados en el área.', '1.5.4'), ('Al menos el 60% del total de profesores de tiempo completo debe tener estudios de posgrado o el equivalente de desarrollo y prestigio profesional en el área de su especialidad', '1.5.5'), ('Al menos el 30% del total de profesores que no sean de tiempo completo debe tener estudios de posgrado o el equivalente de desarrollo y prestigio profesional en el área de su especialidad.', '1.5.6'), ('Debe existir un balance adecuado entre profesores recién contratados y profesores con experiencia docente.', '1.5.7'), ('Debe existir un *balance adecuado entre profesores con grados académicos de la institución y de otras instituciones.', '1.5.8'), ('¿Los profesores, facilitadores, tutores y asesores cuentan con experiencia en educación a distancia o virtual o en línea y cuentan con conocimiento y manejo de plataformas tecnológicas?', '1.5.9'), ('Indicar el número de horas frente a grupo de cada uno de los profesores adscritos al programa, (Tomando en consideración la definición de Profesores adscritos al programa en el criterio 1.5.2) y una estimación del tiempo que dedican a las actividades señaladas.', '1.6.1'), ('Al menos un 50% de la planta docente de tiempo completo debe estar vinculado a un proyecto de investigación o desarrollo tecnológico en el área, o con un proyecto del área del programa educativo para el sector productivo y/ o de servicios4', '1.6.2'), ('¿Los estudiantes realizan evaluaciones?', '1.7.1'), ('Contar con un procedimiento reglamentado para evaluar la actividad docente y de investigación del personal académico con fines de permanencia y promoción. Esta evaluación debe ser realizada por una comisión académica previamente establecida', '1.7.2'), ('Las evaluaciones al personal docente deberán realizarse en forma periódica, al menos una vez por período escolar, y sus resultados deberán ser proporcionados al profesor junto con recomendaciones que deberán generar un plan de mejora.', '1.7.3'), ('Debe existir un programa de estímulos o incentivos bien definido fundamentado en criterios académicos principalmente y de acuerdo al desempeño docente.', '1.7.4'), ('Indicar las movilidades en envío y recepción de los profesores en los últimos cinco años.', '1.9.1'), ('Indicar los productos y resultados obtenidos de estas movilidades en envío y recepción de los profesores en los últimos cinco años.', '1.9.2'), ('El nivel de salarios y prestaciones sociales del personal académico de tiempo completo, así como sus incrementos y promociones, debe ser tal que le permita una vida digna, y al mismo tiempo le haga atractiva su dedicación a la carrera académica. Asimismo, los honorarios de los profesores de tiempo parcial deben ser atractivos para este tipo de actividad.', 'i'), ('Para promover la vinculación del personal académico del programa con el sector productivo, deben existir procedimientos que la reglamenten, así como los ingresos y estímulos externos que los profesores puedan obtener como consecuencia de la relación.', 'ii'), ('Los profesores de tiempo completo del programa deben producir material didáctico, de divulgación y/ o libros de texto.', 'iii'), ('El programa debe contar con al menos una estrategia, para que todos los docentes que participan en él conozcan la relación, importancia y enfoque de todas y cada una de las asignaturas que lo forman (currícula), a fin de poder dar la orientación adecuada a cada asignatura que imparten.', 'iv'), ('El programa debe contar con al menos una estrategia, para promover que todos los docentes que se forman en posgrado, tenga relación con las necesidades del programa educativo, desarrollo de cuerpos académicos y líneas de investigación, de manera que se resuelvan las brechas académicas del programa.', 'v');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('1.1', '1.1.1'), ('1.2', '1.2.1'), ('1.3', '1.3.1'), ('1.4', '1.4.1'), ('1.4', '1.4.2'), ('1.4', '1.4.3'), ('1.5', '1.5.1'), ('1.5', '1.5.2'), ('1.5', '1.5.3'), ('1.5', '1.5.4'), ('1.5', '1.5.5'), ('1.5', '1.5.6'), ('1.5', '1.5.7'), ('1.5', '1.5.8'), ('1.5', '1.5.9'), ('1.6', '1.6.1'), ('1.6', '1.6.2'), ('1.7', '1.7.1'), ('1.7', '1.7.2'), ('1.7', '1.7.3'), ('1.7', '1.7.4'), ('1.9', '1.9.1'), ('1.9', '1.9.2'), ('A', 'i'), ('A', 'ii'), ('A', 'iii'), ('A', 'iv'), ('A', 'v');




INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Estudiantes', '2');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Selección ', '2.1'), ('Ingreso (estudiantes de nuevo ingreso).  ', '2.2'), ('Trayectoria Escolar. ', '2.3'), ('Tamaño de los grupos. ', '2.4'), ('Titulación', '2.5'), ('Índices de rendimiento escolar por cohorte generacional', '2.6'), ('Movilidad internacional de estudiantes.', '2.7');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('2.1', '2'), ('2.2', '2'), ('2.3', '2'), ('2.4', '2'), ('2.5', '2'), ('2.6', '2'), ('2.7', '2');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Se requiere que los estudiantes que ingresan al programa académico cumpla con un mínimo de condiciones en cuanto a conocimientos, actitudes y habilidades, por lo que deben existir en forma explícita los criterios de selección que se emplean.                   \r\n\r\nExistencia de un perfil del aspirante a ingresar al programa.\r\n\r\nEstar establecido que los aspirantes presenten un examen de admisión institucional, que permita que sólo sean aceptados quienes cumplan con el mínimo de conocimientos y habilidades requeridas.\r\nDe los puntos anteriores debe existir información escrita en forma de guía o manual para los aspirantes.\r\n', '2.1.1'), ('¿Se toman en cuenta los resultados del examen nacional previo a la licenciatura?', '2.2.1'), ('¿Se tiene en cuenta el rendimiento académico en el nivel precedente para canalizar a los estudiantes a programas de apoyo?', '2.2.2'), ('¿Se efectúan entrevistas y/ o encuestas a los estudiantes de nuevo ingreso?', '2.2.3'), ('¿Se aplica un instrumento para obtener datos socioeconómicos de los estudiantes de nuevo ingreso?', '2.2.4'), ('¿Se efectúan análisis e investigación educativa a partir de los resultados de las características de los estudiantes de nuevo ingreso, para implementar programas de apoyo?', '2.2.5'), ('¿Existe un programa de inducción para estudiantes de nuevo ingreso?', '2.2.6'), ('¿En particular, los estudiantes reciben la inducción necesaria para el manejo del entorno de aprendizaje cuando se utilizan contenidos de los cursos del plan de estudios, con apoyo de plataformas de aprendizaje?', '2.2.7'), ('¿El programa educativo cuenta con estudios que evidencien que los estudiantes tienen el perfil requerido para estudiar de manera autónoma, que destaque la responsabilidad, habilidades de investigación y el ser autodidácticas?', '2.2.8'), ('¿Existe un plan de seguimiento y desempeño de la estancia de los estudiantes en el programa de estudios?', '2.3.1'), ('¿El estudiante recibe retroalimentación para mejorar su estancia en el programa de estudios?', '2.3.2'), ('¿Existe una tendencia clara de disminución de los índices de reprobación?', '2.3.3'), ('¿Existe una tendencia clara de disminución de los índices de deserción?', '2.3.4'), ('Debe existir uno o varios reglamentos de estudiantes, que consideren los siguientes aspectos: Mecanismos de acreditación y evaluación de materias,\r\nDerechos y obligaciones del estudiante, Mecanismos de Titulación.\r\n', '2.5.1'), ('La institución debe tener reglamentadas las opciones de titulación, tanto en requisitos como en procedimiento.', '2.5.2'), ('La institución debe tener reglamentadas las opciones de titulación, tanto en requisitos como en procedimiento.', '2.5.3'), ('El puntaje obtenido en la prueba TOEFL o equivalente sea de por lo menos 500 puntos o equivalente en otros medios de evaluación formal como requisito de titulación.', '2.5.4'), ('Indicar las movilidades en envío y recepción de los estudiantes en los últimos cinco años.', '2.7.1'), ('Indicar los productos y resultados obtenidos de estas movilidades en envío y recepción de los estudiantes en los últimos cinco años.', '2.7.2');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('2.1', '2.1.1'), ('2.2', '2.2.1'), ('2.2', '2.2.2'), ('2.2', '2.2.3'), ('2.2', '2.2.4'), ('2.2', '2.2.5'), ('2.2', '2.2.6'), ('2.2', '2.2.7'), ('2.2', '2.2.8'), ('2.3', '2.3.1'), ('2.3', '2.3.2'), ('2.3', '2.3.3'), ('2.3', '2.3.4'), ('2.5', '2.5.1'), ('2.5', '2.5.2'), ('2.5', '2.5.3'), ('2.5', '2.5.4'), ('2.7', '2.7.1'), ('2.7', '2.7.2');



INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Plan de Estudios', '3');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Fundamentación', '3.1'), ('Perfiles de ingreso y egreso. ', '3.2'), ('Normativa para la permanencia, egreso y revalidación. ', '3.3'), ('Programas de asignaturas. ', '3.4'), ('Contenidos.', '3.5'), ('Evaluación y actualización. ', '3.6'), ('Difusión', '3.7'), ('Justificación de las Competencias. ', '3.8');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('3.1', '3'), ('3.2', '3'), ('3.3', '3'), ('3.4', '3'), ('3.5', '3'), ('3.6', '3'), ('3.7', '3'), ('3.8', '3');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Justificación del programa', '3.1.1'), ('Es importante que exista congruencia con la misión, visión y objetivos institucionales, los objetivos del plan nacional de desarrollo (vigente) y educativo del país, así como con el objetivo de la educación superior.', '3.1.2'), ('Debe existir una definición del objetivo general del programa y perfil del egresado.', '3.2.1'), ('Es importante que exista congruencia entre el perfil del egresado y el objetivo.', '3.2.2'), ('El objetivo debe ser congruente con los desarrollos presentes y futuros del área de conocimiento.', '3.2.3'), ('¿Existe la normativa que señale claramente los requisitos de permanencia, egreso, equivalencia y revalidación del programa académico y si se difunde entre la comunidad estudiantil?', '3.3.1'), ('Asignaturas del programa', '3.5.1'), ('En las asignaturas correspondientes a la especialidad están incluidos proyectos dirigidos a desarrollar la habilidad del estudiante para resolver problemas reales acordes a las necesidades tecnológicas del propio programa.', '3.5.2'), ('El plan de estudios debe considerar la elaboración de trabajo en equipo e interdisciplinario.', '3.5.3'), ('El plan de estudios debe ser revisado y actualizado en su caso, al menos cada cinco años.', '3.6.1'), ('Debe existir un procedimiento oficial y funcional,  para la revisión y actualización del plan de estudios. ', '3.6.2'), ('En los procesos de revisión y actualización deben participar los cuerpos colegiados, así como un grupo de asesores externos representantes del sector productivo, egresados en activo e  investigadores reconocidos. ', '3.6.3'), ('Debe existir un procedimiento permanente de evaluación curricular.', '3.6.4'), ('¿Los programas actualizados de todas las asignaturas del plan de estudios están a disposición para su consulta por parte de profesores, estudiantes y el público en general?', '3.7.1'), ('Indique cuáles de los siguientes aspectos se le da conocer al estudiante.', '3.7.2'), ('Deben existir mecanismos para la promoción externa (visitas a planteles de nivel medio superior, trípticos, difusión en medios masivos de comunicación, etc.) del programa', '3.7.3'), ('Tabla de cumplimiento de competencias transversales. Considerar la definición y justificación competencias iniciales, de desarrollo y de evaluación.  Rellenar tabla competencias transversales. Etapa de planificación del modelo de competencias', '3.8.1'), ('Tabla de cumplimiento de competencias específicas. Considerar la definición y justificación competencias iniciales, de desarrollo y de evaluación. Rellenar tabla competencias específicas. Etapa de planificación del modelo de competencias.', '3.8.2');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.1', '3.1.1'), ('3.1', '3.1.2'), ('3.2', '3.2.1'), ('3.2', '3.2.2'), ('3.2', '3.2.3'), ('3.3', '3.3.1'), ('3.5', '3.5.1'), ('3.5', '3.5.2'), ('3.5', '3.5.3'), ('3.6', '3.6.1'), ('3.6', '3.6.2'), ('3.6', '3.6.3'), ('3.6', '3.6.4'), ('3.7', '3.7.1'), ('3.7', '3.7.2'), ('3.7', '3.7.3'), ('3.8', '3.8.1'), ('3.8', '3.8.2');



INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Evaluación de Aprendizaje', '4');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Evaluación de atributos de egreso', '4.3'), ('Metodología de Evaluación continua', '4.1'), ('Estímulos al rendimiento académico. ', '4.2');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('4.1', '4'), ('4.2', '4'), ('4.3', '4');


INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Debe incluirse el uso de la computadora durante el proceso de enseñanza aprendizaje, en los cursos que por su naturaleza así lo requieran. ', '4.1.1'), ('Debe cubrirse al menos el 90% de los programas de las asignaturas del plan de estudio. ', '4.1.2'), ('Todo programa debe establecer que en varios cursos se incluyan, en parte o en la totalidad de su desarrollo, métodos de enseñanza diferentes a los tradicionales de exposición oral del profesor, tales como el uso de audiovisuales, multimedios, aulas interactivas, desarrollo de proyectos, prácticas de laboratorio, etc., así como otro tipo de actividades orientadas a mejorar el proceso enseñanza-aprendizaje.', '4.1.3'), ('La calidad en el desempeño del estudiante durante su permanencia en el programa debe evaluarse mediante la combinación de varios mecanismos, tales como exámenes, tareas, problemas para resolver, prácticas de laboratorio, trabajos e informes, y debe considerar sus habilidades en aspectos como: comunicación oral y escrita, administración de proyectos, ética profesional y sustentabilidad.', '4.1.4'), ('Se debe contar con mecanismos de retroalimentación que permitan, a partir de las evaluaciones de los estudiantes, llevar a cabo acciones encaminadas a mejorar el proceso enseñanza-aprendizaje. Certificación de competencias bajo normas nacionales o internacionales según el perfil de TIC a evaluar (A,B, C o D).', '4.1.5'), ('Debe contarse con una estrategia de enseñanza y práctica de un idioma extranjero.', '4.1.6'), ('¿Existe un mecanismo de medición sobre las competencias desarrolladas por los          estudiantes al finalizar su trayectoria académica de acuerdo a su perfil de egreso? Certificación de competencias bajo normas nacionales o internacionales según el perfil de TIC a evaluar para Licenciatura y TSU reflejados en los modelos curriculares actualizados 2014 de ANIEI-CONAIC).', '4.1.7'), ('¿Hay programa de becas para estudiantes?', '4.2.1'), ('¿Se otorgan estímulos y/o reconocimiento al buen desempeño académico de los estudiantes?', '4.2.2'), ('¿El Programa Educativo cuenta con un método o conjunción de métodos que le permita asegurar la evaluación de atributos de egreso, que garanticen el logro de éstos en los egresados?', '4.3.1');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('4.1', '4.1.1'), ('4.1', '4.1.2'), ('4.1', '4.1.3'), ('4.1', '4.1.4'), ('4.1', '4.1.5'), ('4.1', '4.1.6'), ('4.1', '4.1.7'), ('4.2', '4.2.1'), ('4.2', '4.2.2'), ('4.3', '4.3.1');



INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Formación Integral', '5');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Enlace escuela – familia. ', '5.7'), ('Desarrollo de emprendedores', '5.1'), ('Actividades culturales', '5.2'), ('Actividades deportivas', '5.3'), ('Orientación profesional. ', '5.4'), ('Orientación psicológica. ', '5.5'), ('Servicios médicos. ', '5.6');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('5.1', '5'), ('5.2', '5'), ('5.3', '5'), ('5.4', '5'), ('5.5', '5'), ('5.6', '5'), ('5.7', '5');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Existen estrategias que propicien una actitud emprendedora mediante la operación de programas de Desarrollo de Emprendedores, cursos, talleres, incubadoras de empresas o similares?  ', '5.1.1'), ('Haga una relación de las instalaciones para actividades culturales para el fomento de la vida académica, indicando a cuantos usuarios brindan simultáneamente en cada caso.', '5.2.1'), ('La institución debe contar un programa formal para el desarrollo de actividades culturales en las que participen estudiantes del programa educativo.', '5.2.2'), ('Haga una relación de las instalaciones para actividades deportivas para el fomento de la vida académica, indicando a cuantos usuarios brindan simultáneamente en cada caso.', '5.3.1'), ('La institución debe contar un programa formal para el desarrollo de actividades  deportivas en la que participen estudiantes del programa educativo.', '5.3.2'), ('¿Se contemplan programas específicos en que los profesores y los estudiantes desarrollen proyectos de desarrollo tecnológico en informática y computación?', '5.4.1'), ('¿Para la orientación profesional se realizan eventos académico-científicos (seminarios, congresos, foros, conferencias y cursos co-curriculares, entre otros)  que apoyan el currículo del programa académico?  ', '5.4.2'), ('¿Opera un programa de orientación profesional que permita a los estudiantes por egresar, insertarse de manera adecuada en el mercado laboral (cursos y conferencias impartidos por expertos del mercado laboral).', '5.4.3'), ('¿Existe un programa Institucional de Orientación Psicológica para prevención de actitudes de riesgo (adicciones, contra la violencia, educación sexual, entre otros aspectos) o bien para apoyar a los estudiantes cuando soliciten asesoría psicológica?', '5.5.1'), ('¿Existe un programa Institucional de Orientación vocacional y de orientación psicopedagógica?   ', '5.5.2'), ('¿Existe  comunicación con los padres de familia? ', '5.7.1');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('5.1', '5.1.1'), ('5.2', '5.2.1'), ('5.2', '5.2.2'), ('5.3', '5.3.1'), ('5.3', '5.3.2'), ('5.4', '5.4.1'), ('5.4', '5.4.2'), ('5.4', '5.4.3'), ('5.5', '5.5.1'), ('5.5', '5.5.2'), ('5.7', '5.7.1');



INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Servicio de Apoyo al Aprendizaje', '6');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Tutorías.', '6.1'), ('Asesorías académicas.', '6.2'), ('Bibliotecas – Acceso a la Información.', '6.3'), ('PLATAFORMA TECNOLÓGICA Y DE APRENDIZAJE\r\n\r\n', '6.4'), ('MATERIAL Y RECURSOS DE APRENDIZAJE UTILIZANDO  TECNOLOGÍA EDUCATIVA\r\n\r\n', '6.5'), ('INTEGRACIÓN DE LOS ACTORES DEL APRENDIZAJE', '6.6');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('6.1', '6'), ('6.2', '6'), ('6.3', '6'), ('6.4', '6'), ('6.5', '6'), ('6.6', '6');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Las tutorías a los estudiantes se ofrecen de manera constante y organizada?', '6.1.1'), ('En el caso de que se ofrezca este servicio y de que se lleve un registro, proporcionar la información sobre el número de estudiantes atendidos en los tres últimos períodos escolares y el tiempo total del profesorado dedicado a esta actividad', '6.1.2'), ('¿Se cuenta con mecanismos e instrumentos que permitan evaluar el Programa de Tutorías así como  su impacto?', '6.1.3'), ('Los profesores del programa proporcionan permanentemente asesorías académicas a los estudiantes', '6.2.1'), ('¿Se cuenta con mecanismos e instrumentos que permitan evaluar el Programa de asesorías, así como  su impacto para la disminución de los índices de reprobación?', '6.2.2'), ('¿Las instalaciones de la biblioteca en que se apoya el programa se encuentran en la zona donde la población estudiantil realiza sus actividades académicas o la biblioteca virtual garantiza el acceso de la población estudiantil del programa para sus actividades académicas?', '6.3.1'), ('La institución debe elegir y cumplir las normas estándares, para el establecimiento y funcionamiento de las bibliotecas de carácter general y específicas que den servicio al programa.', '6.3.2'), ('La biblioteca debe contar con títulos de los textos de referencia usados en las asignaturas del programa, para al menos el  10% de los estudiantes inscritos en éstas, cuando es en formato físico y en digital para el 100%.', '6.3.3'), ('Se debe contar con infraestructura para acceso a acervos digitales por medio de Internet. ', '6.3.4'), ('La biblioteca deberá poder proporcionar el acceso a publicaciones y revistas periódicas relevantes en el área de informática y computación. ', '6.3.5'), ('La biblioteca debe contar con colecciones de obras de consulta  que incluyan manuales técnicos, enciclopedias generales y especiales, diccionarios, estadísticas, etcétera; que apoyen al programa.', '6.3.6'), ('El acervo bibliográfico y las suscripciones a las revistas deberán estar sujetos a renovación  permanente.', '6.3.7'), ('Se debe contar con medios electrónicos que permitan  la consulta automatizada del acervo bibliográfico.', '6.3.8'), ('Se deben llevar registros y estadísticas actualizados de los servicios prestados, entre ellos el número de usuarios y el tipo de servicio que prestan. Esta información debe procesarse de manera automatizada', '6.3.9'), ('El personal académico debe participar en el proceso de selección de material bibliográfico.', '6.3.10'), ('Debe existir un mecanismo eficiente de adquisición de material bibliográfico que satisfaga las necesidades del programa.', '6.3.11'), ('Mencione el tipo o los tipos de plataforma tecnológica que utiliza para la administración de contenidos de su programa educativo', '6.4.1'), ('Seleccione de la lista de abajo, las características que posee su entorno de aprendizaje que utiliza para su programa educativo', '6.4.2'), ('Describa brevemente los requerimientos técnicos necesarios de la plataforma tecnológica, tales como ancho de banda, tipo y capacidad del servidor, sistema operativo y software necesario para diseño instruccional y elaboración de contenidos o materiales multimedia, etc.', '6.4.3'), ('¿El material didáctico o de aprendizaje de sus distintas asignaturas del programa académico considera contenidos altamente flexibles a los diferentes estilos de aprendizaje de los estudiantes, adecuados al nivel de los mismos (autosuficiente); es decir, considera un diseño integral y holístico para ser utilizado por el estudiante y favorecer su aprendizaje autónomo?  ', '6.5.1'), ('La organización o estructura didáctica del material de aprendizaje incluye algunos o todos los elementos siguientes', '6.5.2'), ('Utiliza alguna metodología o herramienta para la evaluación de contenido y temáticas del curso incluidos en su material didáctico que evalúe al menos los siguientes aspectos: motivación en los estudiantes para su uso; actualidad de la información que presenta; vigencia temporal y espacial; calidad en la  presentación del contenido (en cuanto a redacción, ortografía, tipografía, diseño gráfico, color, originalidad; etc. Además de indicar quienes participan en la evaluación del material didáctico (expertos en contenido, pedagogos,  psicólogos educativos, técnicos en audio, video, e informáticos, diseñadores gráficos, comunicólogos, profesores, facilitadores, tutores o asesores y estudiantes)', '6.5.3'), ('Utiliza alguna metodología o herramienta que le permita evaluar el diseño, impacto, tiempo de producción, cobertura de estudiantes, facilidad de distribución, disponibilidad, interacción entre contenido, facilitadores del aprendizaje, estudiantes y entre estudiantes, otros medios, otros materiales didácticos, hipertextos, hipervínculo, hipermedia.', '6.5.4'), ('El material didáctico o de aprendizaje contempla aspectos técnicos tales como el diseño de interfaz, el tiempo de entrega o despliegue, música, sonido ambiental, voz, equipo, facilidad de uso, versatilidad, en general buen manejo e integralidad de multimedios. Así como la transmisión y recepción de señal.', '6.5.5'), ('¿Cómo parte del modelo educativo, realizan reuniones presenciales en distintas sedes para fortalecer la interacción -en un tiempo definido y un espacio físico- entre todos los miembros que forman parte de la comunidad de aprendizaje: estudiantes, profesores, facilitadores, tutores y personal administrativo, para compartir experiencias y ampliar horizontes de aprendizaje?.', '6.5.6'), ('¿Cómo parte del modelo educativo, para el caso de los programas no presenciales o semi-presenciales, realizan reuniones presenciales en distintas sedes para fortalecer la interacción -en un tiempo definido y un espacio físico- entre todos los miembros que forman parte de la comunidad de aprendizaje: estudiantes, profesores, facilitadores, tutores y personal administrativo, para compartir experiencias y ampliar horizontes de aprendizaje?', '6.6.1');


INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('6.1', '6.1.1'), ('6.1', '6.1.2'), ('6.1', '6.1.3'), ('6.2', '6.2.1'), ('6.2', '6.2.2'), ('6.3', '6.3.1'), ('6.3', '6.3.2'), ('6.3', '6.3.3'), ('6.3', '6.3.4'), ('6.3', '6.3.5'), ('6.3', '6.3.6'), ('6.3', '6.3.7'), ('6.3', '6.3.8'), ('6.3', '6.3.9'), ('6.3', '6.3.10'), ('6.3', '6.3.11'), ('6.4', '6.4.1'), ('6.4', '6.4.2'), ('6.4', '6.4.3'), ('6.5', '6.5.1'), ('6.5', '6.5.2'), ('6.5', '6.5.3'), ('6.5', '6.5.4'), ('6.5', '6.5.5'), ('6.5', '6.5.6'), ('6.6', '6.6.1');



INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Vinculación y Extensión', '7');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Vinculación con los sectores público, privado y social. ', '7.1'), ('Seguimiento de egresados', '7.2'), ('Intercambio académico ', '7.3'), ('Servicio social.  ', '7.4'), ('Bolsa de trabajo. ', '7.5'), ('Extensión. ', '7.6');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('7.1', '7'), ('7.2', '7'), ('7.3', '7'), ('7.4', '7'), ('7.5', '7'), ('7.6', '7');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Indique el tipo de seguimiento y la valoración de los resultados correspondientes.', '7.1.1'), ('Deben existir convenios de colaboración con entidades externas que apoyen a las funciones sustantivas del quehacer universitario y que tengan resultados tangibles.', '7.1.2'), ('¿Se tiene establecida una normativa para efectuar las prácticas y estadías profesionales, en el espacio de trabajo?', '7.1.3'), ('Existen programas de formación de estudiantes mediante becas otorgadas por las empresas para realizar actividades técnicas en proyectos específicos o bien para que sean capacitados en temas disciplinarios emergentes  propios de la disciplina del programa y/o tengan acceso a equipos especializados con tecnología de punta; elementos que facilitan su inserción en el mercado laboral.', '7.1.4'), ('Existen mecanismos e instrumentos para medir el alcance de la vinculación de la IES con el sector productivo.', '7.1.5'), ('¿El programa cuenta con un mecanismo para el seguimiento de egresados que incluya encuestas a empleadores para conocer el desempeño laboral de los egresados en el campo laboral y encuestas a los propios egresados para conocer su opinión sobre el plan de estudios que cursaron; así como mecanismos para que los resultados de las encuestas se tomen en consideración para la reestructuración del plan de estudios ?', '7.2.1'), ('¿Existen bases de datos actualizadas de los egresados del programa académico,?', '7.2.2'), ('¿Se efectúan encuestas periódicas a los egresados para  conocer su  situación laboral y el grado de satisfacción respecto a la pertinencia del  programa?', '7.2.3'), ('¿Existen estos convenios?', '7.3.1'), ('¿Cuáles son los impactos del intercambio académico en la mejora del programa educativo?', '7.3.2'), ('¿El programa lleva un control del servicio social de los estudiantes?', '7.4.1'), ('¿El programa cuenta con una bolsa de trabajo?', '7.5.1'), ('¿Qué medios brinda la Institución y a qué nivel (General, de la Dirección, de la jefatura, del programa, etc.) para la difusión de la cultura informática, como son: Artículos, reportes de investigación, publicaciones periódicas, libros de texto, conferencias, exposiciones, etc?', '7.6.1'), ('Deben existir programas de capacitación para diferentes sectores.', '7.6.2'), ('El programa debe considerar la existencia de actividades para la actualización profesional tales como cursos de educación continua, diplomados, conferencias, congresos, seminarios, etc.', '7.6.3'), ('El programa debe contar con un servicio externo (asesorías, consultorías) a               empresas e instituciones del sector público, que permitan obtener recursos               económicos adicionales.', '7.6.4'), ('¿Opera un servicio institucional de capacitación en materia de lenguas extranjeras?', '7.6.5');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('7.1', '7.1.1'), ('7.1', '7.1.2'), ('7.1', '7.1.3'), ('7.1', '7.1.4'), ('7.1', '7.1.5'), ('7.2', '7.2.1'), ('7.2', '7.2.2'), ('7.2', '7.2.3'), ('7.3', '7.3.1'), ('7.3', '7.3.2'), ('7.4', '7.4.1'), ('7.5', '7.5.1'), ('7.6', '7.6.1'), ('7.6', '7.6.2'), ('7.6', '7.6.3'), ('7.6', '7.6.4'), ('7.6', '7.6.5');



INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Investigación', '8');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Líneas y proyectos de investigación. ', '8.1'), ('Recursos para la investigación', '8.2'), ('Difusión de la investigación.', '8.3'), ('Impacto de la investigación', '8.4');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('8.1', '8'), ('8.2', '8'), ('8.3', '8'), ('8.4', '8');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Existe una política institucional que fije claramente las líneas de investigación con su respectiva normatividad?  ', '8.1.1'), ('Líneas de investigación definidas, las cuales agrupen proyectos con un responsable asignado.', '8.1.2'), ('Líderes vinculados a las líneas de investigación que posean los grados académicos pertinentes.', '8.1.3'), ('¿Se asignan recursos presupuestales para la investigación y/o desarrollo?', '8.2.1'), ('Es recomendable que la institución cuente con un programa de vinculación con el sector productivo o de servicios e investigación con las siguientes características: Un grupo de personal académico de carrera, integrado para desarrollar actividades de vinculación e investigación, constituido por un mínimo de dos personas con posgrado en el área de la especialidad del programa, preferentemente con el grado de doctor, y al menos tres profesores, profesionistas o estudiantes.', '8.2.2'), ('Normatividad expresa y aprobada para el desarrollo de la investigación.', '8.2.3'), ('Personal de apoyo suficiente (técnicos de investigación, profesores titulares, profesores asociados, etc.), en función del tamaño e importancia de cada proyecto.', '8.2.4'), ('Difusión de la investigación. Deben existir mecanismos de difusión de la investigación generada  del área académica del programa educativo.', '8.3.1'), ('- Proporcionar los proyectos de investigación vinculados con el programa en las siguientes formas:\r\n- Tabla de Proyecto\r\n- Cronograma por trimestres\r\n- Relación de proyectos de investigación terminados en los últimos cinco años\r\n', '8.4.1'), ('Mecanismos para la incorporación a la práctica docente de los resultados de investigación, que representen innovación en materia educativa.', '8.4.2');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('8.1', '8.1.1'), ('8.1', '8.1.2'), ('8.1', '8.1.3'), ('8.2', '8.2.1'), ('8.2', '8.2.2'), ('8.2', '8.2.3'), ('8.2', '8.2.4'), ('8.3', '8.3.1'), ('8.4', '8.4.1'), ('8.4', '8.4.2');



INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Infraestructura y Equipamiento', '9');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Infraestructura', '9.1'), ('Equipamiento', '9.2');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('9.1', '9'), ('9.2', '9');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Mencionar las condiciones de trabajo, seguridad e higiene de los servicios de cómputo, (dimensión de áreas de trabajo, ventilación, iluminación, aire acondicionado, extinguidores, salidas de emergencia, depósitos, etc.).', '9.1.1'), ('Exceptuando a los programas que correspondan al perfil de Licenciado en Informática, todos los programas deberán disponer de al menos un laboratorio de electrónica acondicionado que los soporte.', '9.1.2'), ('El programa debe disponer de los servicios de cómputo necesarios para cursos y actividades especializadas, relacionadas con el mismo.', '9.1.3'), ('Los responsables de los servicios de cómputo deben ser personal con experiencia y perfil relacionado con el área.', '9.1.4'), ('El diseño, equipamiento y operación de los servicios de cómputo debe tomar en cuenta la opinión de los profesores que  participan en el programa.', '9.1.5'), ('Las aulas deben ser funcionales, disponer de espacio suficiente para cada estudiante y tener las condiciones adecuadas de higiene, seguridad, iluminación, ventilación, temperatura, aislamiento del ruido y mobiliario.', '9.1.6'), ('El número de aulas habrá de ser suficiente para atender la impartición de cursos que se programen en cada periodo escolar.', '9.1.7'), ('El programa debe disponer de al menos una aula con equipo de cómputo y audiovisual permanentemente instalado que podrá ser utilizada para cursos normales y especializados.', '9.1.8'), ('Los profesores de tiempo completo, tres cuartos y medio tiempo deben contar con cubículos. El resto de los profesores deben contar con lugares adecuados para su trabajo.', '9.1.9'), ('Deben existir espacios para asesorías a estudiantes.', '9.1.10'), ('El programa debe disponer de auditorios y/o salas debidamente acondicionados para actividades académicas, investigación, y de preservación y difusión de la cultura.', '9.1.11'), ('En los espacios mencionados en el criterio anterior, se debe tener un lugar cómodo por cada diez estudiantes inscritos en el programa, ofreciendo las condiciones adecuadas de higiene y seguridad.', '9.1.12'), ('Las facilidades sanitarias para los estudiantes y profesores del programa deben ser adecuadas.', '9.1.13'), ('Para cada asignatura mencionar el software que se utiliza y si está disponible dentro de la institución.', '9.2.1'), ('Todo programa debe contar como mínimo con el siguiente software: Lenguajes de programación, herramientas CASE, manejadores de base de datos y paquetería en general.', '9.2.2'), ('El programa debe tener a su disposición dentro de la institución, el equipo de cómputo indispensable para las prácticas de las materias que lo requieran.', '9.2.3'), ('Se  debe contar con un número suficiente de computadoras que estén disponibles y accesibles para los estudiantes del programa en función el número de horas de infraestructura de cómputo requeridas por el Plan de Estudios.', '9.2.4'), ('Se debe contar con al menos tres plataformas de cómputo diferentes que estén disponibles y accesibles para los estudiantes y el personal docente del programa.', '9.2.5'), ('Se debe contar con capacidades de impresión adecuadas para los estudiantes y profesores del programa.', '9.2.6'), ('Debe contarse con al menos una red de área local y una amplia, con  software adecuado para las aplicaciones más comunes del programa.', '9.2.7'), ('Deberá haber facilidades de acceso al uso del equipo y manuales, horarios amplios y flexibles para atender la demanda, así como personal capacitado de soporte.  El equipo deberá contar con buen mantenimiento y planes de adecuación a cambios tecnológicos', '9.2.8'), ('Los Servicios de Cómputo deben ser funcionales y contar con un programa de mantenimiento adecuado.', '9.2.9'), ('Los Servicios de Cómputo deben contar con reglamentos que garanticen su buen funcionamiento y que estén a disponibilidad de los usuarios.', '9.2.10'), ('Los profesores del programa deben contar con equipo de cómputo que les permita desempeñar adecuadamente su función. En el caso de los profesores de tiempo completo, estos deberán contar con una computadora para su uso exclusivo', '9.2.11'), ('Los Servicios de Cómputo deben contar con el soporte técnico adecuado.', '9.2.12'), ('Es necesario que existan registros y estadísticas referentes al uso del equipo de cómputo, para determinar índices de utilización e indicadores sobre la calidad del servicio.', '9.2.13'), ('Específicamente, el personal técnico, es suficiente y cuenta con el perfil adecuado para dar soporte, no solo a la infraestructura de telecomunicaciones y redes, sino también para el desarrollo de aplicaciones, incorporación de tecnologías emergentes, administración y hospedaje, desarrollo web, minería de datos, soluciones inteligentes, reingeniería de procesos mediante el uso de las TIC y la administración de la propia plataforma tecnológica y de aprendizaje que soporta el modelo educativo, ya sea a distancia o presencial.', '9.2.14');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('9.1', '9.1.1'), ('9.1', '9.1.2'), ('9.1', '9.1.3'), ('9.1', '9.1.4'), ('9.1', '9.1.5'), ('9.1', '9.1.6'), ('9.1', '9.1.7'), ('9.1', '9.1.8'), ('9.1', '9.1.9'), ('9.1', '9.1.10'), ('9.1', '9.1.11'), ('9.1', '9.1.12'), ('9.1', '9.1.13'), ('9.2', '9.2.1'), ('9.2', '9.2.2'), ('9.2', '9.2.3'), ('9.2', '9.2.4'), ('9.2', '9.2.5'), ('9.2', '9.2.6'), ('9.2', '9.2.7'), ('9.2', '9.2.8'), ('9.2', '9.2.9'), ('9.2', '9.2.10'), ('9.2', '9.2.11'), ('9.2', '9.2.12'), ('9.2', '9.2.13'), ('9.2', '9.2.14');



INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Gestión Administrativa y Financiamiento', '10');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Planeación, evaluación y organización. ', '10.1'), ('Recursos humanos administrativos, de apoyo y de servicio', '10.2'), ('Recursos financieros. Deben existir criterios claramente establecidos para la determinación de gastos de mantenimiento y operación de laboratorios, talleres y demás infraestructura.', '10.3');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('10.1', '10'), ('10.2', '10'), ('10.3', '10');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Se cuenta con un Programa de Desarrollo Institucional (PDI) y con programas a mediano y corto plazo derivados del PDI)?  ', '10.1.1'), ('La planeación del programa debe ser realizada por el personal académico.', '10.1.2'), ('¿Se efectúan sistemáticamente evaluaciones integrales para conocer el grado de cumplimiento de las metas de los programas a largo, mediano y corto plazo que permitan la toma de decisiones?', '10.1.3'), ('¿La institución tiene establecida una normatividad clara y precisa que relacione las actividades administrativas con las académicas y se encuentra operacionalizada a través de reglamentos y manuales (de organización y procedimientos)?', '10.1.4');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Tiene establecida la Institución una normatividad que defina los requisitos para quienes ejercen funciones académico-administrativas?', '10.2.1'), ('Las actividades académicas no deben estar subordinadas a los procesos administrativos.', '10.2.2'), ('Cuando en la institución exista una política definida para la asignación del presupuesto, el programa debe hacer un análisis de ella y ver si es congruente con sus necesidades. En caso de que no lo sea, debe elaborar un modelo adecuado de sus necesidades que considere, entre otras cosas, salarios, mejorar al personal académico, gastos de operación, inversiones, compra de nuevos equipos y sustitución de los existentes, así como ampliaciones a la planta física.', '10.3.1'), ('El programa debe tener de manera explícita un plan presupuestal acorde con sus necesidades de operación y planes de desarrollo.', '10.3.2'), ('¿El programa cuenta con criterios claramente establecidos para la determinación de gastos de mantenimiento y operación de laboratorios y talleres?', '10.3.3'), ('El programa debe tener definidos claramente sus costos globales de operación, a través de los gastos en sueldos y salarios del personal que participe, así como sus gastos de operación y las inversiones para la compra de nuevos equipos y sustitución de éstos.', '10.3.4');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('10.1', '10.1.1'), ('10.1', '10.1.2'), ('10.1', '10.1.3'), ('10.1', '10.1.4'), ('10.2', '10.2.1'), ('10.2', '10.2.2'), ('10.3', '10.3.1'), ('10.3', '10.3.2'), ('10.3', '10.3.3'), ('10.3', '10.3.4');


INSERT INTO `Categoria` (`nombre`, `claveCategoria`) VALUES ('Anexos', '11');

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Anexo 1', 'anexo1'), ('Anexo 2', 'anexo2'), ('Anexo 3', 'anexo3');

INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('anexo1', '11'), ('anexo2', '11'), ('anexo3', '11');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Completar anexo 1', 'subanexo1'), ('Completar anexo 2', 'subanexo2'), ('Completar anexo 3', 'subanexo3');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('anexo1', 'subanexo1'), ('anexo2', 'subanexo2'), ('anexo3', 'subanexo3');


INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Existe un proceso formal para la promoción del personal académico?', '1.8.1');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Proporcionar el tamaño promedio de los grupos de los últimos dos años', '2.4.1');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Cuenta el programa con datos que permitan analizar el flujo de estudiantes en los diferentes períodos escolares y conocer índices de deserción por período?', '2.6.1');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Para poder comparar el contenido curricular de distintos programas, se hace referencia a Unidades de cada curso. Para efectos de equivalencia, una Unidad  equivale a 1 hora de Teoría frente a grupo, o bien a 3 horas de Práctica frente a grupo para Licenciatura y para el caso de Técnico Superior Universitario, la equivalencia es 2 horas de práctica frente a grupo.  El Comité reconoce que existen nuevos modelos pedagógicos donde los estudiantes realizan actividades de auto-estudio; en estos casos, la institución que busca la acreditación deberá de justificar la equivalencia utilizada para el número de Unidades.', '3.4.1');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('1.8', '1.8.1'), ('2.4', '2.4.1'), ('2.6', '2.6.1'), ('3.4', '3.4.1');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Existe un servicio médico o material para primeros auxilios?     ', '5.6.1');
INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('5.6', '5.6.1');

UPDATE `SubCriterio` SET `nombre` = 'Deben existir procedimientos que garanticen la calidad de los trabajos de titulación en el que participen las academias o algún grupo colegiado designado para tal fin y con participación externa.' WHERE `SubCriterio`.`claveSubCriterio` = '2.5.3';

DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.7.4';

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Debe existir un procedimiento permanente de evaluación curricular.', '3.7.4');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Deben existir mecanismos para la promoción externa (visitas a planteles de nivel medio superior,\r\ntrípticos, difusión en medios masivos de comunicación, etc.) del programa.', '3.8.3');

INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.7', '3.7.4'), ('3.8', '3.8.3');

DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '3.6' AND `CriteriosSubCriterio`.`claveSubCriterio` = '3.6.2';
DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '3.6' AND `CriteriosSubCriterio`.`claveSubCriterio` = '3.6.3';
DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '3.6' AND `CriteriosSubCriterio`.`claveSubCriterio` = '3.6.4';

DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.6.2';
DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.6.3';
DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.6.4';

UPDATE `Criterio` SET `nombre` = 'Flexibilidad Curricular' WHERE `Criterio`.`claveCriterio` = '3.6';
UPDATE `Criterio` SET `nombre` = 'Evaluación y actualización' WHERE `Criterio`.`claveCriterio` = '3.7';
UPDATE `Criterio` SET `nombre` = 'Difusión' WHERE `Criterio`.`claveCriterio` = '3.8';

INSERT INTO `Criterio` (`nombre`, `claveCriterio`) VALUES ('Justificación de las Competencias', '3.9');
INSERT INTO `CriteriosCategoria` (`claveCriterio`, `claveCategoria`) VALUES ('3.9', '3');

UPDATE `SubCriterio` SET `nombre` = 'Indique las materias optativas ofrecidas en los últimos tres años.\r\nLas unidades de la asignatura y las áreas debe considerarse en términos de la clasificación indicada en las\r\nrespuestas 3.1 y 3.2' WHERE `SubCriterio`.`claveSubCriterio` = '3.6.1';

DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '3.7' AND `CriteriosSubCriterio`.`claveSubCriterio` = '3.7.1';
DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '3.7' AND `CriteriosSubCriterio`.`claveSubCriterio` = '3.7.2';
DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '3.7' AND `CriteriosSubCriterio`.`claveSubCriterio` = '3.7.3';

DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.7.1';
DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.7.2';
DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.7.3';

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('El plan de estudios debe ser revisado y actualizado en su caso, al menos cada cinco años', '3.7.1'), ('Debe existir un procedimiento oficial y funcional,  para la revisión y actualización del plan de\r\nestudios. \r\n', '3.7.2'), ('En los procesos de revisión y actualización deben participar los cuerpos colegiados, así como un grupo de asesores externos representantes del sector productivo, egresados en activo e  investigadores\r\nreconocidos', '3.7.3');
INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.7', '3.7.1'), ('3.7', '3.7.2'), ('3.7', '3.7.3');

DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '3.8' AND `CriteriosSubCriterio`.`claveSubCriterio` = '3.8.1';
DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '3.8' AND `CriteriosSubCriterio`.`claveSubCriterio` = '3.8.2';

DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.8.1';
DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '3.8.2';

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('¿Los programas actualizados de todas las asignaturas del plan de estudios están a disposición para\r\nsu consulta por parte de profesores, estudiantes y el público en general?', '3.8.1'), ('Indique cuáles de los siguientes aspectos se le da conocer al estudiante', '3.8.2');
INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.8', '3.8.1'), ('3.8', '3.8.2');

INSERT INTO `SubCriterio` (`nombre`, `claveSubCriterio`) VALUES ('Tabla de cumplimiento de competencias transversales. Considerar la definición y justificación\r\ncompetencias iniciales, de desarrollo y de evaluación.  Rellenar tabla competencias transversales. Etapa\r\nde planificación del modelo de competencias.\r\n', '3.9.1'), ('Tabla de cumplimiento de competencias específicas. Considerar la definición y justificación\r\ncompetencias iniciales, de desarrollo y de evaluación. Rellenar tabla competencias específicas. Etapa de\r\nplanificación del modelo de competencias.\r\n', '3.9.2');
INSERT INTO `CriteriosSubCriterio` (`claveCriterio`, `claveSubCriterio`) VALUES ('3.9', '3.9.1'), ('3.9', '3.9.2');

ALTER TABLE `SubCriteriosPDF` ADD `nombrePDF` TEXT NOT NULL AFTER `clavePDF`;

UPDATE `Criterio` SET `nombre` = 'Proceso de selección ' WHERE `Criterio`.`claveCriterio` = '2.1';
UPDATE `Criterio` SET `nombre` = 'Plataforma tecnológica y de aprendizaje\r\n\r\n' WHERE `Criterio`.`claveCriterio` = '6.4';
UPDATE `Criterio` SET `nombre` = 'Material y recursos de aprendizaje utilizando tecnología educativa\r\n\r\n' WHERE `Criterio`.`claveCriterio` = '6.5';
UPDATE `Criterio` SET `nombre` = 'Integración de los actores del aprendizaje' WHERE `Criterio`.`claveCriterio` = '6.6';

DELETE FROM `CriteriosSubCriterio` WHERE `CriteriosSubCriterio`.`claveCriterio` = '2.3' AND `CriteriosSubCriterio`.`claveSubCriterio` = '2.3.4';
DELETE FROM `SubCriterio` WHERE `SubCriterio`.`claveSubCriterio` = '2.3.4';


UPDATE `SubCriterio` SET `nombre` = 'Debe existir un balance adecuado entre profesores con grados académicos de la institución y de otras instituciones.' WHERE `SubCriterio`.`claveSubCriterio` = '1.5.8';
UPDATE `SubCriterio` SET `nombre` = 'Al menos un 50% de la planta docente de tiempo completo debe estar vinculado a un proyecto de investigación o desarrollo tecnológico en el área, o con un proyecto del área del programa educativo para el sector productivo y/ o de servicios.' WHERE `SubCriterio`.`claveSubCriterio` = '1.6.2';
UPDATE `SubCriterio` SET `nombre` = 'Debe existir un programa de estímulos o incentivos bien definido fundamentado en Criterios académicos principalmente y de acuerdo con el desempeño docente.' WHERE `SubCriterio`.`claveSubCriterio` = '1.7.4';
UPDATE `SubCriterio` SET `nombre` = 'El nivel de salarios y prestaciones sociales del personal académico de tiempo completo, así como sus incrementos y promociones, debe ser tal que le permita una vida digna, y al mismo tiempo le haga atractiva su dedicación a la carrera académica. Asimismo, los honorarios de los profesores de tiempo parcial deben ser atractivos para este tipo de actividad.' WHERE `SubCriterio`.`claveSubCriterio` = 'i';
UPDATE `SubCriterio` SET `nombre` = 'El programa debe contar con al menos una estrategia, para que todos los docentes que participan en él conozcan la relación, importancia y enfoque de todas y cada una de las asignaturas que lo forman (currícula), a fin de poder dar la orientación adecuada a cada asignatura que imparten.' WHERE `SubCriterio`.`claveSubCriterio` = 'iv';
UPDATE `SubCriterio` SET `nombre` = 'Se requiere que los estudiantes que ingresan al programa académico cumplan con un mínimo de condiciones en cuanto a conocimientos, actitudes y habilidades, por lo que deben existir en forma explícita los Criterios de selección que se emplean. Existencia de un perfil del aspirante a ingresar al programa. Estar establecido que los aspirantes presenten un examen de admisión institucional, que permita que sólo sean aceptados quienes cumplan con el mínimo de conocimientos y habilidades requeridas. De los puntos anteriores debe existir información escrita en forma de guía o manual para los aspirantes.' WHERE `SubCriterio`.`claveSubCriterio` = '2.1.1';
UPDATE `SubCriterio` SET `nombre` = 'Para poder comparar el contenido curricular de distintos programas, se hace referencia a Unidades de cada curso. Para efectos de equivalencia, una Unidad equivale a 1 hora de Teoría frente a grupo, o bien a 3 horas de Práctica frente a grupo para Licenciatura y para el caso de Técnico Superior Universitario, la equivalencia es 2 horas de práctica frente a grupo. El Comité reconoce que existen nuevos modelos pedagógicos donde los estudiantes realizan actividades de autoestudio; en estos casos, la institución que busca la acreditación deberá de justificar la equivalencia utilizada para el número de Unidades.' WHERE `SubCriterio`.`claveSubCriterio` = '3.4.1';
UPDATE `SubCriterio` SET `nombre` = 'Indique las materias optativas ofrecidas en los últimos tres años. Las unidades de la asignatura y las áreas deben considerarse en términos de la clasificación indicada en las respuestas 3.1 y 3.2' WHERE `SubCriterio`.`claveSubCriterio` = '3.6.1';
UPDATE `SubCriterio` SET `nombre` = 'Deben existir mecanismos para la promoción externa (visitas a planteles de nivel medio superior, trípticos, difusión en medios de comunicación masiva, etc.) del programa.' WHERE `SubCriterio`.`claveSubCriterio` = '3.8.3';
UPDATE `SubCriterio` SET `nombre` = 'Se debe contar con mecanismos de retroalimentación que permitan, a partir de las evaluaciones de los estudiantes, llevar a cabo acciones encaminadas a mejorar el proceso enseñanza-aprendizaje. Certificación de competencias bajo normas nacionales o internacionales según el perfil de TIC a evaluar (A, B, C o D).' WHERE `SubCriterio`.`claveSubCriterio` = '4.1.5';
UPDATE `SubCriterio` SET `nombre` = '¿Existe un mecanismo de medición sobre las competencias desarrolladas por los estudiantes al finalizar su trayectoria académica de acuerdo con su perfil de egreso? Certificación de competencias bajo normas nacionales o internacionales según el perfil de TIC a evaluar para Licenciatura y TSU reflejados en los modelos curriculares actualizados 2014 de ANIEI-CONAIC).' WHERE `SubCriterio`.`claveSubCriterio` = '4.1.7';
UPDATE `SubCriterio` SET `nombre` = '¿Opera un programa de orientación profesional que permita a los estudiantes por egresar, insertarse de manera adecuada en el mercado laboral (cursos y conferencias impartidos por expertos del mercado laboral)?' WHERE `SubCriterio`.`claveSubCriterio` = '5.4.3';
UPDATE `SubCriterio` SET `nombre` = '¿Se cuenta con mecanismos e instrumentos que permitan evaluar el Programa de Tutorías, así como su impacto?' WHERE `SubCriterio`.`claveSubCriterio` = '6.1.3';
UPDATE `SubCriterio` SET `nombre` = '¿El material didáctico o de aprendizaje de sus distintas asignaturas del programa académico considera contenidos altamente flexibles a los diferentes estilos de aprendizaje de los estudiantes, adecuados al nivel de estos (autosuficiente); es decir, considera un diseño integral y holístico para ser utilizado por el estudiante y favorecer su aprendizaje autónomo?' WHERE `SubCriterio`.`claveSubCriterio` = '6.5.1';
UPDATE `SubCriterio` SET `nombre` = '¿Cómo parte del modelo educativo, para el caso de los programas no presenciales o semipresenciales, realizan reuniones presenciales en distintas sedes para fortalecer la interacción -en un tiempo definido y un espacio físico- entre todos los miembros que forman parte de la comunidad de aprendizaje: estudiantes, profesores, facilitadores, tutores y personal administrativo, para compartir experiencias y ampliar horizontes de aprendizaje?' WHERE `SubCriterio`.`claveSubCriterio` = '6.6.1';
UPDATE `SubCriterio` SET `nombre` = '¿El programa cuenta con un mecanismo para el seguimiento de egresados que incluya encuestas a empleadores para conocer el desempeño laboral de los egresados en el campo laboral y encuestas a los propios egresados para conocer su opinión sobre el plan de estudios que cursaron; así como mecanismos para que los resultados de las encuestas se tomen en consideración para la reestructuración del plan de estudios?' WHERE `SubCriterio`.`claveSubCriterio` = '7.2.1';
UPDATE `SubCriterio` SET `nombre` = '¿Existen bases de datos actualizadas de los egresados del programa académico?' WHERE `SubCriterio`.`claveSubCriterio` = '7.2.2';
UPDATE `SubCriterio` SET `nombre` = '¿Qué medios brinda la Institución y a qué nivel (General, de la Dirección, de la jefatura, del programa, etc.) para la difusión de la cultura informática, como son: ¿Artículos, reportes de investigación, publicaciones periódicas, libros de texto, conferencias, exposiciones, etc.?' WHERE `SubCriterio`.`claveSubCriterio` = '7.6.1';
UPDATE `SubCriterio` SET `nombre` = 'Proporcionar los proyectos de investigación vinculados con el programa en las siguientes formas: \r\n- Tabla de Proyecto \r\n- Cronograma por trimestres \r\n- Relación de proyectos de investigación terminados en los últimos cinco años' WHERE `SubCriterio`.`claveSubCriterio` = '8.4.1';

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