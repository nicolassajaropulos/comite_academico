<div class="col-12">	
	<div class="row">
		<div class="col-md-12 col-12 mt-3 ml-5">
			<div class="row">
				<h2>Solicitudes a ejecutar</h2>
			</div>
			<div class="row">
				<h5>Utilice este módulo para indicar que se han ejecutado las solicitudes aceptadas por el comité.</h5>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-10">
			<div class="card mod_panel">
				<div class="row ml-2">
					<div class="col-md-11 ml-5">
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
				<div class="col-md-12 col-12 mt-2 mb-2">
					<button class="btn btn-outline-info btn-block" id="btn_filtrar" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#dlg_filtro"><i class="fa fa-search"></i> Filtrar</button>
				</div>
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

<script type="text/javascript" src="../js/solicitudes_estudios_profesionales.js"></script>