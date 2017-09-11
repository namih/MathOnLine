<script src="http://www.wiris.net/demo/editor/editor"></script>

<!-- include summernote css/js-->
<script src="<?php echo base_url(); ?>statics/js/summernote/summernote.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/js/summernote/summernote.css">

<!-- Lenguaje español -->
<script src="<?php echo base_url(); ?>statics/js/summernote/lang/summernote-es-ES.js"></script>
<script src="<?php echo base_url(); ?>statics/js/Login_admin/editor_summernote.js"></script>

<script src="<?php echo base_url(); ?>statics/js/editor_evaluacion.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<h3>Editor de ecuaciones</h3>
		<div id="editorContainer">
			
		</div>
	</div>
	<br />
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		 <div class="form-group">
		 	<label for="comment">Pregunta:</label>
		 	<textarea class="form-control" rows="5" id="comment"></textarea>
		 </div>
		 <label class="control-label">Agregar imagenes</label>
		 <input id="question" type="file" class="file" data-show-preview="false">
	</div>
	<br />
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		
		<div class="form-group">
		 	<label for="comment">Respuesta correcta:</label>
		 	<textarea class="form-control" rows="5" id="comment"></textarea>
		 </div>
		 <label class="control-label">Agregar imagenes</label>
		 <input id="correct_answer" type="file" class="file" data-show-preview="false">
	</div>
	<br />
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group">
		 	<label for="comment">Respuesta incorrecta A:</label>
		 	<textarea class="form-control" rows="5" id="comment"></textarea>
		 </div>
		 <label class="control-label">Agregar imagenes</label>
		 <input id="wrong_answer_a" type="file" class="file" data-show-preview="false">
	</div>
	<br />
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group">
		 	<label for="comment">Respuesta incorrecta B:</label>
		 	<textarea class="form-control" rows="5" id="comment"></textarea>
		 </div>
		 <label class="control-label">Agregar imagenes</label>
		 <input id="wrong_answer_b" type="file" class="file" data-show-preview="false">
	</div>
	<br />
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group">
		 	<label for="comment">Respuesta incorrecta C:</label>
		 	<textarea class="form-control" rows="5" id="comment"></textarea>
		 </div>
		 <label class="control-label">Agregar imagenes</label>
		 <input id="wrong_answer_c" type="file" class="file" data-show-preview="false">
	</div>
</div>
