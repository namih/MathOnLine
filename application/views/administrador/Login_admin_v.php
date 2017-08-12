		
		<script src="statics/js/Login_admin/extensiones.js"></script>
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
    							<td> <?php echo $temas[$i]['mounth'] ?></td>
    							<td> <?php echo $temas[$i]['title'] ?></td>
    							<td> <a href="<?php echo base_url(); ?>Home_admin_c/editor_tema?id_tema=<?php echo $temas[$i]['id_monthly_theme'] ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a> </td>
    						</tr>
    					<?php }
					?>
  				</table>
			</div>
			<div class="col-md-6 col-xs-12">
				<h2>Calendario Escolar</h2>
				<img class="img-responsive" src="statics/img/calendario_uam/calendario_uam.png"/>
				<div class="input-file-wrapper">
        			<form enctype="multipart/form-data" class="formulario" >
        				<input type="file" multiple="multiple" maxlength="3" id="archivos" />
					</form>
				</div>
				
				<p class="text-info">NOTA: Es necesario cargar los tres archivos imagen, pdf, docx</p>
				<button onclick="cargar_archivos()" type="button" class="btn btn-primary">Subir archivos</button>
				
			</div>	
		</div>
	
