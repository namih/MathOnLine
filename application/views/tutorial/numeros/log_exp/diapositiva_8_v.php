<script src="<?php echo base_url(); ?>statics/js/tutorial/log_exp/int_pow.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>
            Contesta la siguiente pregunta:

        </p>
        <div class="form-inline">
            <div class="form-group">
                El logaritmo base <input type="number" class="form-control" id="base" value="2" readonly> de <input type="number" class="form-control" id="argument" value="2" readonly> es:
            </div>
            <div class="form-group">
                <input class="form-control" step="2" id="response" type="number">
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
        <br><br>
        <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
        <br><br>
        <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="text-center">
        <br>
        <button type="button" class="btn btn-success" onclick="validateLog()">Verificar</button>
        <button type="button" class="btn btn-primary" onclick="generateExamplesLog()">Otro ejemplo</button>
    </div>

</div>