<div class="col-md-12 col-12 mt-3 ml-5">
	<div class="row">
		<h2>Agenda de reuniones</h2>
	</div>
	<div class="row hidden-sm">
		<h5>Utilice este módulo para verificar en qué fecha se efecturarán sus reuniones</h5>
	</div>
</div>
<div class="col-md-12 col-12 mb-3">
	<div class="row">
		<div class="col-md-12 mt-2 mp-1">
		
			<div class="card mod_panel">
				<div id='calendar' class="m-3"></div>
			</div>
			
		</div>
	</div>
	
</div>

<div class="modal" id="modal_reunion" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-calendar-alt"></i> Detalles de reunión</h5>
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
					<div class="row" id="lugar_reunion"></div>
					<div class="row" id="estatus_reunion"></div>
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>

<script src="../js/reportes_agenda.js"></script>