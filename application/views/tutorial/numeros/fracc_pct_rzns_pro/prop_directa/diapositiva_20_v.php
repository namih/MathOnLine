<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
    <p>Un hospital compra jeringas al mayoreo. El proveedor proporciona la siguiente tabla de precios:</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th class="text-center">Número de jeringas</th>
                    <th class="text-center">Precio total</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>
            			<b>10</b>
            		</td>
            		<td>
            			<b>$1,500</b>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>20</b>
            		</td>
            		<td>
            			<b>$1,900</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>50</b>
                    </td>
                    <td>
                        <b>$12,000</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>100</b>
                    </td>
                    <td>
                        <b>$13,800</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>200</b>
                    </td>
                    <td>
                        <b>$17,500</b>
                    </td>
                </tr>
            </tbody>
        </table>
    <p>¿Qué sucede con el precio total a medida que aumenta la cantidad de jeringas?</p>
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
		<p>Cuando la cantidad de jeringas aumenta al doble, ¿aumenta también el precio total al doble?</p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="5" /> Si<br />
					<input type="checkbox" id="6" /> No<br /><br />
				</td>
			</table>
		</form>
        <p>¿Es proporcional el precio con el número de jeringas que se compran?</p>
        <form method="post" action="#">
            <table>
                <td align="left">
                    <input type="checkbox" id="7" /> Si<br />
                    <input type="checkbox" id="8" /> No<br /><br />
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