<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_19.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">

	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Después nos preguntamos: ¿Es el 4 un factor de 18?.</p>
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
	<div class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th>Num 1</th>
                    <th>Num 2</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="18" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area1"  value="18" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" value="2" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2" value="9" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area2"  value="18" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3" value="3" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" value="6" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area3" value="18" readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="valida21();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
