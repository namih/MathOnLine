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
		</div>
		
		<div class="form-group has-feedback col-md-12  col-xs-12"  >
			<label>Descripción:</label>
			<textarea rows="5" class="form-control" id="descripcion" ><?php echo $description ?></textarea>
		</div>
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group has-feedback col-md-12  col-xs-12" >
				<label for="liga" >Liga:</label>
				<input type="text" class="form-control" id="liga" value="<?php echo $link ?>">
			</div>
		</div>
		
		<div class="form-group col-md-6 col-xs-12">
			<button onclick="" type="button" class="btn btn-success">Actualizar</button>
	    </div>
	</div>
</div>
