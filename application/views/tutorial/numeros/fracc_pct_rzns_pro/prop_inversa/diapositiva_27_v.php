<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
	<p>Completa la tabla de precios suponiendo que no hay descuento por comprar más paletas heladas.</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Número de paletas</th>
                    <th class="text-center">Precios (Pesos)</th>
                </tr>
            	<tr>
            		<td>
            			<b>1</b>
            		</td>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="1" size="4" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>2</b>
            		</td>
            		<td>
            			<b>12.5</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>3</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="2" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>4</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="3" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>5</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="4" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>6</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="5" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>7</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="6" size="4" />
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