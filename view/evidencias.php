<div class="col-md-12 col-12 mt-3 ml-5">
	<div class="row">
		<h2>Evidencias</h2>
	</div>
	<div class="row hidden-sm">
		<h5>Utilice este módulo para almacenar evidencias referenciadas a una solicitud.</h5>
	</div>
</div>
<div class="col-md-12 col-12 mb-3">
	<div class="row">
	
		<div class="col-md-10 mt-2 mp-1">
		
			<div class="card mod_panel">
			
				<div class="row mt-3 mb-3">
					<div class="col-md-1 col-1"></div>
					<div class="col-md-10 col-10">					
						<table class="table carga_reuniones mt-3 table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Convocador</th>
									<th scope="col">Fecha</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <th scope="row">1</th>
								  <td>Diego Payán López</td>
								  <td>11/05/2018</td>
								  <td><button class="btn btn-info btn-sm" id="btn_solicitud"> Solicitudes</button></td>
								</tr>
							</tbody>
						</table>
						
						<table class="table carga_solicitudes mt-3 table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Interesado</th>
									<th scope="col">Comentario</th>
									<th scope="col">Fecha</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <th scope="row">1</th>
								  <td>Jesús Arturo Ayón</td>
								  <td>Cambio de calificación</td>
								  <td>09/05/2018</td>
								  <td><button class="btn btn-info btn-sm" id="btn_evidencia"> Evidencia</button></td>
								</tr>
							</tbody>
						</table>

						<div class="row envidencia">
							<div class="col-md-6 col-12 col-sm-12">
								<div class="form-group">
									<h5>Solicitud:</h5>
									<select class="form-control" id="txt_solicitud">
										<option value="0">Seleccione una solicitud</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-12 col-sm-12">
								<div class="form-group">
									<h5>Evidencia:</h5>
									<input type="file" class="form-control" id="txt_evidencia" placeholder="Nombre de carrera">
								</div>
							</div>
						</div>
						<div class="row envidencia">
							<div class="col-md-12 col-12 col-sm-12">
								<div class="form-group">
									<h5>Comentario:</h5>
									<textarea  id="txt_comentario" class="form-control" rows="4"></textarea >
								</div>
							</div>
						</div>
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
					<button class="btn btn-outline-success btn-block" id="btn_aceptar"> Aceptar</button>
				</div>
			</div>
		</div>
	</div>
	
</div>

<script src="../js/evidencias.js"></script>