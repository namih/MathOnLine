<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div>
		<p>Podemos utilizar el método de <b>factorización en primos </b> para encontrar el MCM de dos o más números más fácilmente.Encuentra los <b>factores primos</b> de cada número y expresa a cada uno como el producto de primos utilizando la notación exponencial. </p>
	</div>
	<br /> <br />
	<label>24</label>
	<div   class="col-md-12  col-xs-12 table-responsive div-border0" id="tab" align="center">
			 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th>Número</th>
                    <th><b>Factor</b></th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="24" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="" onblur="valida_factor(1,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2"  onblur="valida_factor(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3" value="" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" onblur="valida_factor(3,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base4" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura4"  onblur="valida_factor(4,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base5" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura5" readonly />
            		</td>
            	</tr>
            </tbody>
        </table>
        <math xmlns="http://www.w3.org/1998/Math/MathML">
			<mn>24</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
			<msup>
				<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas_1" />
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
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas_2" />
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
        <br /><br />
        <label>54</label>
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th>Número</th>
                    <th><b>Factor</b></th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas1" value="54" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1"  onblur="valida_factor1(1,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas2" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2" value="" onblur="valida_factor1(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas3" value="" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3"  onblur="valida_factor1(3,this)"/>
            		</td>
            	</tr>
        		<tr>
        		<td class="modif">
        			<input class="input-sm2" type="text" id="bas4" value="" readonly />
        		</td>
        		<td class="modif">
        			<input class="input-sm2" type="text" id="altura4"  onblur="valida_factor1(4,this)"/>
        		</td>
        	</tr>
        	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas5" value="" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5"  readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
        <math xmlns="http://www.w3.org/1998/Math/MathML">
			<mn>54</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
			<msup>
				<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas_3" />
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
			<mo>&#xA0;</mo>
			<mi>x</mi>
			<mo>&#xA0;</mo>
			<msup>
				<mi>
				<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="bas_4" />
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
			</math>
        	<!-- Notacion exponencial -->
        <br /><br />
	</div>
	<!-- Notacion exponencial -->
	<br />
	<input type="button" class="btn btn-success btn-sm" onclick="valida23();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
