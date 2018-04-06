<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">

	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Ahora preguntamos: ¿Es divisible el 25 entre 5?</p>
		 <form method="post" action="#">
			<table>
				<td align="left">
					<form>
					    <div class="radio">
					      <label><input type="radio" id="optradio" name="optradio" value="S" >SI</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" id="optradio" name="optradio" value="N" >NO</label>
					    </div>
					</form>
				</td>
		  	</table>
		</form>
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
            			<input class="input-sm2" type="text" id="base1" value="150" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="2" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" value="75" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2" value="3" readonly />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3" value="25" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3"  onblur="valida_factor(3,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base4" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="valida4();" value="Verificar" />
	<br /><br /><br />
	
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
