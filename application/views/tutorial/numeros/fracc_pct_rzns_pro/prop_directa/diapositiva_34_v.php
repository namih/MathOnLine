<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Completa la tabla que relaciona la altura del objeto con la longitud de su sombra.</p>
    <p>Supongamos que la sombra se midió en el mismo lugar y misma hora.</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:38%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Altura del objeto (m)</th>
                    <th class="text-center">Longitud de la sombra (m)</th>
                </tr>
            	<tr>
                    <td>
                        <b>0.55</b>
                    </td>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="1" size="4" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>80</b>
            		</td>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="2" size="4" />
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>1</b>
                    </td>
                    <td>
                        <b>1.5</b>
                    </td>
                </tr>
                <tr>
            		<td>
            			<b>1.25</b>
            		</td>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="3" size="4" />
            		</td>
            	</tr>
                <tr>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="4" size="4" />
                    </td>
                    <td>
                        <b>2.4</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>1.8</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="5" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="6" size="4" />
                    </td>
                    <td>
                        <b>4.5</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="7" size="4" />
                    </td>
                    <td>
                        <b>15</b>
                    </td>
                </tr>
        </table><br />
        <p>¿Por cuál número hay que multiplicar la columna de la izquierda para obtener los números en la columna de la derecha? <input type="text" style="text-align: center; color: black;" id="8" size="4" /></p><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>