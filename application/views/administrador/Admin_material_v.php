<script src="statics/js/Login_admin/extensiones.js"></script>
<script src="statics/js/Login_admin/material_complementario.js"></script>
		<div class="container">
			<div class="col-md-6 col-xs-12">
				<h2>Ligas de interés </h2>Agregar nueva liga  <a href="<?php echo base_url(); ?>Complementary_material_c/agregar_links/"><span class="glyphicon glyphicon-plus "></span></a>
				<table class="table ">
    				<thead>
      					<tr>
      						<th><a href=""><span onclick="liga_seleccionada()" id="eliminar_l" class="glyphicon glyphicon-trash" style="color:red"></span></a></th>
        					<th>Titulo</th>
        					<th>Liga</th>
        					<th>Editar</th>
      					</tr>
    				</thead>
    				<tbody>
      					
    				</tbody>
    					<?php for ($i=0;$i < count($ligas_interes);$i++){ ?>
    						<tr>
    							<td> <input name="<?php echo $ligas_interes[$i]['id_links_interest'] ?>" id="link_<?php echo $ligas_interes[$i]['id_links_interest'] ?>" type="checkbox" value=""></td>
    							<td> <?php echo $ligas_interes[$i]['title'] ?></td>
    							<td> <?php echo $ligas_interes[$i]['link'] ?></td>
    							<td> <a href="<?php echo base_url(); ?>Complementary_material_c/editor_liga/<?php echo $ligas_interes[$i]['id_links_interest'] ?>"><span id="edit_link" class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a> </td>
    						</tr>
    					<?php }
					?>
  				</table>
  				
			</div>
			<div class="col-md-6 col-xs-12">
				<h2>Bibliografía</h2> Agregar nueva bibliografía  <a href="<?php echo base_url(); ?>Complementary_material_c/agregar_biblio/"><span  id="add_biblio" class="glyphicon glyphicon-plus "></span></a>
				 
				<table class="table ">
    				<thead>
      					<tr>
      						<th><span onclick="bibliografia_seleccionada()" id="eliminar_b" class="glyphicon glyphicon-trash" style="color:red"></span></th>
        					<th>Titulo</th>
        					<th>Autor </th>
        					<th>Editar</th>
      					</tr>
    				</thead>
    				<tbody>
      					
    				</tbody>
    					<?php for ($i=0;$i < count($bibliografia);$i++){ ?>
    						<tr> 
    							<td><input name="<?php echo $bibliografia[$i]['id_bibliography'] ?>" id="biblio_<?php echo $bibliografia[$i]['id_bibliography'] ?>" type="checkbox" value=""> </td>
    							<td> <?php echo $bibliografia[$i]['title'] ?></td>
    							<td> <?php echo $bibliografia[$i]['author'] ?></td>
    							<td> <a href="<?php echo base_url(); ?>Complementary_material_c/editor_biblio/<?php echo $bibliografia[$i]['id_bibliography'] ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a> </td>
    						</tr>
    					<?php }
					?>
  				</table>
  				
			</div>
		</div>
		<label style="display: none" id="numero_link"><?php echo count($ligas_interes) ?> </label>
		<label style="display: none" id="numero_biblio"><?php echo count($bibliografia) ?> </label>	
	</div>
	
	<div id="Eliminar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar</h4>
      </div>
      <div class="modal-body">
        <p><strong> ¿Estás seguro que deseas eliminar el tema del mes?</strong></p>
      </div>
      <div id="botones" class="modal-footer">
      	
      	
      </div>
    </div>

  </div>
</div>
