<script src="../js/sweetalert2.min.js"></script>
<div class="col-md-12 col-12 mt-3 ml-5">
	<div class="row">
		<h2>Agendar reuniones</h2>
	</div>
	<div class="row hidden-sm">
		<h5>Utilice este módulo para definir la fecha de sus reuniones</h5>
	</div>
</div>
<div class="col-md-12 col-12 mb-3">
	<div class="row">
		<div class="col-md-12 mt-2 mp-1">
		
			<div class="card mod_panel">
				<div id="calendar" class="m-3"></div>
			</div>
			
			<div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
				<input type="text" id="txt_fecha" class="form-control">
				<div class="input-group-addon">
					<span class="fa fa-calendar"></span>
				</div>
			</div>

		</div>
		</div>
	</div>
	
</div>
  
<div class="modal" id="modal_reunion" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-calendar-alt"></i> Agendar reunión</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<div class="col-md-12 col-12">
					<div class="row" id="fecha_reunion"></div>
					<div class="row">
						<div class="col-md-6 col-6">
							<div class="form-group">
								<label for="txt_hora_inicio">Hora inicio</label>
								<input type="time" id="txt_hora_inicio" class="form-control" value="now">
							</div>
						</div>
						<div class="col-md-6 col-6">
							<div class="form-group">
								<label for="txt_hora_fin">Hora fin</label>
								<input type="time" id="txt_hora_fin" class="form-control" value="now">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="autocomplete form-group">
								<label for="txt_lugar">Lugar</label>
								<input type="text" id="txt_lugar" class="form-control" placeholder="Lugar">
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-outline-success" id="btn_aceptar_reunion"><strong><i class="fa fa-check-circle"></i> Aceptar</strong></button>
			</div>
		</div>
	</div>
</div>

<script src="../js/agendar_reuniones.js"></script>