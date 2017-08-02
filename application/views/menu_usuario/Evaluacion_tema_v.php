
            <div class="container-fluid">
              <center><h1 style="color:#ffffff;">&nbsp;</h1></center>
              <div id="all_tutorial" class="col-lg-12">
                <div id="main_evaluacion">
      				    <div class="panel panel-success">
      				      <div class="panel-heading" style="background-color: #ffffff !important;">
      			              <center>
      			                <h1>Evaluación de <?php echo $tema_eval; ?></h1>
      			              </center>
      				      </div>
      				      <div class="panel-body">
      						  <form action="/action_page.php">
      		                    <?php if(isset($preguntas_evaluacion) && $preguntas_evaluacion!=false){ 
      		                      foreach ($preguntas_evaluacion as $key => $datos) { ?>
      							    <div class="form-group" id="preg_<?php echo $datos['id_evaluation']; ?>">
      							      <label><?php echo $datos['question']; ?></label>
      							    </div>
      							    <div class="checkbox" id="respuestas">
      							    	<ul style="list-style: lower-latin;">
      								    	<?php foreach ($datos['answers'] as $llave => $valor) { ?>
      								      		<input type="radio" name="remember"><label><li style="font-weight: bold;"><span style="font-weight: normal;"><?php echo $valor['description']; ?></span></li></label><br>
      								    	<?php } ?>
      							    	</ul>
      							    	<br>
      							    </div>
      						      <?php }
      						    }?>
      						    <div align="right">
      						    	<button type="submit" class="btn btn-success">Submit</button>
      						    </div>
      						  </form>
      				      </div>
      				    </div>            
                </div>
              </div>
            </div>