<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
    <p>Divide el volumen entre la masa y escribe el cociente en la columna de la derecha:</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:35%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Masa <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><mi>g</mi><mo>)</mo></math></th>
                    <th class="text-center">Volumen <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><mi>c</mi><msup><mi>m</mi><mn>3</mn></msup><mo>)</mo></math></th>
                    <th class="text-center">Volumen/Masa</th>
                </tr>
            	<tr>
            		<td>
            			<b>0.5</b>
            		</td>
            		<td>
            			<b>9.65</b>
            		</td>
                    <td>
                        <b><input type="text" style="text-align: center; color: black;" id="1" size="4" /></b>
                    </td>
            	</tr>
            	<tr>
            		<td>
            			<b>1</b>
            		</td>
            		<td>
            			<b>19.3</b>
            		</td>
                    <td>
                        <b><input type="text" style="text-align: center; color: black;" id="2" size="4" /></b>
                    </td>
            	</tr>
                <tr>
                    <td>
                        <b>1.5</b>
                    </td>
                    <td>
                        <b>28.95</b>
                    </td>
                    <td>
                        <b><input type="text" style="text-align: center; color: black;" id="3" size="4" /></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>2</b>
                    </td>
                    <td>
                        <b>38.6</b>
                    </td>
                    <td>
                        <b><input type="text" style="text-align: center; color: black;" id="4" size="4" /></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>2.5</b>
                    </td>
                    <td>
                        <b>48.25</b>
                    </td>
                    <td>
                        <b><input type="text" style="text-align: center; color: black;" id="5" size="4" /></b>
                    </td>
                </tr>
        </table></br>
    <p>El cociente entre el volumen y la masa</p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="6" /> Cambia según la masa<br />
					<input type="checkbox" id="7" /> Se mantiene constante<br />
                    <input type="checkbox" id="8" /> Cambia según el volumen<br /><br />
				</td>
			</table>
		</form>
        <p>¿Por cuál número dede multiplicar la columna <i>Masa</i> para obtener los valores de la columna <i>Volumen</i>? <input type="text" style="text-align: center; color: black;" id="9" size="4" /></p>
        <p>En una relación de proporcionalidad el cociente entre el valor de una variable y el correspondiente valor en la otra siempre es <i>constante</i>. Éste número se llama <i>constante de proporcionalidad</i>.</p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>