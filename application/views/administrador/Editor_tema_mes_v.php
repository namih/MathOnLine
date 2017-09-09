<!-- include summernote css/js-->
<script src="<?php echo base_url(); ?>statics/js/summernote/summernote.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/js/summernote/summernote.css">

<!-- Lenguaje español -->
<script src="<?php echo base_url(); ?>statics/js/summernote/lang/summernote-es-ES.js"></script>
<script src="<?php echo base_url(); ?>statics/js/Login_admin/editor_summernote.js"></script>

<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
  <hr style="height: 2px; border: 0; color: #666; background-color: #008c00; margin-top: 0px !important;  margin-bottom: 0px !important; ">
</div> 
<div class="container" style="margin-top:15%;"> -->
	
	
	<div class="container-fluid">
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group has-feedback col-md-6  col-xs-12" >
				<label for="titulo" >Titulo:</label>
				<input type="text" class="form-control" id="titulo" value="<?php echo $title ?>">
			</div>
		</div>
		
		<div class="form-group has-feedback col-md-6  col-xs-12"  >
			<label>Imágen del título</label>
			<img width="70%" id="img_titulo" class="img-responsive" src="..<?php echo $image ?>"/>
			<div class="input-file-wrapper">
				<form enctype="multipart/form-data" class="formulario" >
        			<input type="file"  maxlength="1" accept="image/*" id="img_tema" />
				</form>
			</div>
		</div>
		<div class="col-md-12">
			<div class="alert alert-danger" role="alert" style="display: none"  id="imagen">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true" ></span>
  					Imagen no válida.
		    </div>
		</div>
		
		
		<div class="col-md-12" >
			<label for="usr">Descripción:</label>
			<div id="summernote">
				<?php echo $description ?>
			</div>
			<label style="display: none" id="id_tema"><?php echo $id_monthly_theme ?> </label>
			<label style="display: none" id="mes"><?php echo $mounth ?> </label>
		</div>
		<div class="form-group col-md-6  col-xs-12">
			<button onclick="get_text()" type="button" class="btn btn-success">Actualizar</button>
	    </div>
	</div>
</div>
