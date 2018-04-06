<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid" id="div_1" style="display: block">

	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Expresa el siguiente número como producto de sus factores primos ordenándolos de menor a mayor y usando notación exponencial.</p>
		<p>Apóyate en la tabla si te es útil.</p>
		<!-- <label> 28 = </label><input type="text" /> -->
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mn>28</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
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
			</math>
	</div>	
	<div class="col-md-6  col-xs-12 table-responsive div-border0" id="tab" align="center">
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
            			<input class="input-sm2" type="text" id="base1" value="28" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="" onblur="valida_factor(1,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2"  onblur="valida_factor(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3"  readonly />
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
            			<input class="input-sm2" type="text" id="altura4" readonly />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="valida11();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />
</div>
<div class="container-fluid" id="div_2" style="display: none">

	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Expresa el siguiente número como producto de sus factores primos ordenándolos de menor a mayor y usando notación exponencial.</p>
		<p>Apóyate en la tabla si te es útil.</p>
		<!-- <label> 28 = </label><input type="text" /> -->
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mn>81</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
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
	<div class="col-md-6  col-xs-12 table-responsive div-border0" id="tab" align="center">
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
            			<input class="input-sm2" type="text" id="base5" value="81" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" value="" onblur="valida_factor(5,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base6" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura6"  onblur="valida_factor(6,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base7"  readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura7" value="" onblur="valida_factor(7,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base8" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura8"  value="" onblur="valida_factor(8,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base9" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura9" readonly />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="valida11_1();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />

	<br />
</div>
<div class="container-fluid" id="div_3" style="display: none">

	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Expresa el siguiente número como producto de sus factores primos ordenándolos de menor a mayor y usando notación exponencial.</p>
		<p>Apóyate en la tabla si te es útil.</p>
		<!-- <label> 28 = </label><input type="text" /> -->
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mn>78</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
			<msup>
				<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas4" />
				  </annotation-xml>
				</semantics>
			</mi>
			<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input  xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="exp4" />
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
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas5" />
				  </annotation-xml>
				</semantics>
			</mi>
			<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input  xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="exp5" />
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
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas6" />
				  </annotation-xml>
				</semantics>
			</mi>
			<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input  xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="exp6" />
				  </annotation-xml>
				</semantics>
			</mi>
			</msup>
			</math>
	</div>	
	<div class="col-md-6  col-xs-12 table-responsive div-border0" id="tab" align="center">
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
            			<input class="input-sm2" type="text" id="base10" value="78" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura10" value="" onblur="valida_factor(10,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base11" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura11"  onblur="valida_factor(11,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base12"  readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura12" value="" onblur="valida_factor(12,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base13" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura13" readonly />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="valida11_2();" value="Verificar" />
	<br />
</div>

<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 