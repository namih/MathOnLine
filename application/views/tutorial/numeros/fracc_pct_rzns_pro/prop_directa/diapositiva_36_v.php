<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Recordemos el problema del medicamento que se vio anteriormente: Una enfermera debe dar a un paciente un medicamento que debe mezclarse con agua para poder tomar. El instructivo dice que el contenido en polvo del sobre, que contiene 160 mg, debe mezclarse con 2 ml de agua.</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:35%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Miligramos de medicamento en polvo</th>
                    <th class="text-center">Miligramos de agua</th>
                </tr>
            	<tr>
                    <td>
                        <b>20</b>
                    </td>
            		<td>
            			<b>1/4</b>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>40</b>
            		</td>
            		<td>
            			<b>1/2</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>80</b>
                    </td>
                    <td>
                        <b>1</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>120</b>
                    </td>
                    <td>
                        <b>3/2</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>160</b>
                    </td>
                    <td>
                        <b>2</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>320</b>
                    </td>
                    <td>
                        <b>4</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>400</b>
                    </td>
                    <td>
                        <b>5</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>640</b>
                    </td>
                    <td>
                        <b>8</b>
                    </td>
                </tr>
        </table><br />
        <p>¿Por cuál número hay que multiplicar la columna de la izquierda para obtener los números en la columna de la derecha? <input type="text" style="text-align: center; color: black;" id="1" size="4" /></p><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>