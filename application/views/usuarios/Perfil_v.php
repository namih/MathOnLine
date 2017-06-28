<?php echo '<pre>'; print_r($perfil); ?>
	  <div class="col-md-10 col-md-offset-1">
	    <div class="panel panel-success"  align="center">
	      <div class="panel-heading">Mi perfil</div>
	      <div class="panel-body">
	        <div class="col-md-10 col-md-offset-1">
	          <?php $avatar=array(
	            1=>array(
	              'name'=>'farmer',
	              'location'=>'/statics/img/avatar/airhostess.png'
	              ),
	            2=>array(
	              'name'=>'alien',
	              'location'=>'/statics/img/avatar/alien.png'
	              ),
	            3=>array(
	              'name'=>'alieness',
	              'location'=>'/statics/img/avatar/alieness.png'
	              ),
	            4=>array(
	              'name'=>'aphrodite',
	              'location'=>'/statics/img/avatar/aphrodite.png'
	              ),
	          ); ?>
	          <center><h2 style="text-decoration: underline;"><?php echo $user_log[0]['user_name']; ?></h2></center>
	          <input type="hidden" name="id_user" id="id_user" value="<?php echo $user_log[0]['id_user']; ?>">
	          <div class="col-md-3" align="right">
	            <div class="col-sm-12 col-md-12 col-lg-12 form-group" id="user_avatar" align="center">
	              <img class="img-responsive" src="<?php echo base_url().$user_log[0]['location']; ?>"/>
	            </div>
	            <div class="col-sm-12 col-md-12 col-lg-12 form-group" id="cambia_avatar" align="center">
	              <a class="btn btn-success btn-block" href="#" onclick="$('#avatares').show();">Cambiar avatar</a>
	            </div>
	          </div><br>
	          <div class="col-md-9" align="left"><br> 
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
	          <?php if(isset($avatar) && $avatar!=false){
	            foreach ($avatar as $key => $value) { ?>
	              <div class="col-md-1" align="center"><br>
	                <input type="radio" name="avatar" value="<?php echo $key; ?>" class="avatar" /><img id="img_avatar_<?php echo $key; ?>" class="img-responsive" src="<?php echo base_url().$value['location']; ?>"/>
	                <label><?php echo $value['name']; ?></label>
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