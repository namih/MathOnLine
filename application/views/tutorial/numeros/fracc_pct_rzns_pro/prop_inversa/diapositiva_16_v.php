<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Número de pintores (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>)</th>
                    <th class="text-center">Superficie (<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup></math>) (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math>)</th>
                </tr>
            	<tr>
                    <td>
                        <b>1</b>
                    </td>
            		<td>
            			<b>60</b>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>2</b>
            		</td>
            		<td>
            			<b>120</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>3</b>
                    </td>
                    <td>
                        <b>180</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>4</b>
                    </td>
                    <td>
                        <b>240</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>5</b>
                    </td>
                    <td>
                        <b>300</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>6</b>
                    </td>
                    <td>
                        <b>360</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>7</b>
                    </td>
                    <td>
                        <b>420</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>8</b>
                    </td>
                    <td>
                        <b>480</b>
                    </td>
                </tr>
        </table><br />
        <p>¿Qué sucede con el número de metros cuadrados pintados cuando aumenta el doble el número de pintores?</p>
    <form method="post" action="#">
            <table>
                <td align="left">
                    <input type="checkbox" id="1" /> Aumenta el doble<br />
                    <input type="checkbox" id="2" /> Disminuye a la mitad<br />
                    <input type="checkbox" id="3" /> Se queda igual<br /><br />
                </td>
            </table>
    </form>
    <p>¿Qué sucede con el número de metros cuadrados pintados cuando disminuye en una tercera parte el número de pintores?</p>
    <form method="post" action="#">
            <table>
                <td align="left">
                    <input type="checkbox" id="4" /> Aumenta al triple<br />
                    <input type="checkbox" id="5" /> Disminuye a la tercera parte<br />
                    <input type="checkbox" id="6" /> Se queda igual<br /><br />
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