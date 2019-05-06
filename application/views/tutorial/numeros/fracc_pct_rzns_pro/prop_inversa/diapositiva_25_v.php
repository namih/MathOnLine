<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
	<p>Completa la tabla con el tiempo que tardan distinto número de albañiles en construir el mismo muro de 12 <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup></math>.</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:75%; margin:0 auto;">
            	<tr>
                    <td class="success">
                        <b>Número de albañiles</b>
                    </td>
            		<td>
            			<b>1</b>
            		</td>
            		<td style="width: 10%">
            			<b>2</b>
            		</td>
            		<td>
            			<b>3</b>
            		</td>
            		<td>
            			<b>4</b>
            		</td>
                    <td>
                        <b>5</b>
                    </td>
                    <td>
                        <b>6</b>
                    </td>
                    <td>
                        <b>7</b>
                    </td>
                    <td>
                        <b>8</b>
                    </td>
                    <td>
                        <b>9</b>
                    </td>
            	</tr>
            	<tr>
                    <td class="success">
                        <b>Tiempo (horas)</b>
                    </td>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="1" size="3" />
            		</td>
            		<td>
            			<b>2</b>
            		</td>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="2" size="3" />
            		</td>
            		<td>
                        <input type="text" style="text-align: center; color: black;" id="3" size="3" />
            		</td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="4" size="3" />
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="5" size="3" />
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="6" size="3" />
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="7" size="3" />
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="8" size="3" />
                    </td>
            	</tr>
        </table><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>