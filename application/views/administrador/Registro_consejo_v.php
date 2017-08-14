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
				<span id="error_user" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
			</div>
		</div>
		
		<div class="form-group has-feedback col-md-6  col-xs-12" id="error_pwd1">
			<input type="password" class="form-control" id="pwd" placeholder="Contraseña*" required>
			<span id="error_vacio_pwd1" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>

		</div>
		<div class="form-group has-feedback col-md-6  col-xs-12" id = "error_pwd2">
			<input onblur="comparar_contrasenia()" type="password" class="form-control" id="rpwd" placeholder="Repetir Contraseña*">
			<span id="error_vacio_pwd2" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
		</div>
			
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group has-feedback col-md-6  col-xs-12" id="email">
				<input onblur="validar_correo_disponible()" type="email" class="form-control" id="correo" placeholder="Correo Electrónico*" requiered>
				<span id="error_email" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
				<span id="error_vacio_email" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
			</div>
		</div>
		
		
			
		
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="name" placeholder="Nombre(s)">
		</div>
		
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="last" placeholder="Apellidos">
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
		
		<div class="form-group col-md-6  col-xs-12">
			<input type="text" class="form-control" id="empl" placeholder="Numero de empleado" disabled>
		</div>
		
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group col-md-6  col-xs-12">
				<button type="button" onclick="registrar()" class="btn btn-primary">Registrar</button>
				<button type="button" class="btn btn-danger">Cancelar</button>
			</div>
		</div>
		
	</div>
		
</div>

<div id="Registro" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registro completado</h4>
      </div>
      <div class="modal-body">
        <p>Tu registro en Mate en Línea se a completado de forma satisfactoria. No obstante, para poder acceder debes inicialmente <strong>activar tu cuenta.</strong> Para ello, hemos remitido a tu correo electrónico un enlace con el que podrás hacerlo.</p>
      </div>
      <div class="modal-footer">
      	<a href="<?php echo base_url(); ?>" class="btn btn-success" role="button">Aceptar</a>
      </div>
    </div>

  </div>
</div>







<script src="statics/js/registro_consejo/Registro_consejo.js"></script>