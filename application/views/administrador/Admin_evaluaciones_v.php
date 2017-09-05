<script src="../statics/js/admin_evaluacion.js"></script>

<div class="container-fluid">
	<div class="col-md-12 col-xs-12">
		<h2>Administrador de evaluaciones</h2>
		 <div class="form-group col-md-6 col-xs-12">
		 	<select onchange="cargar_subtema()" class="form-control" id ="tema">
		 		<option value="0">Seleccione un tema</option>
		 		<?php for ($i=0; $i < count($temas) ; $i++) { ?>
		 			<option value="<?php echo $temas[$i]['id_theme']; ?>"><?php echo $temas[$i]['theme']?></option>
		 		<?php }?>
		 	</select>
		</div>
		<div class="form-group col-md-6 col-xs-12">
		 	<select onchange="cargar_evaluaciones()" class="form-control" id ="subtema" disabled>
		 		<option value="0">Seleccione un subtema</option>
		 		
		 	</select>
		</div>
		<div id="admin_tabla" class="col-md-12 col-xs-12">
			
		</div>
    </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="confirmacion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Confirmación</h4>
        </div>
        <div class="modal-body">
          <p>Esta seguro eliminar esta pregunta >:3 Ya no podra recuperarla posteriormente.</p>
        </div>
        <div class="modal-footer" id="modal_boton">
        	
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
      
    </div>
  </div>
