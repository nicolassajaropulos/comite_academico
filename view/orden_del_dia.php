<div class="col-12">	
	<div class="row">
		<div class="col-md-12 col-12 mt-3 ml-5">
			<div class="row">
				<h2>Orden del día</h2>
			</div>
			<div class="row">
				<h5>Utilice este módulo para consultar las solicitudes a tratar en reuniones del comité</h5>
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
									<th scope="col">#</th>
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
									<th scope="col">#</th>
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
					<button class="btn btn-outline-success btn-block" id="btn_aceptar"><i class="fa fa-check-circle"></i> Aceptar</button>
				</div>
				<div class="col-md-12 col-12 mt-2 mb-2 back-action">
					<button class="btn btn-outline-danger btn-block" id="btn_regresar"><i class="fa fa-arrow-circle-left"></i> Regresar</button>
				</div>
				<div class="col-md-12 col-12 mt-2 mb-2">
					<button class="btn btn-outline-info btn-block" id="btn_filtrar" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#dlg_filtro"><i class="fa fa-search"></i> Filtrar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_solicitudes_pendientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-calendar-times"></i> Solicitudes sin reunión asignada</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
	      	<div class="modal-body">
	      		<table class="table carga_solicitudes_pendientes mt-3 table-striped table-hover">
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
						
					</tbody>
				</table>	
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
			  		<div class="col-md-6">
				      	<div class="form-group">
				            <label for="txt_convocador_filtro">Convocador:</label>
				            <input type="text" class="form-control text-center" id="txt_convocador_filtro">
				        </div>
			  		</div>
			  		<div class="col-md-4">
				      	<div class="form-group">
				            <label for="txt_fecha_filtro">Fecha:</label>
				            <input type="text" class="form-control text-center datepicker" id="txt_fecha_filtro">
				      	</div>
			  		</div>
	      		</div>
	      		<div class="row">
	      			<div class="col-md-6">
	      				
	      			</div>
	      			<div class="col-md-6"></div>
	      		</div>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-reply" aria-hidden="true"></i> Cerrar</button>
	        	<button type="button" class="btn btn-outline-warning" id="btn_limpiar_filtro"><i class="fa fa-eraser" aria-hidden="true"></i> Limpiar</button>
	        	<button type="button" class="btn btn-outline-primary" id="btn_aplicar_filtro" data-table="0"><i class="fas fa-search"></i> Filtrar</button>
	      	</div>
    	</div>
  	</div>
</div>

<script type="text/javascript" src="../js/orden_del_dia.js"></script>