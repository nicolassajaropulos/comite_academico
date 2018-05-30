<link rel="stylesheet" href="../css/dropzone.css">
<div class="col-md-12 col-12 mt-3 ml-5">
	<div class="row">
		<h2>Generar solicitud</h2>
	</div>
	<div class="row hidden-sm">
		<h5>Utilice este módulo para generar una solicitud para enviar a Comité Académico.</h5>
	</div>
</div>
<div class="col-md-12 col-12 mb-3">
	<div class="row">
		<div class="col-md-10 mt-2 mp-1">
		
			<div class="card mod_panel">
				
				<?PHP session_start(); if($_SESSION['prioridad'] == 5){ ?>
					<div class="row">
						<div class="col-md-1 col-1 profesor"></div>
						<div class="col-md-10 col-10 mt-3" id="profesor">
							<div class="row">
								<div class="col-md-6 col-12 col-sm-12">
									<div class="form-group">
										<h5>El que suscribe:</h5>
										<input type="text" class="form-control" id="txt_nombre_profesor" placeholder="Nombre del profesor">
									</div>
								</div>
								<div class="col-md-6 col-12 col-sm-12">
									<div class="form-group">
										<h5>Profesor de la carrera de:</h5>
										<input type="text" class="form-control" id="txt_carrera_profesor" placeholder="Nombre de carrera">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="form-group">
										<h5>Solicita a usted de la manera más atenta:</h5>
										<textarea class="form-control" rows="4" id="txt_solicitud_profesor" placeholder="Solicitud"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="form-group">
										<h5>Por los siguientes motivos:</h5><br>
										<h5>Motivos académicos:</h5>
										<textarea class="form-control" rows="4" id="txt_motivos_academicos_profesor" placeholder="Motivos académicos"></textarea>
									</div>
								</div>
							</div>
							
							<h5>Evidencias:</h5>
							<form class="dropzone" id="my-dropzone" method="POST" enctype="multipart/form-data"></form>

							<div class="row mt-2">
								<div class="col-md-12">
									<button class="btn btn-outline-primary btn-block" id="upload"><i class="fas fa-cloud-upload-alt"></i> Cargar Evidencias</button>
								</div>
							</div>
						</div>
					</div>
				<?PHP }else if($_SESSION['prioridad'] == 4){ ?>
					<div class="row">
						<div class="col-md-1 col-1 estudiante"></div>
						<div class="col-md-10 col-10 mt-3" id="estudiante">
							<div class="row">
								<div class="col-md-6 col-12 col-sm-12">
									<div class="form-group">
										<h5>El que suscribe:</h5>
										<input type="text" class="form-control" id="txt_nombre_estudiante" placeholder="Nombre del estudiante">
									</div>
								</div>
								<div class="col-md-6 col-12 col-sm-12">
									<div class="form-group">
										<h5>Estudiante de la carrera de:</h5>
										<input type="text" class="form-control" id="txt_carrera_estudiante" placeholder="Nombre de carrera">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="form-group">
										<h5>Solicita a usted de la manera más atenta:</h5>
										<textarea class="form-control" rows="4" id="txt_solicitud_estudiante" placeholder="Solicitud"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="form-group">
										<h5>Por los siguientes motivos:</h5><br>
										<h5>Motivos académicos:</h5>
										<textarea class="form-control" rows="4" id="txt_motivos_academicos_estudiante" placeholder="Motivos académicos"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="form-group">
										<h5>Motivos personales:</h5>
										<textarea class="form-control" rows="4" id="txt_motivos_personales_estudiante" placeholder="Motivos personales"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="form-group">
										<h5>Otros:</h5>
										<textarea class="form-control" rows="4" id="txt_motivos_otros_estudiante" placeholder="Otros motivos"></textarea>
									</div>
								</div>
							</div>
							<!-- DROPZONE -->
							<h5>Evidencias:</h5>
							<form class="dropzone" id="my-dropzone" method="POST" enctype="multipart/form-data"></form>

							<div class="row mt-2">
								<div class="col-md-12">
									<button class="btn btn-outline-primary btn-block" id="upload"><i class="fas fa-cloud-upload-alt"></i> Cargar Evidencias</button>
								</div>
							</div>

						</div>
					</div>
				<?PHP } ?>
			</div>
			
		</div>
		
		<div class="col-md-2 mt-2">
			<div class="card text-center button_panel">
				<div class="col-md-12 col-12 mt-2">
					<h4>Acciones</h4><hr>
				</div>
				<div class="col-md-12 col-12 mt-2 mb-2">
				<?PHP if($_SESSION['prioridad'] == 4){ ?>
					<button class="btn btn-outline-success btn-block" id="btn_aceptar" data-session="4"> Aceptar</button>
				<?PHP } else { ?>
					<button class="btn btn-outline-success btn-block" id="btn_aceptar" data-session="5"> Aceptar</button>
				<?PHP } ?>
				</div>
			</div>
		</div>
	</div>
	
</div>

<script src="../js/dropzone.js"></script>
<script src="../js/solicitud.js"></script>