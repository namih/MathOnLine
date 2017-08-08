    <script src="<?php echo base_url() ?>statics/js/evaluacion.js"></script>
            <div class="container-fluid">
              <center><h1 style="color:#ffffff;">&nbsp;</h1></center>
              <div id="all_tutorial" class="col-lg-12">
                <div id="main_evaluacion">
      				    <div class="panel panel-success">
      				      <div class="panel-heading" style="background-color: #ffffff !important; min-height: 80px;">
                      <div class=" col-sm-9 col-md-8 col-lg-10">
                          <center>
                            <h2>Evaluación de <?php echo $tema_eval; ?></h2>
                          </center>
                      </div>
                      <div class=" col-sm-3 col-md-4 col-lg-2" align="right">
                        <div class="crono_wrapper box_shadow" align="center">
                          <h2 id='crono'>&nbsp;00:00:00&nbsp;</h2>
                          <input type="button" value="Empezar" id="boton" onclick="empezarDetener(this);" style="display: none;">
                        </div>
                        
                      </div><br>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-12"><br>
                        <!--<form method="POST" onsubmit="return validacion();" action="#">-->
          						  <form action="#">
          		                    <?php if(isset($preguntas_evaluacion) && $preguntas_evaluacion!=false){ 
          		                      foreach ($preguntas_evaluacion as $pos_array => $datos) { ?>
          							    <div class="form-group" id="preg_<?php echo $datos['id_evaluation']; ?>">
          							      <label><?php echo $datos['question']; ?></label>
          							    </div>
          							    <div class="checkbox" id="respuestas">
          							    	<ul style="list-style: none;">
          								    	<?php foreach ($datos['answers'] as $llave => $valor) { ?>
          								      		<input type="radio" id="<?php echo $pos_array.'_'.$llave; ?>" name="answers_<?php echo $datos['id_evaluation']; ?>" onclick="agregaRespuesta(this.id);" ><label><li style="font-weight: bold;"><span style="font-weight: normal;"><?php echo $valor['description']; ?></span></li></label><br>
          								    	<?php } ?>
          							    	</ul>
          							    	<br>
          							    </div>
          						      <?php }
          						    }?>
          						    <div align="right">
                            <!--<button type="submit" class="btn btn-success">Evaluar</button>-->
          						    	<a class="btn btn-success" onclick="evaluarTema();" >Evaluar</a>
          						    </div>
          						  </form>
                      </div>
      				      </div>
      				    </div>            
                </div>
              </div>
            </div>
<script type="text/javascript">
  arrayEvaluacion=<?php echo json_encode($preguntas_evaluacion);?>;
</script>            