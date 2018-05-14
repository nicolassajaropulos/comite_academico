<div class="col-md-12 col-12 mt-3 ml-5">
	<div class="row">
		<h2>Acta de acuerdos</h2>
	</div>
	<div class="row hidden-sm">
		<h5>Utilice este módulo para generar un acta de acuerdos correspondiente a una reunión de comité.</h5>
	</div>
</div>
<div class="col-md-12 col-12 mb-3">
	<div class="row">
	
		<div class="col-md-10 mt-2 mp-1">
		
			<div class="card mod_panel">
			
				<div class="row ml-2 lista_reuniones">
					<div class="col-md-11 ml-5">
						<table class="table carga_reuniones mt-3 table-striped table-hover" id="tbl_recomendaciones">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Fecha reunión</th>
									<th scope="col">Convocador</th>
									<th scope="col">Acción</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <th scope="row">1</th>
								  <td>09/05/2018</td>
								  <td>Diego Payán López</td>
								  <td><button class="btn btn-outline-primary btn-sm btn_acta_acuerdos">Acta de acuerdos</button></td>
								  
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="row ml-2 acta_acuerdo">
					<div class="col-md-1">
					</div>
					<div class="col-md-5 col-5 ml-5 mt-3 mb-3">
						<div class="row">
							<h5>Fecha : 09 de Mayo de 2018</h5>
						</div>
						<div class="row">
							<h5>Lugar : Oficinas del comité académico</h5>
						</div>
						<div class="row">
							<h5>Hora de inicio : 8:00 am</h5>
						</div>
						<div class="row">
							<h5>Hora de fin : 9:30 am</h5>
						</div>
						<div class="row">
							<h5><strong>Participantes</strong></h5>
						</div>
						<li>Diego Payán López</li>
						<li>Mayela Madrid Gutierrez</li>
						<li>Nicolás Zavala</li>
						<div class="row mt-2">
							<button class="btn btn-outline-info">Firmas de los miembros</button>
						</div>
					</div>
					<div class="col-md-5 col-5 mt-3 mb-3">
						<div class="row">
							<div class="col-md-10 col-10">
								<h5><strong>Temas:</strong></h5><input type="text" class="form-control" id="txt_tema" placeholder="temas">
							</div>
							<div class="col-md-2 col-2 mt-4">
								<button class="btn btn-outline-success">Añadir</button>
							</div>
						</div>
						<div class="row col-md-12 col-12">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Tema</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Cambios de calificaciones</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row col-md-12 col-12">
							<h5><strong>Desarrollo:</strong></h5>
							<textarea type="text" class="form-control" id="txt_desarrollo" placeholder="Desarrollo" row="5"></textarea>
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
				<div class="col-md-12 col-12 mt-2 mb-2 back-action">
					<button class="btn btn-outline-danger btn-block" id="btn_regresar"> Regresar</button>
				</div>
				<div class="col-md-12 col-12 mt-2 mb-2">
					<button class="btn btn-outline-info btn-block" id="btn_filtrar" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#dlg_filtro"> Filtrar</button>
				</div>
			</div>
		</div>
	</div>
	
</div>

<!-- MODAL FILTRO -->

<div class="modal fade" id="dlg_filtro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel">Filtrar por:</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
	      	<div class="modal-body text-center">
	      		<div class="row">
	      			<div class="col-md-1"></div>
			  		<div class="col-md-4">
				      	<div class="form-group">
				            <label for="txt_fecha_reunion_filtro">Fecha de reunión:</label>
				            <input type="text" class="form-control text-center datepicker" id="txt_fecha_reunion_filtro">
				      	</div>
			  		</div>
			  		<div class="col-md-6">
				      	<div class="form-group">
				            <label for="txt_convocador_filtro">Convocador:</label>
				            <input type="text" class="form-control text-center" id="txt_convocador_filtro">
				        </div>
			  		</div>
	      		</div>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-reply" aria-hidden="true"></i> Cerrar</button>
	        	<button type="button" class="btn btn-outline-warning" id="btn_limpiar_filtro"><i class="fa fa-eraser" aria-hidden="true"></i> Limpiar</button>
	        	<button type="button" class="btn btn-outline-primary" id="btn_aplicar_filtro"><i class="fas fa-search"></i> Filtrar</button>
	      	</div>
    	</div>
  	</div>
</div>

<script src="../js/acta_acuerdos.js"></script>