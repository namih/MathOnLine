<!-- include summernote css/js-->
<script src="<?php echo base_url(); ?>statics/js/summernote/summernote.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/js/summernote/summernote.css">

<!-- Lenguaje español -->
<script src="<?php echo base_url(); ?>statics/js/summernote/lang/summernote-es-ES.js"></script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">  
  	<hr style="height: 2px; border: 0; color: #666; background-color: #008c00; margin-top: 0px !important;  margin-bottom: 0px !important; ">
</div> 

<div class="container-fluid">
	<div class="col-md-12">
		<div class="col-md-12">
			<div class="form-group col-md-6">
				<label for="usr">Titulo:</label>
				<input type="text" class="form-control" id="usr" value="<?php echo $title ?>">
			</div>
		</div>
		<div class="col-md-12">
			<label for="usr">Descripción:</label>
			<div id="summernote">
				<?php echo $description ?>
			</div>
			<script>
				$(document).ready(function() {
					$('#summernote').summernote({
						lang: 'es-ES' // default: 'en-US'
					});
				});
				
				function get_text() {
				  var markupStr = $('#summernote').summernote('code');
				  
				  var id = 1;
				  var mes = 7;
				  var titulo = 'Los espermatozoides hacen cálculos matemáticos muy complejos';
				  
				  
				 
				 var datos = {id_user:id,
				 				mounth:mes,
				 				title:titulo,
				 				description:markupStr,};
				 
				 var url_update = base_url + '/test_models_c/actualizar_tema';
					$.ajax({
					type:'post',
					url: url_update,
					data: {datos:datos},
					datatype: 'json',
					cache: false,
					success: function() {
						alert('OK')
					},
					error: function() {
						alert('failure');
					}
				});
				}
			</script>
		</div>
		
		<div id="contenedor">
		  
		</div>
		
		<button onclick="get_text()" type="button" class="btn btn-success">Get Texto</button>
		
	</div>  
</div>