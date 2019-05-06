<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:36%; margin:0 auto;">
            	<tr>
                    <td class="success">
                        <b>Número de albañiles</b>
                    </td>
            		<td>
            			<b>1</b>
            		</td>
            		<td>
            			<b>2</b>
            		</td>
            		<td>
            			<b>3</b>
            		</td>
            		<td>
            			<b>4</b>
            		</td>
                    <td>
                        <b>5</b>
                    </td>
                    <td>
                        <b>6</b>
                    </td>
                    <td>
                        <b>7</b>
                    </td>
                    <td>
                        <b>8</b>
                    </td>
                    <td>
                        <b>9</b>
                    </td>
            	</tr>
            	<tr>
                    <td class="success">
                        <b>Tiempo (horas)</b>
                    </td>
            		<td>
            			<b>4</b>
            		</td>
            		<td>
            			<b>2</b>
            		</td>
            		<td>
            			<b>4/3</b>
            		</td>
            		<td>
                        <b>1</b>
            		</td>
                    <td>
                        <b>4/5</b>
                    </td>
                    <td>
                        <b>4/6</b>
                    </td>
                    <td>
                        <b>4/7</b>
                    </td>
                    <td>
                        <b>4/8</b>
                    </td>
                    <td>
                        <b>4/9</b>
                    </td>
            	</tr>
        </table><br />
    <p>La ecuación que relaciona el número de albañiles con el tiempo que tardan en construir el muro si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> representa el número de albañiles y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> representa el tiempo es:</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="1" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi></math><br />
                <input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>4</mn><mi>x</mi></mfrac></math><br />
                <input type="checkbox" id="3" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>2</mn><mi>x</mi></mfrac></math><br /><br />
            </td>
        </table>
    </form>
    <p>El número de albañiles y el tiempo están relacionados de manera:</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="4" /> Directamente proporcional<br />
                <input type="checkbox" id="5" /> Inversamente proporcional<br /><br />
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