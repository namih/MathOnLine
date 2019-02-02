<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Completa la siguiente tabla con las medidas de agua y fórmula.</p>
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
            			<input type="text" style="text-align: center; color: black;" id="1" size="4" />
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
            			<input type="text" style="text-align: center; color: black;" id="2" size="4" />
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>1 1/2</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="3" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>3</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="4" size="4" />
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
                        <input type="text" style="text-align: center; color: black;" id="5" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="6" size="4" />
                    </td>
                    <td>
                        <b>20</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="7" size="4" />
                    </td>
                    <td>
                        <b>26</b>
                    </td>
                </tr>
            </tbody>
        </table><br />
        <p>¿Por cuál número debes multiplicar los números de la columna izquierda (medidas de fórmula) si quieres obtener los de la 
        	derecha (onzas de agua)? <input type="text" style="text-align: center; color: black;" id="8" size="4" /> veces</p><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>