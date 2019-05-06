<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
	<p>Completa la tabla que relacional la velocidad del auto con el tiempo que tarda en recorrer 350 kilómetros.</p>
		<table class="table table-striped table-bordered table-condensed" style="text-align: center; width:25%; margin:0 auto;">
                <tr class="success">
                    <th class="text-center">Velocidad (Km/h)</th>
                    <th class="text-center">Tiempo (h)</th>
                </tr>
            	<tr>
            		<td>
            			<b>80</b>
            		</td>
            		<td>
            			<input type="text" style="text-align: center; color: black;" id="1" size="4" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<b>100</b>
            		</td>
            		<td>
            			<b>3.5</b>
            		</td>
            	</tr>
                <tr>
                    <td>
                        <b>120</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="2" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>140</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="3" size="4" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>160</b>
                    </td>
                    <td>
                        <input type="text" style="text-align: center; color: black;" id="4" size="4" />
                    </td>
                </tr>
        </table><br />
    <p>¿Cómo cambia el tiempo (t) al aumentar la velocidad (v)?</p>
    <form method="post" action="#">
        <table>
            <td align="left">
                <input type="checkbox" id="1" /> Aumenta en al misma proporción<br />
                <input type="checkbox" id="2" /> Disminuye en al misma proporción<br /><br />
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