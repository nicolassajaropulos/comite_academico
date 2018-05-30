<div class="col-md-12 col-12 mt-3 ml-5">
	<div class="row">
		<h2>Mis Solicitudes</h2>
	</div>
	<div class="row">
		<h5>Utilice este módulo para ver el seguimiento de tus solicitudes</h5>
	</div>
</div>
<div class="col-md-12 col-12">
	<div class="row">
		<div class="col-md-12 mt-2">
			<div class="card mod_panel">
				<div class="row ml-2">
					<div class="col-md-11 ml-5">
						<table class="table carga_solicitudes mt-3 table-bordered">
							<thead>
								<tr>
									<th scope="col">Folio Solicitud</th>
									<th scope="col">Solicitud</th>
									<th scope="col">Fecha Solicitada</th>
									<th scope="col">Última actualización</th>
									<th scope="col">Estado</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_comentario" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title titulo_validar">Motivo del rechazo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12 col-12">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="form-group">
								<h5>Comentario:</h5>
								<textarea class="form-control" id="txt_comentario" placeholder="Comentario" rows="5"></textarea>
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

<script type="text/javascript" src="../js/reportes_solicitud.js">