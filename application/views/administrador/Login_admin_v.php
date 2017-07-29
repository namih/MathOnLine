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
				<button onclick="subir_imagen()" type="button" class="btn btn-primary">Subir archivos</button>
				<script type="text/javascript" charset="utf-8">
			</div>	
		</div>
	</body>
</html>
