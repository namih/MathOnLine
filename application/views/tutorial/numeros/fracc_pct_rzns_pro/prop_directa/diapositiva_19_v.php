<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Una medicina para el estómago tiene la siguiente indicación en su etiqueta:</p>
	<p>Niños: 1 cucharada cada 8 horas.</p>
	<p>Aultos: 3 cucharadas cada 8 horas.</p>
	<p>¿Cuántas cucharadas debe tomar un niño de 4 años? <input type="text" style="text-align: center" id="1" size="4" /></p>
	<p>¿Cuántas cucharadas debe tomar un niño de 8 años? <input type="text" style="text-align: center" id="2" size="4" /></p>
	<p>¿Y un niño de 12? <input type="text" style="text-align: center" id="3" size="4" /></p>
	<p>¿Cuánto debe tomar un adulto de 24 años?	<input type="text" style="text-align: center" id="4" size="4" /></p><br />
	<p>Cuando la edad del paciente aumenta al doble, ¿aumenta también el número de cucharadas al doble?</p>
	<table>
		<tr>
           	<td>
           		<input type="checkbox" id="5" /> Si
           	</td>
        </tr>
        <tr>
    	   	<td>
           		<input type="checkbox" id="6" /> No
           	</td>
        </tr>
	</table>
	<br />
	<p>¿Es proporcional la edad del paciente con el número de cucharadas de jarabe que debe tomar?</p>
	<table>
		<tr>
           	<td>
           		<input type="checkbox" id="7" /> Si
           	</td>
        </tr>
        <tr>
    	   	<td>
           		<input type="checkbox" id="8" /> No
           	</td>
        </tr>
	</table>
	<br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>