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
        </table></br>
    <p>Si tomamos los dos primeros renglones de la tabla, del ejercicio anterior, podemos concluir que:</p>
    <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/prop_directa/diapositiva_23.png" align="center"/>
    <p>Observa que tenemos dos <i>razones</i> equivalentes: La razon 0.5 a 9.65, es equivalente a la razon 1 a 19.3</p>
    <p>Ahora obten los siguientes productos cruzados:</p>
    <p>9.65(1) = <input type="text" style="text-align: center; color: black;" id="1" size="4" /></p>
    <p>(0.5)(19.3) = <input type="text" style="text-align: center; color: black;" id="2" size="4" /></p></br>
    <p>Los productos cruzados son:</p>
        <form method="post" action="#">
            <table>
                <td align="left">
                    <input type="checkbox" id="3" /> Iguales<br />
                    <input type="checkbox" id="4" /> Diferentes<br /><br />
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