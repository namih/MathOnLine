<style>.has-feedback .form-control-feedback {
            position: absolute;
            top: 0px;
            right: 15px;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
        }</style>
<div class="container">
	<h3>REGISTRO</h3>
	<h5>*Campos Obligatorios</h5>
	<div class="row">
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group has-feedback col-md-6  col-xs-12" id="usuario">
				<input onblur="validar_username()" type="text" class="form-control" id="usr" placeholder="Nombre de Usuario*">
				<span id="error_username" class="glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
			</div>
		</div>
		
		<div class="form-group col-md-6  col-xs-12">
			<input type="password" class="form-control" id="pwd" placeholder="Contraseña*" required>
			
		</div>
		<div class="form-group col-md-6  col-xs-12">
			<input type="password" class="form-control" id="rpwd" placeholder="Repetir Contraseña*">
		</div>
		
		
			
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group has-feedback col-md-6  col-xs-12" id="email">
				<input onblur="validar_correo()" type="email" class="form-control" id="correo" placeholder="Correo Electrónico*" requiered>
				<span id="error_email" class="glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
			</div>
		</div>
			
			
		

		
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="name" placeholder="Nombre(s)">
		</div>
		
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="last" placeholder="Apellidos">
		</div>
		
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="anio" placeholder="Año de Nacimiento*" required="">
		</div>
		<div class="form-group col-md-6 col-xs-12">
					<select class="form-control" id="sexo">
						<option>Sexo</option>
						<option value="1">Hombre</option>
						<option value="2">Mujer</option>
						
					</select>
				</div>
				<div class="form-group col-md-6 col-xs-12">
					<select onchange="seleccionar_unidad()" class="form-control" id ="uam">
						<option value="0">Unidad UAM</option>
						<?php 
						for ($i=0; $i < count($unidades) ; $i++) { ?>
							<option value="<?php echo $unidades[$i]['id_unit_uam']; ?>"><?php echo $unidades[$i]['name']?></option>
						<?php }?>
					</select>
				</div>
				<div class="form-group col-md-6 col-xs-12">
					<select  class="form-control" id ="carrera" disabled>
						<option value="0">Licenciatura</option>
						
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
			
					<div class="form-group col-md-6  col-xs-12">
						<button type="button" onclick="registrar()" class="btn btn-primary">Registrar</button>
						<button type="button" class="btn btn-danger">Cancelar</button>
					</div>
		</div>

	</div>
		
</div>
<script src="statics/js/registro_usuario/Registro_usuario.js"></script>