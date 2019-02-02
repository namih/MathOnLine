<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Completa la tabla con las cantidades de miligramos de medicamento en polvo en relación a los mililitros de liquido que deben mezclarse:</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:32%; margin:0 auto;">
            
                <tr class="success">
                    <th class="text-center">Mililitros de agua</th>
                    <th class="text-center">Miligramos de medicamento en polvo</th>
                </tr>
            
           
            	<tr>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="1" size="4" />
            		</td>
            		<td >
            			<b>20</b>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>1/2</b>
            		</td>
            		<td>
            			<b>40</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="2" size="4" />
                    </td>
                    <td>
                        <b>80</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="3" size="4" />
                    </td>
                    <td>
                        <b>120</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>2</b>
                    </td>
                    <td>
                        <b>160</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>4</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="4" size="4" />
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
                        <b>8</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="6" size="4" />
                    </td>
                </tr>
           
        </table><br />
        <p>¿Cuántas veces aumenta el número de mililitros de agua si la cantidad de medicamento aumenta cuatro veces, como por ejemplo de 20 a 80? 
        	<input type="text" style="text-align: center; color: black;" id="7" size="4" /> veces</p>
        <p>¿Y si aumenta 5 veces? <input type="text" style="text-align: center; color: black;" id="8" size="4" /> veces </p><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>