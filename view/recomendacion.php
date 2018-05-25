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
								<textarea class="form-control" id="txt_comentario" placeholder="Recomendacion" rows="5"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-6">
							<div class="alert alert-info" role="alert">
							  1
							</div>
						</div>
						<div class="col-md-6 col-6">
							<div class="alert alert-danger" role="alert">
							  2
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="alert alert-primary" role="alert">
							 3
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