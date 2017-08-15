<!-- include summernote css/js-->
<script src="<?php echo base_url(); ?>statics/js/summernote/summernote.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/js/summernote/summernote.css">

<!-- Lenguaje español -->
<script src="<?php echo base_url(); ?>statics/js/summernote/lang/summernote-es-ES.js"></script>
<script src="<?php echo base_url(); ?>statics/js/Login_admin/editor_summernote.js"></script>

 
<div class="container" style="margin-top:15%;">
	
	
	<div class="container-fluid">
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group has-feedback col-md-12  col-xs-12" >
				<label for="titulo" >Titulo:</label>
				<input type="text" class="form-control" id="titulo" value="<?php echo $title ?>">
			</div>
		
		
			<div class="form-group has-feedback col-md-12  col-xs-12"  >
				<label>Autor</label>
				<input type="text" class="form-control" id="autor" value="<?php echo $author ?>">
			</div>
			<div class="form-group has-feedback col-md-6  col-xs-12">
				<label>Editorial</label>
				<input type="text" class="form-control" id="editorial" value="<?php echo $editorial ?>">
			</div>
			<div class="form-group has-feedback col-md-6  col-xs-12">
				<label>Año</label>
				<input type="text" class="form-control" id="año" value="<?php echo $year ?>">
			</div>
			<div class="form-group has-feedback col-md-6  col-xs-12">
			<label>País</label>
			<input type="text" class="form-control" id="editorial" value="<?php echo $place_publication ?>">
			</div>
			<div class="form-group has-feedback col-md-6  col-xs-12">
				<label>Tema</label>
				<input type="text" class="form-control" id="año" value="<?php echo $id_theme ?>">
			</div>
		
		</div>
		
		
		