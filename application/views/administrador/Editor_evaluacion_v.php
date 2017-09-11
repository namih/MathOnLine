<script src="http://www.wiris.net/demo/editor/editor"></script>

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
	<div class="panel panel-success tema_footer col-lg-6 col-md-6 col-xs-12"  align="center">
		<div class="panel-heading"><b>Editor de evaluación</b></div>
		<div class="panel-body">
			<div align='left' class="form-group">
				<label for="comment">Pregunta:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
			<div class="file-loading">
				<input id="input-pd" name="input-pd[]" type="file" multiple>
			</div>
			<div class="btn-group">
				<button onclick="" type="button" class="btn btn-default">Pregunta</button>
				<button onclick="" type="button" class="btn btn-default">Correcta</button>
				<button onclick="" type="button" class="btn btn-default">Distractor A</button>
				<button onclick="" type="button" class="btn btn-default">Distractor B</button>
				<button onclick="" type="button" class="btn btn-default">Distractor C</button>
			</div>
		</div>
	</div>
	<div class="panel panel-success tema_footer col-lg-6 col-md-6 col-xs-12"  align="center">
		<div class="panel-heading"><b>Previsualización de la evaluación</b></div>
		<div class="panel-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div> 
	
</div>
