<script src="http://www.wiris.net/demo/editor/editor"></script>

<link href="<?php echo base_url(); ?>statics/js/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>statics/js/fileinput/js/fileinput.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>statics/js/fileinput/js/locales/es.js" type="text/javascript"></script>

<!-- include summernote css/js-->
<script src="<?php echo base_url(); ?>statics/js/summernote/summernote.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/js/summernote/summernote.css">

<!-- Lenguaje español -->
<script src="<?php echo base_url(); ?>statics/js/summernote/lang/summernote-es-ES.js"></script>
<script src="<?php echo base_url(); ?>statics/js/Login_admin/editor_summernote.js"></script>

<script src="<?php echo base_url(); ?>statics/js/editor_evaluacion.js"></script>


<div class="container-fluid">
	<div class="panel panel-success tema_footer col-lg-12 col-md-12 col-xs-12"  align="center">
		<div class="panel-heading"><b>Editor de ecuaciones</b></div>
		<div class="panel-body">
			<div id="editorContainer"></div>
		</div>
	</div> 
	
	<br />
	<div class="panel panel-success  col-lg-6 col-md-6 col-xs-12"  align="center">
		<div class="panel-heading"><b>Editor de evaluación</b></div>
		<div class="panel-body">
			<div align='left' class="form-group">
				<label for="comment">Pregunta:</label>
				<textarea class="form-control" rows="5" id="builder"></textarea>
			</div>
			<div class="form-group">
				<input id="image_builder" type="file" class="file" multiple="true" data-preview-file-type="any">
			</div>
			<script type="text/javascript" charset="utf-8">
				$("#image_builder").fileinput({
					language: 'es',
					showUpload: false
				});
			</script>
			<div class="btn-group">
				<button onclick="preview_question()" type="button" class="btn btn-default">Pregunta</button>
				<button onclick="preview_correct_answer()" type="button" class="btn btn-default">Correcta</button>
				<button onclick="preview_distractor_a()" type="button" class="btn btn-default">Distractor A</button>
				<button onclick="preview_distractor_b()" type="button" class="btn btn-default">Distractor B</button>
				<button onclick="preview_distractor_c()" type="button" class="btn btn-default">Distractor C</button>
			</div>
		</div>
	</div>
	<div class="panel panel-success  col-lg-6 col-md-6 col-xs-12">
		<div class="panel-heading"><b>Previsualización de la evaluación</b></div>
		<div class="panel-body">
			<div class="form-group col-lg-6 col-md-6 col-xs-12">
				<select onchange="cargar_subtema()" class="form-control" id ="tema">
		 		<option value="0">Seleccione un tema</option>
		 		<?php for ($i=0; $i < count($temas) ; $i++) { ?>
		 			<option value="<?php echo $temas[$i]['id_theme']; ?>"><?php echo $temas[$i]['theme']?></option>
		 		<?php }?>
		 		</select>
			</div> 
			<div class="form-group col-md-6 col-xs-12">
				<select class="form-control" id ="subtema" disabled>
					<option value="0">Seleccione un subtema</option>
				</select>
			</div>
			<br />
			<br />
			<div align="left">
				Pregunta
				<p align="center" id="question"><?php echo $evaluacion['question']; ?></p>
				<hr />
			</div>
			<div align="left">
				Respuesta correcta
				<p align="center" id="correct_answer"><?php echo $evaluacion['correct_answer']; ?></p>
				<hr />
			</div>
			<div align="left">
				Distractor A
				<p align="center" id="distractor_a"><?php echo $evaluacion['wrong_answer_a']; ?></p>
				<hr />
			</div>
			<div align="left">
				Distractor B
				<p align="center" id="distractor_b"><?php echo $evaluacion['wrong_answer_b']; ?></p>
				<hr />
			</div>
			<div align="left">
				Distractor C
				<p align="center" id="distractor_c"><?php echo $evaluacion['wrong_answer_c']; ?></p>
				<hr />
			</div>
			<div align="right">
				<button onclick="guardar_evaluacion(<?php if (isset($evaluacion['id_evaluation'])) {
					echo $evaluacion['id_evaluation'];
				} else {
					echo 0;
				}
				 ?>)" type="button" class="btn btn-success"><?php if (isset($evaluacion['id_evaluation'])) {
					echo 'Actualizar evaluación';
				} else {
					echo 'Guardar evaluación';
				}; ?></button>
			</div>
		</div>
	</div> 
</div>

<!-- Modal -->
<div class="modal fade" id="notifications">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="modal_header" class="modal-header">
        
      </div>
      <div id="modal_body" class="modal-body">
        
      </div>
      <div id="modal_footer" class="modal-footer">
        
      </div>
    </div>
  </div>
</div>