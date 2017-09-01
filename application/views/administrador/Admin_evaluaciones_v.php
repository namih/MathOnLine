<script src="statics/js/Admin_evaluation.js"></script>

<div class="container-fluid">
	<div class="col-md-6 col-xs-12">
		<h2>Evaluaciones</h2>
		 <div class="form-group col-md-6 col-xs-12">
		 	<select onchange="cargar_subtema()" class="form-control" id ="tema">
		 		<option value="0">Seleccione tema...</option>
		 		<?php for ($i=0; $i < count($temas) ; $i++) { ?>
		 			<option value="<?php echo $temas[$i]['id_theme']; ?>"><?php echo $temas[$i]['theme']?></option>
		 		<?php }?>
		 	</select>
		</div>
		<div class="form-group col-md-6 col-xs-12">
		 	<select onchange="cargar_evaluaciones()" class="form-control" id ="subtema" disabled>
		 		<option value="0">Subtema</option>
		 		
		 	</select>
		</div>
		<div id="admin_tabla" class="col-md-12 col-xs-12">
			
		</div>
    </div>
</div>
	
