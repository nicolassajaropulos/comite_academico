<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Comité Academico</title>
    	<link href="https://sitec.itculiacan.edu.mx/wp-content/themes/fuente/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    	<link rel="stylesheet" href="../librerias/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    	<link rel="stylesheet" href="../librerias/typeahead.js-bootstrap4-css/typeaheadjs.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
		<link rel="stylesheet" href="../librerias/datepicker/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="../css/fullcalendar.min.css">
		<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
		<link rel="stylesheet" href="../css/general.css">
  	</head>
  	<body>
		<?php session_start();?>
  		<div class="row login_header hidden-sm-down">
	   		<div class="col-md-12 col-12"><br>
	   			<div class="row">
		   			<div class="col-md-3 col-3 logo_sep hidden-sm-down">
		   				<img src="../imagenes/header-sep.png">	
		   			</div>
		   			<div class="col-md-6 col-6 col-sm-12 text-center text-tnm">
		   				</br>
		   				<h4><strong class="title">TECNOLÓGICO NACIONAL DE MÉXICO</strong></h4>
		   				<h5><strong class="title">INSTITUTO TECNOLÓGICO DE CULIACÁN</strong></h5>
						</br></br>
		   			</div>
		   			<div class="col-md-3 col-3 hidden-sm-down logo_itc">
		   				<img src="../imagenes/Logo-itc.png">
		   			</div>
		   		</div>
	   		</div>
	  	</div>
		<div class="row">
			<div class="col-md-2 col-2">
			</div>
			<div class="col-md-8 col-8 login_panel">
				<nav class="nav">
				<?php if($_SESSION['prioridad'] == 1){ $prioridad = "Presidente";?>
					
					<a class="nav-link active" href="#" data-navi="agendar_reuniones"><i class="fa fa-calendar-alt"></i> Agendar Reuniones</a>
					<img src="../imagenes/dot.png">
					<a class="nav-link" href="#" data-navi="orden_del_dia"><i class="fa fa-folder-open"></i> Orden del día</a>
					<img src="../imagenes/dot.png">
					<a class="nav-link" href="#" data-navi="recomendacion_presidente"><i class="fa fa-folder-open"></i> Recomendaciónes</a>
						
				<?php }else if($_SESSION['prioridad'] == 2){ $prioridad = "Secretario";?>
					
					<a class="nav-link active" href="#" data-navi="reportes_agenda"><i class="fa fa-calendar-alt"></i> Agenda</a>
					<img src="../imagenes/dot.png" style="width:30px; height:41px;">
					<a class="nav-link" href="#" data-navi="orden_del_dia"><i class="fa fa-folder-open"></i> Orden del día</a>
					<img src="../imagenes/dot.png" style="width:30px; height:41px;">
					<a class="nav-link active" href="#" data-navi="recomendacion"><i class="fa fa-clipboard-check"></i> Recomendación</a>
					<img src="../imagenes/dot.png" style="width:30px; height:41px;">
					<a class="nav-link active" href="#" data-navi="acta_acuerdos"><i class="fa fa-briefcase"></i> Acta de acuerdos</a>
					<img src="../imagenes/dot.png" style="width:30px; height:41px;">
					<a class="nav-link active" href="#" data-navi="dictamen_enviado"><i class="fa fa-newspaper"></i> Dictamen</a>
						
				<?php }else if($_SESSION['prioridad'] == 3){ $prioridad = "Miembro";?>
					
						<a class="nav-link active" href="#" data-navi="reportes_agenda"><i class="fa fa-calendar-check"></i> Revisar agenda de reuniones</a>
						<img src="../imagenes/dot.png">
						<a class="nav-link" href="#" data-navi="solicitud_voto"><i class="fa fa-list-alt"></i> Validar solicitudes</a>

				<?php }else if($_SESSION['prioridad'] == 4 || $_SESSION['prioridad'] == 5){ $prioridad = "Interesado";?>
					
					<a class="nav-link" href="#" data-navi="solicitud"><i class="fa fa-newspaper"></i> Ingresar nueva solicitud</a>
					<img src="../imagenes/dot.png">
					<a class="nav-link" href="#" data-navi="reportes_solicitud"><i class="fa fa-tasks"></i> Estado de solicidud</a>
				
				<?php } else if($_SESSION['prioridad'] == 6){ $prioridad = "Coordinador de carrera";?>

					<a class="nav-link active" href="#" data-navi="solicitudes_enviadas_coordinador"><i class="fas fa-clipboard-check"></i> Solicitudes</a>
					
				<?php } else if($_SESSION['prioridad'] == 7){ $prioridad = "Servicios Escolares";?>

					<a class="nav-link active" href="#" data-navi="solicitudes_servicios_escolares"><i class="fas fa-clipboard-check"></i> Solicitudes aceptadas</a>
				
				<?php } else if($_SESSION['prioridad'] == 8){ $prioridad = "Director del plantel";?>

					<a class="nav-link active" href="#" data-navi="dictamen_oficial"><i class="fas fa-clipboard-check"></i> Dictamen oficial</a>

				<?php } else if($_SESSION['prioridad'] == 9){ $prioridad = "Estudios profesionales";?>

					<a class="nav-link active" href="#" data-navi="solicitudes_estudios_profesionales"><i class="fas fa-clipboard-check"></i> Solicitudes aceptadas</a>

				<?php } ?>

					<div class="dropup ml-auto dropdown_user">
						<button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user"></i> <?PHP echo $prioridad; ?>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item logout" href="#"><i class="fa fa-times"></i> Cerrar sesión</a>
						</div>
					</div>

				</nav>
			</div>
			<div class="col-md-2 col-2">
			</div>
		</div>
		<div id="cuerpo">
			<div class="row mt-4">
				<div class="col-md-2 col-2">
				</div>
				<div class="col-md-8 col-8" style="border:1px solid #d9d9d9; border-radius: 5px;">
					<div class="col-md-12 col-12">
						<div class="row">
							<div class="col-md-4 col-4">
								<img src="../imagenes/user.png" class="mt-2 mb-2" style="width:90%;">
							</div>
							<div class="col-md-8 col-8 mt-5">
								<div class="row mb-2 mt-4">
									<h4><strong><i class="fa fa-hashtag"></i> Número de control:</strong> <span id="numero_control"></span></h4>
								</div>
								<div class="row mb-2">
									<h4><strong><i class="fa fa-user"></i> Nombre de usuario:</strong> <span id="nombre_usuario"></span></h4>
								</div>
								<div class="row mb-2">
									<h4><strong><i class="fa fa-building"></i> Puesto:</strong> <span id="puesto"></span></h4>
								</div>
								<div class="row">
									<h4><strong><i class="fa fa-sticky-note"></i> Papel que desempeña en comité:</strong> <span id="papel_comite"></span></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-2">
				</div>
			</div>
			<?PHP if($_SESSION['prioridad'] == 1 || $_SESSION['prioridad'] == 2 || $_SESSION['prioridad'] == 3){?>
				<div class="row mt-3">
					<div class="col-md-2 col-2">
					</div>
					<div class="col-md-8 col-8" style="border:1px solid #d9d9d9; border-radius: 5px;">
						<div class="col-md-12 col-12 mt-2 text-center">
							<h3><i class="fa fa-calendar-alt"></i> Próxima reunión: <span id="fecha_reunion"></span></h3>
						</div>
					</div>
					<div class="col-md-2 col-2">
					</div>
				</div>
			<?PHP }?>
		</div>
  	</body>
	
	<div class="modal" id="modal_evidencia" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title titulo_validar"><i class="fa fa-picture"></i> Evidencia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="col-md-12 col-12">
						<div class="row" id="carga_vista_imagen">
						
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  	<script src="../librerias/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src='../js/moment.min.js'></script>
	<script type="text/javascript" src="../librerias/datepicker/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="../librerias/datepicker/bootstrap-datepicker.es.min.js"></script>
	<script type="text/javascript" src='../js/fullcalendar.min.js'></script>
	<script type="text/javascript" src='../js/es.js'></script>
	<script src="../librerias/typeahead.js/dist/bloodhound.min.js"></script>
  	<script src="../librerias/typeahead.js/dist/typeahead.jquery.min.js"></script>
	<script src="../js/sweetalert.min.js"></script>
  	<script src="../js/main_page.js"></script>
	
</html>
