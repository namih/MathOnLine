<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Número de paletas</th>
                    <th class="text-center">Precios (Pesos)</th>
                </tr>
            	<tr>
            		<td>
            			<b>1</b>
            		</td>
            		<td>
            			<b>6.25</b>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>2</b>
            		</td>
            		<td>
            			<b>12.5</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>3</b>
                    </td>
                    <td>
                        <b>18.75</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>4</b>
                    </td>
                    <td>
                        <b>25</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>5</b>
                    </td>
                    <td>
                        <b>31.25</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>6</b>
                    </td>
                    <td>
                        <b>37.5</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>7</b>
                    </td>
                    <td>
                        <b>43.75</b>
                    </td>
                </tr>
        </table><br />
    <p>La ecuación que relaciona el número de paletas (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>) con el precio correspondiente (<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math>) es :</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="1" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6.25</mn><mi>x</mi></math><br />
                <input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>6.25</mn><mi>x</mi></mfrac></math><br />
                <input type="checkbox" id="3" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6</mn><mo>.</mo><mn>25</mn><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>x</mi></math><br /><br />
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