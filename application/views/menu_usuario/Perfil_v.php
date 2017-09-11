<?php //echo '<pre>'; print_r($user_log); ?>
<style>
	.has-feedback .form-control-feedback {
        position: absolute;
        top: 0px;
        right: 15px;
        display: block;
        width: 34px;
        height: 34px;
        line-height: 34px;
        text-align: center;
	}
</style>
		<script src="<?php echo base_url(); ?>statics/js/registro_usuario/Registro_usuario.js"></script>
		<script src="<?php echo base_url(); ?>statics/js/registro_usuario/actualizar_usuario.js"></script>
		<center><h1 style="color:#ffffff;">&nbsp;</h1></center>
		<div class="col-md-10 col-md-offset-1">
		    <div class="panel panel-success"  align="center">
		      	<div class="panel-heading">Mi perfil</div>
		      	<div class="panel-body">
			    	<div class="col-md-12">
			          	<center><h2 style="text-decoration: underline;"><?php echo $user_log[0]['user_name']; ?></h2></center>
			          	<input type="hidden" name="id_user" id="id_user" value="<?php echo $user_log[0]['id_user']; ?>">
				        <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<input type="hidden" name="id_avatar_user" id="id_avatar_user" value="<?php echo $user_log[0]['id_avatar']; ?>">
				            <div class="col-xm-12 col-sm-6 col-md-5 col-lg-4 col-xl-4" id="user_avatar" align="center">
				              	<img class="img-responsive" src="<?php echo base_url().$user_log[0]['location']; ?>"/>
				            </div>
							<div class="col-xm-12 col-sm-6 col-md-7 col-lg-8 col-xl-8" align="left">
								<div id="info_user">
						            <ul style="list-style: circle; font-size: 20px;">
						              <li><label class="for">Nombre: </label> <span> <?php echo $user_log[0]['name'].' '.$user_log[0]['last_name']; ?></span></li>
						              <li><label>Sexo: </label> <span> <?php echo $user_log[0]['perfil_sexo']; ?></span></li>
						              <li><label>Email: </label> <span> <?php echo $user_log[0]['email']; ?></span></li>
						              <li><label>Miembro desde: </label> <span> <?php echo $user_log[0]['fecha']; ?></span></li>
						            </ul> 
						            <a class="btn btn-success" href="#" onclick="$('#infoGral').show(); $('#cambia_avatar').show(); $('#info_user').hide();"><span>Editar información general</span></a>	
								</div>
							<br> 
							<div class="col-sm-12 col-md-12 col-lg-12" id="cambia_avatar" align="center" style="display: none">
								<label>Seleccionar nuevo avatar</label>
								<?php if(isset($user_log[0]['avatares_disponibles']) && $user_log[0]['avatares_disponibles']!=false){ 
				                  foreach ($user_log[0]['avatares_disponibles'] as $key => $value) { ?>
					                <div>
								    	<a href="#" class="avatar" id="<?php echo $value['id_avatar']; ?>" >
								    		<img id="img_avatar_<?php echo $value['id_avatar']; ?>" src="<?php echo base_url().$value['location']; ?>" style="width:100%; max-height: 50px; max-width: 50px; 	position: relative; float: left; margin: 0;	padding: 0;" class="img-responsive">
								    	</a>
								    </div>
				                <?php } }?>
				                <br>
				            </div>
							<br>								
							</div>
			          </div><br>
						<div id="infoGral" style="display: none;">							
							<div class="input-group col-lg-12 col-md-12 col-xs-12"><br>
								<div class="form-group has-feedback col-md-6  col-xs-12" id="usuario">
									<label>Nombre de usuario: </label>
									<input onblur="validar_username()" type="text" class="form-control" id="usr" placeholder="Nombre de Usuario*" value="<?php if(isset($user_log[0]['user_name'])) echo $user_log[0]['user_name']; ?>">
									<span id="error_username" class="glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
									<span id="error_user" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
								</div>
							</div>
							<div class="form-group has-feedback col-md-6  col-xs-12" id="error_pwd1">
								<label>Contraseña: </label>
								<input onblur="longitud_contrasenia()" type="password" class="form-control" id="pwd" placeholder="Contraseña*" required>
								<span id="error_vacio_pwd1" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
							</div>
							<div class="form-group has-feedback col-md-6  col-xs-12" id="error_pwd2">
								<label>&nbsp; </label>
								<input onblur="comparar_contrasenia()" type="password" class="form-control" id="rpwd" placeholder="Repetir Contraseña*">
								<span id="error_vacio_pwd2" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
							</div>
							<div class="input-group col-lg-12 col-md-12 col-xs-12">
								<div class="form-group has-feedback col-md-6  col-xs-12" id="email">
									<label>Correo electrónico: </label>
									<input onblur="validar_correo()" type="email" class="form-control" id="correo" placeholder="Correo Electrónico*" requiered value="<?php if(isset($user_log[0]['email'])) echo $user_log[0]['email']; ?>">
									<span id="error_email" class="glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
									<span id="error_vacio_email" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>

								</div>
							</div>
							<div class="form-group col-md-6  col-xs-12">
								<label>Nombre: </label>
								<input type="text" class="form-control" id="name" placeholder="Nombre(s)" value="<?php if(isset($user_log[0]['name'])) echo $user_log[0]['name']; ?>">
							</div>
							<div class="form-group col-md-6  col-xs-12">
								<label>Apellidos: </label>
								<input type="text" class="form-control" id="last" placeholder="Apellidos" value="<?php if(isset($user_log[0]['last_name'])) echo $user_log[0]['last_name']; ?>">
							</div>
							<div class="form-group has-feedback col-md-6  col-xs-12" id="error_vacio_anio">
								<label>Año de nacimiento: </label>
								<input onblur="validar_anio()" type="text" class="form-control" id="anio" placeholder="Año de Nacimiento*" required value="<?php if(isset($user_log[0]['year_birthday'])) echo $user_log[0]['year_birthday']; ?>">
								<span id="error_anio" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
							</div>
							<div class="form-group has-feedback col-md-6 col-xs-12" id="sex">
								<label>Sexo: </label>
								<select class="form-control" id="sexo">
									<option value="1" <?php if(isset($user_log[0]['sex']) && $user_log[0]['sex']==1) echo 'selected="selected"' ?> >Hombre</option>
									<option value="2" <?php if(isset($user_log[0]['sex']) && $user_log[0]['sex']==2) echo 'selected="selected"' ?> >Mujer</option>
								</select>
							</div>
			    			<div class="input-group col-lg-12 col-md-12 col-xs-12">
								<div class="form-group col-md-6  col-xs-12">
									<button type="button" onclick="actualizar()" class="btn btn-primary">Guardar Cambios</button>
									<button type="button" class="btn btn-danger" onclick="$('#infoGral').hide(); $('#cambia_avatar').hide(); $('#info_user').show();">Cancelar</button>
								</div>
							</div>							
						</div><br>
			        </div><br>
			        <script type="text/javascript">
			          $(".avatar").click(function(){
			          	//console.log(this.id);
			            //var id_user=$('#id_user').val();
			            //$('#cambia_avatar').html('<a class="btn btn-info btn-block" href="#" onclick="guardar_avatar('+id_user+','+this.id+');">Guardar</a>');
			            var new_avatar = document.getElementById('img_avatar_'+this.id);
			            //console.log(new_avatar);
			            $('#user_avatar').html('<img class="img-responsive" src="'+new_avatar.src+'"/>');
			            $('#id_avatar_user').val(this.id);

			          });
			        </script>   
		      	</div>
		    </div>
	  	</div>
	</div><!-- cierra el div #user_main_content que inicia despues del menú-->
