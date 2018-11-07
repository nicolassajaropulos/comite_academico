<div class="col-12">	
	<div class="row">
		<div class="col-md-12 col-12 mt-3 ml-5">
			<div class="row">
				<h2>Recomendaciones</h2>
			</div>
			<div class="row">
				<h5>Utilice este módulo para generar las recomendaciones para las solicitudes tratadas por comité</h5>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-10">
			<div class="card mod_panel">
				<div class="row ml-2">
					<div class="col-md-11 ml-5">
						<table class="table carga_reuniones mt-3 table-hover table-bordered">
							<thead>							
								<tr>
									<th scope="col">Folio Reunión</th>
									<th scope="col">Convocador</th>
									<th scope="col">Fecha</th>
									<th scope="col">Hora inicio</th>
									<th scope="col">Hora fin</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>							
							</tbody>
						</table>	
						<table class="table carga_solicitudes mt-3 table-hover table-bordered">
							<thead>
								<tr>
									<th scope="col">Folio Solicitud</th>
									<th scope="col">Solicitud</th>
									<th scope="col">Interesado</th>
									<th scope="col">Fecha emitida</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>	
					</div>
				</div>	
			</div>
		</div>
		<div class="col-md-2 mt-2">
			<div class="card text-center button_panel">
				<div class="col-md-12 col-12 mt-2">
					<h4>Acciones</h4><hr>
				</div>
				<div class="col-md-12 col-12 mt-2 mb-2 back-action">
					<button class="btn btn-outline-danger btn-block" id="btn_regresar"><i class="fa fa-arrow-circle-left"></i> Reuniones</button>
				</div>
				<div class="col-md-12 col-12 mt-2 mb-2">
					<button class="btn btn-outline-info btn-block" id="btn_filtrar" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#dlg_filtro"><i class="fa fa-search"></i> Filtrar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_recomendacion" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title titulo_recomendacion">Recomendación para la solicitud con folio: </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12 col-12">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Recomendación:</h5>
								<textarea class="form-control" id="txt_recomendacion" placeholder="Recomendacion" rows="5"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-6">
							<div class="alert alert-success numero_aceptadas" role="alert">
							</div>
						</div>
						<div class="col-md-6 col-6">
							<div class="alert alert-danger numero_rechazadas" role="alert">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="alert alert-info solicitud_estatus" role="alert">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-success" data-dismiss="modal" id="btn_almacenar_recomendacion"><strong><i class="fa fa-check-circle"></i> Enviar</strong></button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_visualizar_solicitud_estudiante" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title titulo_modal">Vista de Solicitud No.</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12 col-12">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Nombre del estudiante:</h5>
								<input type="text" class="form-control" id="txt_nombre_estudiante">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Carrera del estudiante:</h5>
								<input type="text" class="form-control" id="txt_carrera_estudiante">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Solicitud:</h5>
								<textarea class="form-control" rows="4" id="txt_solicitud_estudiante"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Motivos académicos:</h5>
								<textarea class="form-control" rows="4" id="txt_motivos_academicos_estudiante"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Motivos personales:</h5>
								<textarea class="form-control" rows="4" id="txt_motivos_personales_estudiante"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Otros:</h5>
								<textarea class="form-control" rows="4" id="txt_motivos_otros_estudiante"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12 col-sm-12">
							<div class="form-group">
								<h5>Evidencias:</h5>
								<div class="carga_evidencias row"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_visualizar_solicitud_profesor" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title titulo_modal">Vista de Solicitud No.</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12 col-12">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Nombre del Profesor:</h5>
								<input type="text" class="form-control" id="txt_nombre_profesor">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Carrera del Profesor:</h5>
								<input type="text" class="form-control" id="txt_carrera_profesor">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Solicitud:</h5>
								<textarea class="form-control" rows="4" id="txt_solicitud_profesor"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Motivos académicos:</h5>
								<textarea class="form-control" rows="4" id="txt_motivos_academicos_profesor"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12 col-sm-12">
							<div class="form-group">
								<h5>Evidencias:</h5>
								<div class="carga_evidencias row"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="../js/recomendacion.js"></script>