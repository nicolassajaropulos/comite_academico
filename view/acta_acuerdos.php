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
						<table class="table carga_reuniones mt-3 table-striped table-hover">
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
								  <td><button class="btn btn-primary btn-sm">Acta de acuerdos</button></td>
								  
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="row ml-2 acta_acuerdo">
					<div class="col-md-11 mt-3 ml-5 mb-3">
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
						<div class="row col-md-6 col-6">
							<h5><strong>Temas:</strong></h5><input type="text" class="form-control" id="txt_tema" placeholder="temas">
						</div>
						<div class="row col-md-6 col-6">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Temas</th>
									</tr>
								</thead>
								<tbody>
								
								</tbody>
							</table>
						</div>
						<div class="row col-md-6 col-6">
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
			</div>
		</div>
	</div>
	
</div>

<script src="../js/acta_acuerdos.js"></script>