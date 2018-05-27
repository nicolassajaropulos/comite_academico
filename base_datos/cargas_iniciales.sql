
-- Prioridades
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Presidente', CURRENT_DATE(), b'1');
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Secretario', CURRENT_DATE(), b'1');
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Miembro', CURRENT_DATE(), b'1');
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Alumno', CURRENT_DATE(), b'1');
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Profesor', CURRENT_DATE(), b'1');
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Coordinador', CURRENT_DATE(), b'1');
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Servicios escolares', CURRENT_DATE(), b'1');
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Director', CURRENT_DATE(), b'1');
INSERT INTO prioridad (id_prioridad, prioridad, fecha_creacion, estatus) VALUES (NULL, 'Divison de estudio profesionales', CURRENT_DATE(), b'1');

-- Carreras
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Sistemas Computacionales', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Mecatronica', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Electrica', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Industrial', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Bioquimica', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Tics', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Gestion', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Ambiental', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Mecanica', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Electronica', CURRENT_DATE(), b'1');
INSERT INTO carrera (id_carrera, nombre_carrera, fecha_creacion, estatus) VALUES (NULL, 'Renovables', CURRENT_DATE(), b'1');

-- 1 - Presidente
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171182', 'Diego', 'Payan', 'Lopez', 'Presidente del comite', '1', '123', CURRENT_DATE(), b'1');

-- 2 - Secretario
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171156', 'Mayela', 'Madrid', 'Gutierrez', 'Secretario tecnico','2', '123', CURRENT_DATE(), b'1');

-- 3 - Miembros
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171229', 'Nicolas', 'Zavala', 'Sajaropulos', 'Default','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3111', 'Omar Alejandro', 'Mendoza', 'Aguilar', 'Jefe del Depto. de Ingenieria Quimica-Bioquimica','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3222', 'Paola', 'Espinoza', 'Verdugo', 'Jefa del depto. de Ciencias Basicas','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3333', 'Alma Lorena', 'Lopez', 'Rios', 'Jefa del depto. de Desarrollo Academico','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3444', 'Maria Aracely', 'Martines', 'Amaya', 'Division de Estudios de Posgrado e Investigacion','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3555', 'Joel Arturo', 'Sanchez', 'Borboa', 'Jefe del depto. de Ciencias Economico-Administrativas','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3666', 'Jaredt Guadalupe', 'Torres', 'Lopes', 'Jefa del depto. de Ingenieria Electrica-Electronica','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3777', 'Dorah Estgela', 'Garcia', 'Velarde', 'Jefa del depto. de Ingenieria Industrial','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3888', 'Jose Angel', 'Alcaraz', 'Vega', 'Jefe del depto. de Metal-Mecanica','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3999', 'Maria del Rosario', 'Gonzales', 'Alavez', 'Jefa del depto. de Sistemas y Computacion','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3112', 'Alma Lorena', 'Lopez', 'Rios', 'Jefa del depto. de Desarrollo Academico','3', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('3121', 'Jose Alessandri', 'Pimienta', 'Dominguez', 'Jefe del depto. de Gestion Tecnologica y Vinculacion','3', '123', CURRENT_DATE(), b'1');

-- 4 - Alumnos
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171078', 'Armando', 'Beltran', 'Medina', 'Estudiante','4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('10440756', 'Dominique', 'Moreno', 'Ayala', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('12170409', 'Mario Alberto', 'Garate', 'Rodriguez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('12170427', 'Erik Hernan', 'Lopez', 'Mendoza', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('12170478', 'Jesus Alfonso', 'Beltran', 'Sevey', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('12170529', 'Rigoberto', 'Renteria', 'Manjarrez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('12170533', 'Jesus Alberto', 'Ruelas', 'Cabrera', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('13170384', 'Luis David', 'Alejo', 'Guerrero', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('13170448', 'Luis Eduardo', 'Mariscal', 'Castañeda', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('14171276', 'Mariana', 'Talavera', 'Altamirano', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('14171345', 'Maria Andrea', 'Calderon', 'Lopez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15170276', 'Kevin Alberto', 'Lopez', 'Lopez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15170493', 'Julissa Maria', 'Villanueva', 'Lopez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15170646', 'Victor Miguel', 'Ojeda', 'Chucuan', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15170716', 'Carlos Clemente', 'Lopez', 'Lozoya', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171025', 'Maria Laura', 'Beltran', 'Urias', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171047', 'Jazabel', 'Noriega', 'Gonzalez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171164', 'Omar Alejandro', 'Meza', 'Talamante', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171271', 'Jaidely', 'Agramon', 'Lopez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171306', 'Yajaira Alizbeth', 'De la rocha', 'Serrano', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171412', 'Francisco Miguel', 'Beltran', 'Morales', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171418', 'Juan Manuel', 'Esquivel', 'Morales', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171427', 'Tonatiuh', 'Magaña', 'Beltran', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171432', 'Fernando Alexis', 'Medina', 'Perez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171433', 'Hiram Zahid', 'Montoya', 'Diaz', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('15171443', 'Dania Maria', 'Valenzuela', 'Monarrez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('16170026', 'Jesus Hernan', 'Montoya', 'Lopez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('16170077', 'Katherin Berenice', 'Bueno', 'Velazquez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('16170101', 'Miriam Paola', 'Sanchez', 'Valverde', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('16170680', 'Maria Fernanda', 'Segura', 'Ponce', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('16170951', 'Altair', 'Castillo', 'Vega', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('16170976', 'Fernando', 'Hernandez', 'Martinez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('16171559', 'Graciela Mercedes', 'Mendoza', 'Rodriguez', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('16171584', 'Guadalupe', 'Ojeda', 'Urrea', 'Estudiante', '4', '123', CURRENT_DATE(), b'1');

-- 5 - Profesores
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51111', 'Norma', 'Rebeca', 'Godoy', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('52222', 'Elizabeth', 'Ceceña', 'Niebla', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('53333', 'Ricardo', 'Bautizta', 'Quintero', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('54444', 'Oswaldo', 'Cuen', 'Tellez', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('55555', 'Sandra', 'Castro', 'Graciano', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('56666', 'David Enrique', 'Castro', 'Palazuelos', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('57777', 'Carlos', 'Aguilar', 'Diaz', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('58888', 'Rosa Icela', 'Amador', 'Cazares', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('59999', 'Evangelina', 'Avila', 'Gaxiola', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51112', 'Juan Pedro', 'Campos', 'Sauceda', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51113', 'Jose Luis' , 'Lopez', 'Audeves', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51114', 'Felipe', 'Muñiz', 'Ramos', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51115', 'Cresensio', 'Ruvalcaba', 'Cazares', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51116', 'Usiel', 'Rivera', 'Allan', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51117', 'Hilda Karina', 'Ramirez', 'Medina', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51118', 'Julio', 'Zepeda', '', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51119', 'Gerardo', 'Rojas', '', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51120', 'Jesus', 'Aguilar', 'Virgen', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51121', 'Jose', 'Toledo', '', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51122', 'Alejandro', 'Triunfo', '', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51123', 'Gabriela', 'Szeiffova', '', 'Profesor','5', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('51124', 'Baltazar', 'Urquidez', '', 'Profesor','5', '123', CURRENT_DATE(), b'1');

-- 6 - Coordinadores de carrera
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('61111', 'Carlos Rafael', 'Lizarraga', 'Arreoloa', 'Coordinador de Ing. Mecanica','6', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('62222', 'Eliseo', 'Juarez', 'Lopez', 'Coordinador de Ing. Electrica, Electronica y Energias Renovables','6', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('63333', 'Guadalupe Aleyda', 'Cardenas', 'Lopez', 'Coordinador de Ing. en Gestion Empresarial','6', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('64444', 'Jessica Guadalupe', 'Beltran', 'Ramirez', 'Coordinador de Ing. Bioquimica y Ambiental','6', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('65555', 'Gabriela Maria', 'Sanchez', 'Angulo', 'Coordinador de Ing. Industrial','6', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('66666', 'Everd', 'Cazares', '', 'Coordinador de Ing. Mecatronicaa','6', '123', CURRENT_DATE(), b'1');
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('67777', 'Edna Rocio', 'Barajas', 'Olivas', 'Coordinador de Ing. en Sistemas y Tics','6', '123', CURRENT_DATE(), b'1');

-- 7 - Servicios Escolares
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('71111', 'Dinorah', 'Meza', 'Garcia', 'Jefa de Servicios Escolares','7', '123', CURRENT_DATE(), b'1');

-- 8 - Director del plantel
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('81111', 'Jose Guillermo','Cardenas', 'Lopez', 'Director del Tecnologico','8', '123', CURRENT_DATE(), b'1');

-- 9 - Divison de estudios profesionales
INSERT INTO usuario (numero_control, nombre_usuario, apellido_paterno, apellido_materno, puesto, prioridad, contraseña, fecha_creacion, estatus) VALUES ('91111', 'Marta', 'Montero', 'Rosales', 'Jefa del depto. de la Division de Estudios Profesionales','9', '123', CURRENT_DATE(), b'1');

-- Carrera de Coordinadores de carrera
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '61111', '9', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '62222', '3', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '62222', '10', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '62222', '11', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '63333', '7', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '64444', '5', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '64444', '8', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '65555', '4', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '66666', '2', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '67777', '1', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '67777', '6', CURRENT_DATE(), b'1');

-- Carrera de Alumnos
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171078', '1', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171427', '1', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171412', '1', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171432', '1', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171433', '2', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '13170448', '2', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '13170384', '2', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '12170409', '3', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '12170427', '3', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15170716', '3', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15170276', '4', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15170493', '4', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '16170026', '4', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '10440756', '5', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '16171584', '5', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171164', '6', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171418', '6', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171443', '6', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '14171345', '7', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171271', '7', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171306', '7', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '16170077', '8', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '16170101', '8', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '14171276', '8', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '16170951', '9', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '16170976', '9', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15170646', '9', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '12170529', '10', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '12170478', '10', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '12170533', '10', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171025', '11', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '15171047', '11', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '16170680', '11', CURRENT_DATE(), b'1');

-- Carrera de profesores
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51111', '1', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '52222', '1', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '53333', '2', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '54444', '2', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '55555', '3', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '56666', '3', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '57777', '4', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '58888', '4', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '59999', '5', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51112', '5', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51113', '6', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51114', '6', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51115', '7', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51116', '7', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51117', '8', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51118', '8', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51119', '9', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51120', '9', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51121', '10', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51122', '10', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51123', '11', CURRENT_DATE(), b'1');
INSERT INTO usuario_carrera (id_usuario_carrera, numero_control, id_carrera, fecha_creacion, estatus) VALUES (NULL, '51124', '11', CURRENT_DATE(), b'1');


-- Estatus de solicitudes aceptadas
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('1', 'Enviada a Coordinador', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('2', 'En espera de ser agendada', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('3', 'En espera de fecha de reunion', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('4', 'Validada por comite', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('5', 'En espera de dictamen oficial', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('6', 'Dictamen oficial generado', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('7', 'Enviada a servicios escolares', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('8', 'Enviada a estudios profesionales', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('9', 'Ejecutada', CURRENT_DATE(), b'1');

-- Estatus de solicitudes rechazadas
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('11', 'Rechazada por coordinador por evidencia' ,CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('12', 'Rechazada por coordinador con motivo', CURRENT_DATE(), b'1');
INSERT INTO estatus (id_estatus, nombre_estatus, fecha_creacion, estatus) VALUES ('13', 'Rechazada por director del plantel', CURRENT_DATE(), b'1');

-- Lugares
INSERT INTO lugar (id_lugar, nombre_lugar, calle, numero_exterior, colonia, fecha_creacion, estatus) VALUES (NULL, 'Sala de reuniones', NULL, NULL, NULL, CURRENT_DATE(), b'1');
INSERT INTO lugar (id_lugar, nombre_lugar, calle, numero_exterior, colonia, fecha_creacion, estatus) VALUES (NULL, 'Oficina del plantel', NULL, NULL, NULL, CURRENT_DATE(), b'1');
INSERT INTO lugar (id_lugar, nombre_lugar, calle, numero_exterior, colonia, fecha_creacion, estatus) VALUES (NULL, 'Biblioteca', NULL, NULL, NULL, CURRENT_DATE(), b'1');
INSERT INTO lugar (id_lugar, nombre_lugar, calle, numero_exterior, colonia, fecha_creacion, estatus) VALUES (NULL, 'Otro', NULL, NULL, NULL, CURRENT_DATE(), b'1');