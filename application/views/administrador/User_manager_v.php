<script src="statics/js/admin_usuarios.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" type="text/css" media="screen" title="no title" charset="utf-8"/>

<div class="container-fluid">
	<div class="form-group col-md-12 col-xs-12">
		<h2>Administrador de usuarios</h2>
		<br />
		<br />
		 <div class="form-group">
		 	<select onchange="cargar_usuarios()" class="form-control" id ="usuarios">
		 		<option value="0">Seleccione tipo de usuario</option>
		 		<option value="1">Administrador</option>
		 		<option value="2">Comite de Cursos Complementarios</option>
		 		<option value="3">Alumnos</option>
		 	</select>
		</div>
		<div id="admin_tabla" class="col-md-12 col-xs-12">
			
		</div>
    </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="confirmar_activacion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Activación</h4>
        </div>
        <div class="modal-body">
          <p>Esta seguro en <b>ACTIVAR</b> la cuenta del usuario.</p>
        </div>
        <div class="modal-footer" id="modal_boton_activacion">
        	
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="confirmar_desactivacion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Desactivación</h4>
        </div>
        <div class="modal-body">
          <p>Esta seguro en <b>DESACTIVAR</b> la cuenta del usuario.</p>
        </div>
        <div class="modal-footer" id="modal_boton_desactivacion">
        	
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
      
    </div>
  </div>

