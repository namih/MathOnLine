		<div class="container">
			<div class="col-md-6 col-xs-12">
				<h2>Tema del mes.</h2>
				<table class="table ">
    				<thead>
      					<tr>
        					<th>Tema</th>
        					<th>Mes</th>
        					<th>Editar</th>
      					</tr>
    				</thead>
    				<tbody>
      					
    				</tbody>
    					<?php for ($i=0;$i < count($temas);$i++){ ?>
    						<tr>
    							<td> <?php echo $temas[$i]['title'] ?></td>
    							<td> <?php echo $temas[$i]['mounth'] ?></td>
    							<td> <a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a> </td>
    						</tr>
    					<?php }
					?>
  				</table>
			</div>
			<div class="col-md-6 col-xs-12">
				<h2>Calendario Escolar</h2>
				<img class="img-responsive" src="statics/img/calendario_uam/calendario_uam.png"/>
				<div class="input-file-wrapper">
        			<form enctype="multipart/form-data" class="formulario">
        				<input name="archivo" type="file" multiple="multiple" id="archivos" />
					</form>
				</div>
				
				<p class="text-info">NOTA: Es necesario cargar los tres archivos imagen, pdf, docx</p>
				<button onclick="cargar_imagen()" type="button" class="btn btn-primary">Subir archivos</button>
				<script type="text/javascript" charset="utf-8">
				function cargar_imagen () {
					
					var archivos = document.getElementById("archivos");
					var archivo = archivos.files;
					
					var archivos = new FormData();
					
					for (var i=0; i < archivo.length; i++) {
					  archivos.append('archivo'+i, archivo[i]);
					};	
					$.ajax({
						url: base_url+'/test_models_c/guardar',
						type: 'POST',
						data: archivos,
						async:false,
						cache: false,
						contentType: false,
						processData: false,
						success: function(data){
							alert('Archivo guardado '+data);
							return data;
								
							},
							error: function(){
								console.log("Error to upload the image");
							}
						});
					}
					</script>
			</div>	
		</div>
	
