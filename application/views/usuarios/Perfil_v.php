<?php //echo '<pre>'; print_r($user_log); ?>
	  <center><h1 style="color:#ffffff;">&nbsp;</h1></center>
	  <div class="col-md-10 col-md-offset-1">
	    <div class="panel panel-success"  align="center">
	      <div class="panel-heading">Mi perfil</div>
	      <div class="panel-body">
	        <div class="col-md-12">
	          <center><h2 style="text-decoration: underline;"><?php echo $user_log[0]['user_name']; ?></h2></center>
	          <input type="hidden" name="id_user" id="id_user" value="<?php echo $user_log[0]['id_user']; ?>">
	          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-3 col-xl-3" align="right">
	            <div class="col-sm-12 col-md-12 col-lg-12" id="user_avatar" align="center">
	              <img class="img-responsive" src="<?php echo base_url().$user_log[0]['location']; ?>"/>
	            </div>
	            <div class="col-sm-12 col-md-12 col-lg-12" id="cambia_avatar" align="center">
	              <a class="btn btn-success" href="#" onclick="$('#avatares').show();"><span>Cambiar avatar</span></a>
	            </div>
	          </div><br>
	          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-9 col-xl-9" align="left"><br> 
	            <ul style="list-style: circle; font-size: 20px;">
	              <li><label class="for">Nombre: </label> <span> <?php echo $user_log[0]['name'].' '.$user_log[0]['last_name']; ?></span></li>
	              <li><label>Sexo: </label> <span> <?php echo $user_log[0]['sex']; ?></span></li>
	              <li><label>Email: </label> <span> <?php echo $user_log[0]['email']; ?></span></li>
	              <li><label>Miembro desde: </label> <span> <?php echo $user_log[0]['registration_date']; ?></span></li>
	            </ul> 
	          </div>
	        </div><br>
	        <div class="col-md-12" id="avatares" style="display: none">
	        	<hr>
	          <?php if(isset($user_log[0]['avatares_disponibles']) && $user_log[0]['avatares_disponibles']!=false){
	            foreach ($user_log[0]['avatares_disponibles'] as $key => $value) { ?>
	              <div class="col-xm-6 col-sm-4 col-md-4 col-lg-2 col-xl-2" align="center"><br>
	                <input type="radio" name="avatar" value="<?php echo $key; ?>" class="avatar" /><img id="img_avatar_<?php echo $key; ?>" class="img-responsive" src="<?php echo base_url().$value['location']; ?>"/>
	              </div>
	            <?php } 
	          } ?>
	        </div>
	        <script type="text/javascript">
	          $(".avatar").click(function(){
	            var id_user=$('#id_user').val();
	            $('#cambia_avatar').html('<a class="btn btn-info btn-block" href="#" onclick="guardar_avatar('+id_user+','+this.value+');">Guardar</a>');
	            var new_avatar = document.getElementById('img_avatar_'+this.value);
	            console.log(new_avatar);
	            $('#user_avatar').html('<img class="img-responsive" src="'+new_avatar.src+'"/>');

	          });
	        </script>   
	      </div>
	    </div>
	  </div>
	</div><!-- cierra el div #user_main_content que inicia despues del menú-->