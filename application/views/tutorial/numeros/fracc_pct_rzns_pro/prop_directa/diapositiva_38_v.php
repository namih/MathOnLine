<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Ahora veamos nuevamente el problema de la fórmula para los bebés.</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Medidas de fórmula</th>
                    <th class="text-center">Onzas de agua</th>
                </tr>
            	<tr>
                    <td>
                        <b>1/2</b>
                    </td>
            		<td>
            			<b>1</b>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>1</b>
            		</td>
            		<td>
            			<b>2</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>1 1/2</b>
                    </td>
                    <td>
                        <b>3</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>3</b>
                    </td>
                    <td>
                        <b>6</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>4 1/2</b>
                    </td>
                    <td>
                        <b>9</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>5</b>
                    </td>
                    <td>
                        <b>10</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>10</b>
                    </td>
                    <td>
                        <b>20</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>12 1/2</b>
                    </td>
                    <td>
                        <b>25</b>
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