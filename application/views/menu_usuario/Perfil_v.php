<?php //echo '<pre>'; print_r($user_log); ?>
		<center><h1 style="color:#ffffff;">&nbsp;</h1></center>
		<div class="col-md-10 col-md-offset-1">
		    <div class="panel panel-success"  align="center">
		      	<div class="panel-heading">Mi perfil</div>
		      	<div class="panel-body">
			    	<div class="col-md-12">
			          	<center><h2 style="text-decoration: underline;"><?php echo $user_log[0]['user_name']; ?></h2></center>
			          	<input type="hidden" name="id_user" id="id_user" value="<?php echo $user_log[0]['id_user']; ?>">
				        <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				            <div class="col-xm-12 col-sm-6 col-md-5 col-lg-4 col-xl-4" id="user_avatar" align="center">
				              	<img class="img-responsive" src="<?php echo base_url().$user_log[0]['location']; ?>"/>
					            <div class="col-sm-12 col-md-12 col-lg-12" id="cambia_avatar" align="center">
									<div >
									  <label>Seleccione nuevo avatar</label><br>  
									  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-width: 128px; max-height: 128px; " data-interval="false">

									    <!-- Wrapper for slides -->
									    <div class="carousel-inner">
							                <?php if(isset($user_log[0]['avatares_disponibles']) && $user_log[0]['avatares_disponibles']!=false){ 
							                  foreach ($user_log[0]['avatares_disponibles'] as $key => $value) { ?>
								                <div class="item <?php if($key==0) echo "active"; ?>">
											    	<a href="#" class="avatar" id="<?php echo $key; ?>" >
											    		<img id="img_avatar_<?php echo $key; ?>" src="<?php echo base_url().$value['location']; ?>" style="width:100%;" class="img-responsive">
											    	</a>
											    </div>
							                <?php } }?>
									    </div>

									    <!-- Left and right controls -->
									    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
									      <span class="glyphicon glyphicon-chevron-left"></span>
									    </a>
									    <a class="right carousel-control" href="#myCarousel" data-slide="next">
									      <span class="glyphicon glyphicon-chevron-right"></span>
									    </a>
									  </div>
									</div>		            
					            </div>
				            </div>
							<div class="col-xm-12 col-sm-6 col-md-7 col-lg-8 col-xl-8" align="left">
								<div id="info_user">
						            <ul style="list-style: circle; font-size: 20px;">
						              <li><label class="for">Nombre: </label> <span> <?php echo $user_log[0]['name'].' '.$user_log[0]['last_name']; ?></span></li>
						              <li><label>Sexo: </label> <span> <?php echo $user_log[0]['perfil_sexo']; ?></span></li>
						              <li><label>Email: </label> <span> <?php echo $user_log[0]['email']; ?></span></li>
						              <li><label>Miembro desde: </label> <span> <?php echo $user_log[0]['fecha']; ?></span></li>
						            </ul> 
						            <a class="btn btn-success" href="#" onclick="$('#infoGral').show(); $('#info_user').hide();"><span>Editar información general</span></a>	
								</div>
								<div id="infoGral" style="display: none;">
									<br> 
									<div class="input-group col-lg-12 col-md-12 col-xs-12">
										<div class="form-group has-feedback col-md-6  col-xs-12" id="usuario">
											<label>Nombre de usuario: </label>
											<input onblur="validar_username()" type="text" class="form-control" id="usr" placeholder="Nombre de Usuario*">
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
											<input onblur="validar_correo()" type="email" class="form-control" id="correo" placeholder="Correo Electrónico*" requiered>
											<span id="error_email" class="glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
											<span id="error_vacio_email" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>

										</div>
									</div>
									<div class="form-group col-md-6  col-xs-12">
										<label>Nombre: </label>
										<input type="text" class="form-control" id="name" placeholder="Nombre(s)">
									</div>
									<div class="form-group col-md-6  col-xs-12">
										<label>Apellidos: </label>
										<input type="text" class="form-control" id="last" placeholder="Apellidos">
									</div>
									<div class="form-group has-feedback col-md-6  col-xs-12" id="error_vacio_anio">
										<label>Año de nacimiento: </label>
										<input onblur="validar_anio()" type="text" class="form-control" id="anio" placeholder="Año de Nacimiento*" required="">
										<span id="error_anio" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
									</div>
									<div class="form-group has-feedback col-md-6 col-xs-12" id="sex">
										<label>Sexo: </label>
										<select class="form-control" id="sexo">
											<option value="1">Hombre</option>
											<option value="2">Mujer</option>
										</select>
									</div>
								</div>
							</div>
			          </div><br>
			        </div><br>
			        <script type="text/javascript">
			          $(".avatar").click(function(){
			          	console.log(this.id);
			            var id_user=$('#id_user').val();
			            //$('#cambia_avatar').html('<a class="btn btn-info btn-block" href="#" onclick="guardar_avatar('+id_user+','+this.id+');">Guardar</a>');
			            var new_avatar = document.getElementById('img_avatar_'+this.id);
			            console.log(new_avatar);
			            $('#user_avatar').html('<img class="img-responsive" src="'+new_avatar.src+'"/>');

			          });
			        </script>   
		      	</div>
		    </div>
	  	</div>
	</div><!-- cierra el div #user_main_content que inicia despues del menú-->