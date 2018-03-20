<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">

	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Encuentra la factorizacion en primos del número:</p>
		<p>Después expresalo como un producto</p>
		<label> <b>120 = </b></label> <input type="text" placeholder="a x b x c  ..." id="exp"/>
		<p>Observa que como los factores se repiten, podemos utilizar la notación exponencial para expresar  el número:</p>
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mn>120</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
			<msup>
				<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas1" />
				  </annotation-xml>
				</semantics>
			</mi>
			<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input  xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="exp1" />
				  </annotation-xml>
				</semantics>
			</mi>
			</msup>
			<mo>&#xA0;</mo>
			<mi>x</mi>
			<mo>&#xA0;</mo>
			<msup>
				<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas2" />
				  </annotation-xml>
				</semantics>
			</mi>
			<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input  xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="exp2" />
				  </annotation-xml>
				</semantics>
			</mi>
			</msup>
			<mo>&#xA0;</mo>
			<mi>x</mi>
			<mo>&#xA0;</mo>
			<msup>
				<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas3" />
				  </annotation-xml>
				</semantics>
			</mi>
			<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input  xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="exp3" />
				  </annotation-xml>
				</semantics>
			</mi>
			</msup>
			</math>
	</div>	
	<div class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th>Número</th>
                    <th><b>Factor</b></th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="120" readonly/>
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
            			<input class="input-sm2" type="text" id="altura3" value="" onblur="valida_factor(3,this)"/>
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
            			<input class="input-sm2" type="text" id="altura5" onblur="valida_factor(5,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base6" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura6" onblur="valida_factor(6,this)"/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="valida9();" value="Verificar" />
	<br /><br /><br />
	
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
