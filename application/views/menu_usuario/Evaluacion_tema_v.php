    <script src="<?php echo base_url() ?>statics/js/evaluacion.js"></script>
            <div class="container-fluid">
              <center><h1 style="color:#ffffff;">&nbsp;</h1></center>
              <div id="conf_eval">
                <div>
                  <p>En esta sección usted realizará la evaluación del tema "xxxx" que consta de 15 preguntas.</p>
                  <p>Al iniciar la evaluación considere que:</p>
                  <ul>
                    <li>No hay limite de tiempo pero se guardará el tiempo que haya tardado en resolver la evaluación.</li>
                    <li>Debe finalizar la evaluación para guardar el resultado.</li>
                    <li>Si sale de la aplicación sin guardar la evaluación, se perderán las respuestas que haya seleccionado.</li>
                    <li>Si la pagina se recarga se perderá la evaluación y se mostrará un set de preguntas distintas.</li>
                  </ul>
                  <div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="text-center">
                            <a href="#" class="btn btn-success" onclick="iniciarEvaluacion();">Iniciar evaluación</a>
                          </div>
                        </div>
                      </div>
                    </div>                  
                  </div>
                </div>
              </div>
              <div id="preguntas_eval" class="col-lg-12" style="display: none">
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
                        </div>
                        
                      </div><br>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-12"><br>
                        <!--<form method="POST" onsubmit="return validacion();" action="#">-->
          						  <form action="#">
          		                    <?php if(isset($preguntas_evaluacion) && $preguntas_evaluacion!=false){ 
          		                      foreach ($preguntas_evaluacion as $pos_array => $datos) { ?>
          							    <div class="form-group pregunta" id="preg_<?php echo $datos['id_evaluation']; ?>">
          							      <label><?php echo $datos['question']; ?></label>
          							    </div>
          							    <div class="checkbox" id="respuestas">
          							    	<ul style="list-style: none;">
          								    	<?php foreach ($datos['answers'] as $llave => $valor) { ?>
          								      		<input type="radio" id="<?php echo $pos_array.'_'.$llave; ?>" name="answers_preg_<?php echo $datos['id_evaluation']; ?>" onclick="agregaRespuesta(this.id,<?php echo $datos['id_evaluation']; ?>);" ><label><li style="font-weight: bold;"><span style="font-weight: normal;"><?php echo $valor['description']; ?></span></li></label><br>
          								    	<?php } ?>
          							    	</ul>
          							    	<br>
          							    </div>
                            <div id="error_preg_<?php echo $datos['id_evaluation']; ?>"></div>
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
              <script type="text/javascript">
                var preguntas_eval= $('#preguntas_eval').html();
                $('#preguntas_eval').empty();
              </script>
            </div>
<script type="text/javascript">
  arrayEvaluacion=<?php echo json_encode($preguntas_evaluacion);?>;
  function iniciarEvaluacion(){
    $('#preguntas_eval').html(preguntas_eval); 
    $('#conf_eval').hide(); 
    $('#preguntas_eval').show(); 
    empezarDetener('Empezar');
  }

</script>            