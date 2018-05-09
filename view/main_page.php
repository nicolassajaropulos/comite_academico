<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Comité Academico</title>
    	<link href="https://sitec.itculiacan.edu.mx/wp-content/themes/fuente/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    	<link rel="stylesheet" href="../librerias/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
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
						
				<?php }else if($_SESSION['prioridad'] == 2){ $prioridad = "Secretario";?>
					
					<a class="nav-link active" href="#" data-navi="acta_acuerdos"><i class="fa fa-clipboard"></i> Acta de acuerdos</a>
					<img src="../imagenes/dot.png">
					<a class="nav-link" href="#" data-navi="orden_del_dia"><i class="fa fa-folder-open"></i> Orden del día</a>
					<img src="../imagenes/dot.png">
					<a class="nav-link" href="#" data-navi="asistencia"><i class="fa fa-list-alt"></i> Control de asistencia</a>
						
				<?php }else if($_SESSION['prioridad'] == 3){ $prioridad = "Miembro";?>
					
						<a class="nav-link active" href="#" data-navi="reportes_agenda"><i class="fa fa-calendar-check"></i> Revisar agenda de reuniones</a>
						<img src="../imagenes/dot.png">
						<a class="nav-link" href="#" data-navi="evidencias"><i class="fa fa-upload"></i> Registro de evidencias</a>

				<?php }else if($_SESSION['prioridad'] == 4 || $_SESSION['prioridad'] == 5){ $prioridad = "Interesado";?>
					
					<a class="nav-link" href="#" data-navi="solicitud"><i class="fa fa-newspaper"></i> Ingresar nueva solicitud</a>
					<img src="../imagenes/dot.png">
					<a class="nav-link" href="#" data-navi="reportes_solicitud"><i class="fa fa-tasks"></i> Estado de solicidud</a>
				
				<?php } else if($_SESSION['prioridad'] == 6){ $prioridad = "Coordinador";?>

					<a class="nav-link active" href="#" data-navi="solicitudes_enviadas"><i class="fas fa-clipboard-check"></i> Solicitudes</a>
					
				<?php } else if($_SESSION['prioridad'] == 7){ $prioridad = "Servicios Escolares";?>

					<a class="nav-link active" href="#" data-navi="solicitudes_validas"><i class="fas fa-clipboard-check"></i> Solicitudes aceptadas</a>
				
				<?php } else if($_SESSION['prioridad'] == 8){ $prioridad = "Director del plantel";?>

					<a class="nav-link active" href="#" data-navi="solicitudes_validas_por_comite"><i class="fas fa-clipboard-check"></i> Solicitudes aceptadas por comité</a>

				<?php } ?>

					<div class="dropup ml-auto dropdown_user">
						<button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user"></i> <?PHP echo $prioridad; ?>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#"><i class="fa fa-pencil-alt"></i> Actualizar datos</a>
							<a class="dropdown-item" href="#"><i class="fa fa-unlock-alt"></i> Actualizar contraseña</a>
							<a class="dropdown-item logout" href="#"><i class="fa fa-times"></i> Cerrar sesión</a>
						</div>
					</div>

				</nav>
			</div>
			<div class="col-md-2 col-2">
			</div>
		</div>
		<div id="cuerpo">
			
		</div>
  	</body>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  	<script src="../librerias/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src='../js/moment.min.js'></script>
	<script type="text/javascript" src='../js/fullcalendar.min.js'></script>
	<script type="text/javascript" src='../js/es.js'></script>
	<script src="../js/sweetalert.min.js"></script>
  	<script src="../js/main_page.js"></script>
	
</html>
