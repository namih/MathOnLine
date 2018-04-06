<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid" id="div_1">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Factoriza el siguiente número, utilizando la tabla comenzando por sus factores primos más pequeños.</p>
	</div>	
	<div class="col-md-12  col-xs-12 table-responsive div-border0" id="tab" align="center">
		 <table class="table table-striped table-bordered table-condensed " id="myTable" style="width:30%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th> Número </th>
                    <th><b>Factor</b></th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="72" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="" onblur="valida_factor(1,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2" value="" onblur="valida_factor(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3" value="" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" value="" onblur="valida_factor(3,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base4" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" onblur="valida_factor(4,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base5" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" onblur="valida_factor(5,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base6" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura6"  readonly />
            		</td>
            	</tr>
            </tbody>
        </table>
        <br /><br />
        <p>Escribe el número como productos primos en el orden en el que fuiste obteniendo los factores.</p>
        <label>72=</label>
        <input class="input-sm input-top5" id="num1" size="5" />
        <label>X</label>
        <input class="input-sm input-top5" id="num2" size="5" />
        <label>X</label>
        <input class="input-sm input-top5" id="num3" size="5" />
        <label>X</label>
        <input class="input-sm input-top5" id="num4" size="5" />
        <label>X</label>
        <input class="input-sm input-top5" id="num5" size="5" />
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="valida5();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />

	<br />
</div>
<div class="container-fluid" id="div_2" style="display: none">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Factoriza el siguiente número, utilizando la tabla comenzando por sus factores primos más pequeños.</p>
	</div>	
	<div class="col-md-12  col-xs-12 table-responsive div-border0" id="tab" align="center">
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th> Número </th>
                    <th><b>Factor</b></th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base7" value="15" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura7" value="" onblur="valida_factor(7,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base8" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura8" value="" onblur="valida_factor(8,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base9" value="" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura9" value="" readonly />
            		</td>
            	</tr>
            </tbody>
        </table>
        <br /><br />
        <p>Escribe el número como productos primos en el orden en el que fuiste obteniendo los factores.</p>
        <label>15=</label>
        <input class="input-sm input-top5" id="num21" size="5" />
        <label>X</label>
        <input class="input-sm input-top5" id="num22" size="5" /><label>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="valida5_1();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />

	<br />
</div>
<div class="container-fluid" id="div_3" style="display: none">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Factoriza el siguiente número, utilizando la tabla comenzando por sus factores primos más pequeños.</p>
	</div>	
	<div class="col-md-12  col-xs-12 table-responsive div-border0" id="tab" align="center">
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th> Número </th>
                    <th><b>Factor</b></th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base10" value="24" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura10" value="" onblur="valida_factor(10,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base11" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura11" value="" onblur="valida_factor(11,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base12" value="" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura12" value="" onblur="valida_factor(12,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base13" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura13" onblur="valida_factor(13,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base14" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura14" onblur="valida_factor(14,this)" />
            		</td>
            	</tr>
            </tbody>
        </table>
        <br /><br />
        <p>Escribe el número como productos primos en el orden en el que fuiste obteniendo los factores.</p>
        <label>24=</label>
        <input class="input-sm input-top5" id="num31" size="5" />
        <label>X</label>
        <input class="input-sm input-top5" id="num32" size="5" />
        <label>X</label>
        <input class="input-sm input-top5" id="num33" size="5" />
        <label>X</label>
        <input class="input-sm input-top5" id="num34" size="5" />
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="valida5_2();" value="Verificar" />
	<br />
</div>
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 