
<div class="container">
	<h3>REGISTRO</h3>
	<h5>*Campos Obligatorios</h5>
	<div class="row">
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group col-md-6  col-xs-12">
				<input type="text" class="form-control" id="usr" placeholder="Nombre de Usuario*">
			</div>
		</div>
		<!-- <p></p>
		<p></p> -->
		<div class="form-group col-md-6  col-xs-12">
			<input type="password" class="form-control" id="pwd" placeholder="Contraseña*">
		</div>
		<div class="form-group col-md-6  col-xs-12">
			<input type="password" class="form-control" id="rpwd" placeholder="Repetir Contraseña*">
		</div>
		
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<!-- <p></p>
			<p></p> -->
			<div class="form-group col-md-6  col-xs-12">
				<input type="email" class="form-control" id="correo" placeholder="Correo Electrónico*">
			</div>
			<div class="form-group col-md-6  col-xs-12 " style="display: none" id="msj_correo">
				<span class="help-inline" style="color: red">Correo inválido.</span>
			</div>
		</div>

		<!-- <p></p>
		<p></p> -->
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="name" placeholder="Nombre(s)">
		</div>
		<!-- <p></p>
		<p></p> -->
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="last" placeholder="Apellidos">
		</div>
		<!-- <p></p>
		<p></p> -->
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="anio" placeholder="Año de Nacimiento*">
		</div>
		<div class="form-group col-md-6 col-xs-12">
					<select class="form-control" id="sexo">
						<option>Sexo</option>
						<option value="1">Hombre</option>
						<option value="2">Mujer</option>
						
					</select>
				</div>
				<div class="form-group col-md-6 col-xs-12">
					<select onchange="seleccion()" class="form-control" id ="uam">
						<option value="0">Unidad UAM</option>
						<?php 
						for ($i=0; $i < count($unidades) ; $i++) { ?>
							<option value="<?php echo $unidades[$i]['id_unit_uam']; ?>"><?php echo $unidades[$i]['name']?></option>
						<?php }?>
					</select>
				</div>
				<div class="form-group col-md-6  col-xs-12">
					<input type="text" class="form-control" id="mat" placeholder="Matrícula" disabled>
				</div>
				<div class="form-group checkbox col-md-6  col-xs-12">
      				<label class="col-md-6  col-xs-6"><input type="checkbox" value="" id="estudia" >Estudia</label>
      				<label class="col-md-6  col-xs-6"><input type="checkbox" value="" id="trabaja">Trabaja</label>
    			</div>
    			<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<!-- <p></p>
			<p></p> -->
			<div class="form-group col-md-6  col-xs-12">
				<button type="button" onclick="registrar()" class="btn btn-primary">Registrar</button>
				<button type="button" class="btn btn-danger">Cancelar</button>
			</div>
		</div>

	</div>
		
</div>
<script src="statics/js/registro_usuario/Registro_usuario.js"></script>