<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
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
                        <b>19.3</b>
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
                    <td>
                        <b>19.3</b>
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
                        <b>19.3</b>
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
                        <b>19.3</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>3</b>
                    </td>
                    <td>
                        <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math></b>
                    </td>
                    <td>
                        <b>19.3</b>
                    </td>
                </tr>
        </table></br>
    <p>¿Qué volumen corresponde a 3 gramos de oro?</p>
    <img src="">
    <p>Para responder esta pregunta, recuerda que los <b>productos cruzados</b> son <b>iguales</b> 2.5(<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>) = 3(48.25)</p>
    <p>Despejando <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> queda la siguiente expresión. Resuelve la operacion:</p>
    <h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> = <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>3(48.25)</mi><mi>2.5</mi></mfrac></math> = 
    	<input type="text" style="text-align: center; color: black;" id="1" size="3" /></h4>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>