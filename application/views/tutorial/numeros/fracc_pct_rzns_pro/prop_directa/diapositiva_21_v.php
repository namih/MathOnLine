<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
    <p>Observa la siguiente tabla con los datos referentes a la masa y el volumen del oro.</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Masa <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><mi>g</mi><mo>)</mo></math></th>
                    <th class="text-center">Volumen <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><mi>c</mi><msup><mi>m</mi><mn>3</mn></msup><mo>)</mo></math></th>
                </tr>
            	<tr>
            		<td>
            			<b>0.5</b>
            		</td>
            		<td>
            			<b>9.65</b>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>1</b>
            		</td>
            		<td>
            			<b>19.3</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>1.5</b>
                    </td>
                    <td>
                        <b>28.95</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>2</b>
                    </td>
                    <td>
                        <b>38.6</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>2.5</b>
                    </td>
                    <td>
                        <b>48.25</b>
                    </td>
                </tr>
        </table>
        <p>¿Qué sucede con el volumen del oro a medida que aumenta la masa?</p>
        <form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="1" /> Aumenta en la misma manera<br />
					<input type="checkbox" id="2" /> Disminuye de la misma manera<br />
					<input type="checkbox" id="3" /> Aumenta pero no de la misma manera<br />
					<input type="checkbox" id="4" /> Se queda igual<br /><br />
				</td>
			</table>
		</form><br />
    <p>Cuando la masa aumenta al doble, ¿aumenta también el volumen al doble?</p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="5" /> Si<br />
					<input type="checkbox" id="6" /> No<br /><br />
				</td>
			</table>
		</form>
        <p>¿Es proporcional el volumen del oro con respecto a su masa?</p>
        <form method="post" action="#">
            <table>
                <td align="left">
                    <input type="checkbox" id="7" /> Si<br />
                    <input type="checkbox" id="8" /> No<br /><br />
                </td>
            </table>
        </form>
        <p>¿Es posible conocer en este ejemplo el valor unitario, es decir, el volumen de un grano de oro?</p>
        <form method="post" action="#">
            <table>
                <td align="left">
                    <input type="checkbox" id="9" /> Si<br />
                    <input type="checkbox" id="10" /> No<br /><br />
                </td>
            </table>
        </form>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>