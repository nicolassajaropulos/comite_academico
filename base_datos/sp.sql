DELIMITER $$
CREATE PROCEDURE consulta_por_estatus (
	IN id__estatus tinyint
)
BEGIN
	select concat_ws(" ", u.nombre_usuario,u.apellido_paterno, u.apellido_materno)as nombre_usuario, s.interesado, u.prioridad, c.id_carrera, c.nombre_carrera, s.id_solicitud, s.solicitud, s.fecha_creacion, s.ultima_modificacion, e.nombre_estatus
	from solicitud s
	INNER JOIN usuario u
	ON s.interesado  = u.numero_control
	INNER JOIN usuario_carrera uc
	ON uc.numero_control = u.numero_control
	INNER JOIN carrera c
	ON c.id_carrera=uc.id_carrera
	INNER JOIN estatus e
	ON s.id_estatus = e.id_estatus
	where s.id_estatus = id__estatus;
END $$
------------------------------------------------------------------------------------------------------------------------





DELIMITER $$
CREATE PROCEDURE almacenar_solicitud (
	IN numero_interesado bigint(20),
	IN numero_coordinador bigint(20),
	IN solicitud varchar(200),
	IN motivo__academico varchar(400),
	IN motivo__personal varchar(400)  ,
    IN motivo__otro varchar(400),
    OUT id__solicitud bigint(20)
	
)
BEGIN

INSERT INTO solicitud (interesado, coordinador,solicitud,motivo_academico, motivo_personal, motivo_otro, id_estatus, fecha_creacion)VALUES (numero_interesado,numero_coordinador, solicitud, motivo__academico, motivo__personal, motivo__otro,1, NOW());	
SET id__solicitud = LAST_INSERT_ID();

END $$
----------------------------------------------------------------------------------------------------------------
DELIMITER $$
CREATE PROCEDURE consulta_por_carrera (
	IN id__carrera bigint(20)
)
BEGIN
	select concat_ws(" ", u.nombre_usuario,u.apellido_paterno, u.apellido_materno)as nombre_usuario, s.interesado, u.prioridad, c.id_carrera, c.nombre_carrera, s.id_solicitud, s.solicitud, s.fecha_creacion, s.ultima_modificacion, e.nombre_estatus
	from solicitud s
	INNER JOIN usuario u
	ON s.interesado  = u.numero_control
	INNER JOIN usuario_carrera uc
	ON uc.numero_control = u.numero_control
	INNER JOIN carrera c
	ON c.id_carrera = uc.id_carrera
	INNER JOIN estatus e
	ON s.id_estatus = e.id_estatus
	where c.id_carrera= id__carrera;
END $$
-------------------------------------------------------------------------------------------------------------

DELIMITER $$
CREATE PROCEDURE consulta_solicitud_por_id_solicitud (
	IN id__solicitud bigint(20)
)
BEGIN
	select concat_ws(" ", u.nombre_usuario,u.apellido_paterno, u.apellido_materno)as nombre_usuario, c.nombre_carrera, s.solicitud, s.motivo_personal, s.motivo_academico, s.motivo_otro
	from solicitud s
	INNER JOIN usuario u
	ON s.interesado  = u.numero_control
	INNER JOIN usuario_carrera uc
	ON uc.numero_control = u.numero_control
	INNER JOIN carrera c
	ON c.id_carrera= uc.id_carrera
	where s.id_solicitud= id__solicitud;
END $$
----------------------------------------------------------------------------------------------------------

DELIMITER $$
CREATE PROCEDURE consulta_por_usuario (
	IN numero__control bigint(20)
)
BEGIN
	select concat_ws(" ", u.nombre_usuario,u.apellido_paterno, u.apellido_materno)as nombre_usuario, s.interesado, u.prioridad, c.id_carrera, c.nombre_carrera, s.id_solicitud, s.solicitud, s.fecha_creacion, s.ultima_modificacion, e.nombre_estatus
	from solicitud s
	INNER JOIN usuario u
	ON s.interesado  = u.numero_control
	INNER JOIN usuario_carrera uc
	ON uc.numero_control = u.numero_control
	INNER JOIN carrera c
	ON c.id_carrera=uc.id_carrera
	INNER JOIN estatus e
	ON s.id_estatus = e.id_estatus
	where s.interesado = numero__control;
END $$

----------------------------------------------------------------------------------------------------------

DELIMITER $$
CREATE PROCEDURE consulta_por_reunion (
	IN id__reunion bigint(20)
)
BEGIN
	select concat_ws(" ", u.nombre_usuario,u.apellido_paterno, u.apellido_materno)as nombre_usuario, s.interesado, u.prioridad, c.id_carrera, c.nombre_carrera, s.id_solicitud, s.solicitud, s.fecha_creacion, s.ultima_modificacion, e.nombre_estatus
	from solicitud s
	INNER JOIN reunion_solicitud rs
	ON s.id_solicitud = rs.id_solicitud
	INNER JOIN usuario u
	ON s.interesado = u.numero_control
	INNER JOIN usuario_carrera uc
	ON uc.numero_control = u.numero_control
	INNER JOIN carrera c
	ON c.id_carrera=uc.id_carrera
	INNER JOIN estatus e
	ON s.id_estatus = e.id_estatus
	WHERE rs.id_reunion = id__reunion
	AND s.id_estatus = 3;
END $$