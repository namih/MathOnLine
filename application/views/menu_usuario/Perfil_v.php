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
	div.paginador {
	    text-align: center;
	    margin: 1px 0;
	}
	div.paginador span {
	    display: inline-block;
	    width: 1.8em;
	    height: 1.8em;
	    line-height: 1.8;
	    text-align: center;
	    cursor: pointer;
	    background: #000;
	    color: #fff;
	    margin-right: 5px;
	}
	div.paginador span.active {
	    background: #47a43b;
	}

	.avr_opt:hover{
		background: #eeeeee;
	}
	.active{
		background: #c4e5c0;
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
								<?php //if(isset($user_log[0]['avatares_disponibles']) && $user_log[0]['avatares_disponibles']!=false){
				                  //foreach ($user_log[0]['avatares_disponibles'] as $key => $value) { ?>
								<table class="paginated" style="margin: 5px auto;">
								    <tbody>
										<?php $i=0; if(isset($user_log[0]['avatares_disponibles']) && $user_log[0]['avatares_disponibles']!=false){
								          foreach ($user_log[0]['avatares_disponibles'] as $key => $value) {
											if($i%4==0){ ?>
												<tr>
								    		<?php } $i++; ?>
								    		<td style="padding: 3px;">
									            <div align="center">
											    	<a href="#id_avatar_user" class="avatar" id="<?php echo $value['id_avatar']; ?>" >
											    		<img id="img_avatar_<?php echo $value['id_avatar']; ?>" src="<?php echo base_url().$value['location']; ?>" style="width:100%; max-height: 50px; max-width: 50px; 	position: relative; float: left; margin: 0;	padding: 0; border: solid 1px; padding: 3px;" class="img-responsive avr_opt <?php if($user_log[0]['id_avatar']==$value['id_avatar']) echo "active"; ?>" >
											    	</a>
											    </div>
											</td>
											<?php if($i%4==0){ ?>
												</tr>
											<?php }else{
												if($i == count($user_log[0]['avatares_disponibles'])){
													for($j=1; $j<=(3-($i%4)); $j++){ ?>
														<td></td>
													<?php } ?>
												</tr>
												<?php } ?>
											<?php } ?>
								        <?php } }?>


								    </tbody>
								</table>
					                <!--<div>
								    	<a href="#" class="avatar" id="<?php echo $value['id_avatar']; ?>" >
								    		<img id="img_avatar_<?php echo $value['id_avatar']; ?>" src="<?php echo base_url().$value['location']; ?>" style="width:100%; max-height: 50px; max-width: 50px; 	position: relative; float: left; margin: 0;	padding: 0;" class="img-responsive">
								    	</a>
								    </div>-->
				                <?php// } }?>
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
								<input onblur="longitud_contrasenia_perfil()" type="password" class="form-control" id="pwd" placeholder="Contraseña*" required>
								<span id="error_vacio_pwd1" class="glyphicon glyphicon-exclamation-sign form-control-feedback" style="display: none"></span>
							</div>
							<div class="form-group has-feedback col-md-6  col-xs-12" id="error_pwd2">
								<label>&nbsp; </label>
								<input onblur="comparar_contrasenia_perfil()" type="password" class="form-control" id="rpwd" placeholder="Repetir Contraseña*">
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

							<div class="form-group col-md-6 col-xs-12">
								<label>Unidad UAM: </label>
								<select onchange="seleccionar_unidad()" class="form-control" id ="uam">
									<?php for ($i=0; $i < count($unidades) ; $i++) { ?>
										<option <?php if(isset($user_log[0]['id_unit_uam']) && $user_log[0]['id_unit_uam']==$unidades[$i]['id_unit_uam']) echo 'selected="selected"' ?> value="<?php echo $unidades[$i]['id_unit_uam']; ?>"><?php echo $unidades[$i]['name']?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group col-md-6 col-xs-12">
								<label>Licenciatura: </label>
								<select  class="form-control" id ="carrera" disabled>
									<?php if(isset($licenciaturas)) {
										foreach ($licenciaturas as $key => $value) { ?>
										<option <?php if(isset($user_log[0]['id_degree']) && $user_log[0]['id_degree']==$value['id_degree']) echo 'selected="selected"' ?> value="<?php echo $value['id_degree']; ?>"><?php echo $value['degree'];?></option>
									<?php } }?>
								</select>
							</div>
							<div class="form-group col-md-6  col-xs-12">
								<label>Matricula: </label>
								<input onblur="validar_matricula()" type="text" class="form-control" id="mat" placeholder="Matrícula" value="<?php echo $user_log[0]['uam_identifier']; ?>" disabled>
							</div>
							<div class="form-group checkbox col-md-6  col-xs-12">
			      				<label class="col-md-6  col-xs-6"><input type="checkbox" value="" id="estudia" <?php if(isset($user_log[0]['is_student']) && $user_log[0]['is_student']==1) echo 'checked' ?> >Estudia</label>
			      				<label class="col-md-6  col-xs-6"><input type="checkbox" value="" id="trabaja" <?php if(isset($user_log[0]['is_employed']) && $user_log[0]['is_employed']==1) echo 'checked' ?> >Trabaja</label>
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
			            $('img.avr_opt').removeClass('active');
			            $('#img_avatar_'+this.id).addClass('active');

			          });
			        </script>
		      	</div>
		    </div>
	  	</div>
	</div><!-- cierra el div #user_main_content que inicia despues del menú-->

<script type="text/javascript">

$('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 1;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $paginador = $('<div class="paginador"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($paginador).addClass('clickable');
    }
    $paginador.insertBefore($table).find('span.page-number:first').addClass('active');
});

</script>
