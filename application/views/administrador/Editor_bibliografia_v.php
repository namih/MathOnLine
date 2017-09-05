<script src="<?php echo base_url(); ?>statics/js/Login_admin/material_complementario.js"></script>
<div class="container" style="margin-top:15%;">

	<div class="container-fluid">
		<div class="input-group col-lg-12 col-md-12 col-xs-12">
			<div class="form-group has-feedback col-md-12  col-xs-12" >
				<label for="titulo" >Titulo:</label>
				<input type="text" class="form-control" id="titulo" value="<?php echo $title ?>">
			</div>
			<div class="form-group has-feedback col-md-6  col-xs-12"  >
				<label>Imágen del título</label>
				<img width="55%" id="img_titulo" class="img-responsive" src="../..<?php echo $book_image ?>"/>
				<div class="input-file-wrapper">
					<form enctype="multipart/form-data" class="formulario" >
						<input onclick="mostrar_imagen()" type="file"  maxlength="1" accept="image/*" id="img_libro" />
					</form>

				</div>

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
				<input type="text" class="form-control" id="anio" value="<?php echo $year ?>">
			</div>
			<div class="form-group has-feedback col-md-6  col-xs-12">
				<label>País</label>
				<input type="text" class="form-control" id="pais" value="<?php echo $place_publication ?>">
			</div>

			<div class="form-group col-md-12  col-xs-12">
				<button onclick="get_bibliografia()" type="button" class="btn btn-success">
					Actualizar
				</button>
			</div>
			<label style="display: none" id="id_usuario"><?php echo $id_user ?>
			</label>
			<label style="display: none" id="id_biblio"><?php echo $id_bibliography ?>
			</label>
		</div>

	</div>

		
		
		