<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_13.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
      <div>
            <p>Observa que, para resolver el problema anterior tuvimos que encontrar un número que fuera <b>divisor tanto de 256 como de 96</b>. Debe dividir a ambos números para que se obtengan cuadrados al dividir. </p>
            <p>Completa las tablas para encontrar los factores o divisores de 256 y de 96.</p>
      </div>
      <br />
      <label> Factores de 256</label>
      <div   class="table-responsive div-border0">
                   <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
            <thead>
                <tr class="success">
                      <th class="col-xs-2">Número 1</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-2">Número 2</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-3">Resultado</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="col-xs-12 input-sm2" type="text" id="base1" value="1" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="altura1" value="256" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text" id="area1"  readonly="256"/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="base2" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="altura2" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text" id="area2" readonly/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  id="base3" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="altura3" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text"  id="area3" readonly/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  id="base4" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="altura4" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text"  id="area4" readonly/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  id="base5" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="altura5" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text"  id="area5" readonly/>
                        </td>
                  </tr>
            </tbody>
        </table>
        <br />
        <label>Factores de 96</label>
             <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
                   <thead>
                <tr class="success">
                      <th class="col-xs-2">Número 1</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-2">Número 2</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-3">Resultado</th>
                  </tr>
            </thead>
              <tbody>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="bas1" value="1" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="alt1" value="96" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text" id="ar1"  readonly="96"/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="bas2" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="alt2" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text" id="ar2" readonly/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  id="bas3" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="alt3" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text"  id="ar3" readonly/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  id="bas4" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="alt4" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text"  id="ar4" readonly/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  id="bas5" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="alt5" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text"  id="ar5" readonly/>
                        </td>
                  </tr>
                  <tr>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  id="bas6" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="X" readonly=""/>
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text" id="alt6" />
                        </td>
                        <td class="modif col-xs-2">
                              <input class="input-sm2" type="text"  value="=" readonly=""/>
                        </td>
                        <td class="modif col-xs-3">
                              <input class="input-sm2" type="text"  id="ar6" readonly/>
                        </td>
                  </tr>
            </tbody>
        </table>
      </div>
      <input type="button" class="btn btn-success btn-sm input-top5" onclick="verificar();" value="Verificar" />
      <div id="correcta" style="display: none" class="alert alert-success">
                  <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
      </div>
      <div id="error" style="display: none" class="alert alert-warning">
                  <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
      </div>
</div>