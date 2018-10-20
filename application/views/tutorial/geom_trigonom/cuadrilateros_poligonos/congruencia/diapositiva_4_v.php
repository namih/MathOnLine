<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>Ahora veamos cuando conocemos 3 lados:</p>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-justify">
            <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/congruencia/triangulo_3.png" align="center"/>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-justify">
            ¿Estos 2 triángulos son congruentes?
            <form name="true_false" id="true_false">
                <div>
                    <input type="radio" name="true_false" value="true" id="yes">
                    <label for="yes">Si</label>
                </div>
                <div>
                    <input type="radio" name="true_false" value="false" id="no">
                    <label for="no">No</label>
                </div>
                <div id="log"></div>
            </form>

            <br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="button" class="btn btn-success" onclick="validateYesNo()">Verificar</button>
                </div>
            </div>

            <br><br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="success" class="text-center" hidden>
                    <p class="bg-success text-success" style="padding: 15px;">Correcto!!!</p>
                    <br>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
                    <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
                    <br>
                </div>
            </div>
        </div>

    </div>

</div>


