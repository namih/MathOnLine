<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
	<p>Completa la tercera columna de la tabla con el producto de la primera columna por la segunda.</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:30%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Número de pintores (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>)</th>
                    <th class="text-center">Tiempo (dias) (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math>)</th>
                    <th class="text-center">Producto (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mi>y</mi></math>)</th>
                </tr>
            	<tr>
                    <td>
                        <b>1</b>
                    </td>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="1" size="4" />
            		</td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="2" size="4" />
                    </td>
            	</tr>
            	<tr>
            		<td>
            			<b>2</b>
            		</td>
            		<td>
            			<b>4</b>
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
                        <b>8/3</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="4" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>4</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="5" size="4" />
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