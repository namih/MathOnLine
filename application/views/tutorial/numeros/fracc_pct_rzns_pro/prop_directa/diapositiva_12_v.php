<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:32%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th class="text-center">Mililitros de agua</th>
                    <th class="text-center">Miligramos de medicamento en polvo</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>
            			<b>1/4</b>
            		</td>
            		<td>
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
                        <b>1</b>
                    </td>
                    <td>
                        <b>80</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>3/2</b>
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
                        <b>320</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>5</b>
                    </td>
                    <td>
                        <b>400</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>8</b>
                    </td>
                    <td>
                        <b>640</b>
                    </td>
                </tr>
            </tbody>
        </table><br />
        <p>¿Por cuál número debes multiplicar los números de la columna de la izquierda (mililitros de agua) para obtener los números de la
        	columna de la derecha (miligramos de medicamento)? 
        	<input type="text" style="text-align: center; color: black;" id="1" size="4" /></p><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>