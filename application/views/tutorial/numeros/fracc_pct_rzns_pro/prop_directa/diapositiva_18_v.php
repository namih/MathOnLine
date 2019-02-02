<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th class="text-center">Medidas de fórmula</th>
                    <th class="text-center">Onzas de agua</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table><br />
        <p>Si aumenta al doble el número de medidas de fórmula, el número de onzas de agua:</p>
        <form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="1" /> Aumenta el doble<br />
					<input type="checkbox" id="2" /> Disminuye a la mitad<br />
					<input type="checkbox" id="3" /> Aumenta pero no al doble<br />
					<input type="checkbox" id="4" /> Se queda igual<br /><br />
				</td>
			</table>
		</form><br />
		<p>¿Es proporcional la cantidad de agua con el numero de medidas de fórmulas?</p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="5" /> Si<br />
					<input type="checkbox" id="6" /> No<br /><br />
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