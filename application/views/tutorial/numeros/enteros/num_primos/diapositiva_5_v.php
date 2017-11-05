<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_5.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_numeros2.css">
<div class="container-fluid">
	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Escribe los factores de cada número y determina si es un número primo</p>
	</div>	
	<div   class="col-xs-12  col-xs-12 table-responsive" id="tab">
		
		 <table class="table table-striped table-bordered table-condensed " style="width:50%; margin:0 auto;" id="myTable">
            <thead>
                <tr class="success">
                    <th>Número</th>
                    <th>Factores</th>
                    <th>Número de factores</th>
                    <th>¿Es primo?</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2"  type="text" id="altura1" value="" placeholder="1,2,3.."/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2"  type="text" id="area1"  value=""  />
            		</td>
            		<td class="modif">
            			<input class="input-sm2"  type="checkbox" id="base1" value=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input  class="input-sm2" type="text" id="base2" value="2" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura2" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area2"  value=""  />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="2" value=""/>
            		</td>
            	</tr>
            		<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3" value="3" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area3"  value=""  />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="3" value="" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base4" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area4"  value=""  />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="4" value="" />
            		</td>
            	</tr>
            		<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base5" value="5" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area5"  value=""  />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="5" value="" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base6" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura6" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area6"  value=""  />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="6" value="" />
            		</td>
            	</tr>
            		<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base7" value="7" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura7" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area7"  value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="7" value="" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base8" value="8" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura8" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area8"  value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="8" value="" />
            		</td>
            	</tr>
            		<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base9" value="9" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura9" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area9"  value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="9" value="" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base10" value="10" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura10" value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area1"  value="" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="checkbox" id="10" value="" />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<div  class="col-xs-12  col-xs-12 table-responsive">
		<p>Los primeros cuatro números primos son:</p>
		<input  type="text" id="1" value="" />
		<input  type="text" id="2" value="" />
		<input  type="text" id="3" value="" />
		<input  type="text" id="4" value="" />
		<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	</div>
</div>
