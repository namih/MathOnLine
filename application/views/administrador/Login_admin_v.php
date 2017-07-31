<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
  
        <title>Verificar Nombre de usuario</title>  
        <link rel="shortcut icon" href="favicon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		
		<!-- Subir múltiples archivos     -->
		<script src="../statics/js/jquery.MultiFile.js/"></script>    

	</head>

	<body>
		<header>
			
		</header>
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
				<img class="img-responsive" src="../statics/img/calendario_uam/calendario_uam.png"/>
				<div class="input-file-wrapper">
        			<form enctype="multipart/form-data" class="formulario">
        				<input name="archivo" type="file" id="imagen" accept="image/*"/>
					</form>
				</div>
				<div class="input-file-wrapper">
        			<form enctype="multipart/form-data" class="formulario">
        				<input name="archivo" type="file" id="pdf" accept="application/pdf"/>
					</form>
				</div>
				<div class="input-file-wrapper">
        			<form enctype="multipart/form-data" class="formulario">
        				<input name="archivo" type="file" id="doc" accept="application/docx"/>
					</form>
				</div>
				<p class="text-info">NOTA: Es necesario cargar los tres archivos imagen, pdf, docx</p>
				<button onclick="cargar_imagen()" type="button" class="btn btn-primary">Subir archivos</button>
				<script type="text/javascript" charset="utf-8">
				function cargar_imagen () {
					
					var archivos = [];
					
					var formData1 = new FormData($(".formulario_img")[0]);
					var formData2 = new FormData($(".formulario_pdf")[0]);
					var formData3 = new FormData($(".formulario_word")[0]);
					archivos.push("formulario_img");
					archivos.push("formulario_pdf");
					archivos.push("formulario_word");	
					$.ajax({
						url: base_url+'/test_models_c/guardar_imagen',
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
			</div>	
		</div>
	</body>
</html>
