<DOCTYPE html>  
<html lang="es">  
    <head>  
        <meta charset="utf-8"/>  
        <title>Verificar Nombre de usuario</title>  
        <link rel="shortcut icon" href="favicon"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
    </head>  
    <body>  
        <div class="container">
        	<div class="col-md-6 col-xs-12">
        		<h3>Temas</h3>
        		<table class="table">
        			<thead>
        				<tr>
        					<th>Mes</th>
        					<th>Titulo</th>
        					<th>Editar</th>
        				</tr>
        			</thead>
        			<tbody>
        				<?php for ($i=0; $i < count($temas); $i++) { ?>
							<tr>
								<td> <?php echo $temas[$i]['mounth'] ?> </td>
								<td> <?php echo $temas[$i]['title'] ?> </td>
								<td> <a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a> </td>
							</tr>
						<?php }  
        				
        				?>
	        		</tbody>
	        	</table>
        	</div>
        	<div class="col-md-6 col-xs-12" align="center">
        		<h3>Calendario escolar</h3>
        		<img class="img-responsive" width="75%" src="http://www.uam.mx/calendario/cal_2016-2017_ses401.png" />
        		<div class="input-file-wrapper">
        			<form enctype="multipart/form-data" class="formulario">
        				<input name="archivo" type="file" id="imagen" accept="image/*"/>
					</form>
				</div>
				<div class="input-file-wrapper">
        			<form enctype="multipart/form-data" class="formulario">
        				<input name="archivo" type="file" id="imagen" accept="application/pdf"/>
					</form>
				</div>
				<div class="input-file-wrapper">
        			<form enctype="multipart/form-data" class="formulario">
        				<input name="archivo" type="file" id="imagen" accept="application/docx"/>
					</form>
				</div>
				<button onclick="subir_imagen()" type="button" class="btn btn-primary">Subir archivos</button>
				<script type="text/javascript" charset="utf-8">
					function subir_imagen () {
						var formData = new FormData($(".formulario")[0]);
						var data1="";
						$.ajax({
							url: base_url+'/test_models_c/guardar_imagen',
							type: 'POST',
							data: formData,
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
        </body>  
</html>