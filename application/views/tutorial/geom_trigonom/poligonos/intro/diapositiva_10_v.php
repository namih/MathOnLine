<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p>Ahora veamos un resultado interesante:</p>
            <p>Cuando un octágono es regular, sus ángulos interiores suman también 180° x 6 = 1080°, pero todos esos ángulos son iguales:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/poligonos/intro/ejercicio_4.jpg" align="center"/>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <form>
                <div class="form-group">
                    Entonces, ¿cuánto grados mide cada ángulo interior de un octágono regular?
                    <div class="form-group">
                        <input type="number" id="answer_user" placeholder="Angulos">°
                        <br><br>
                        <button type="button" class="btn btn-success" onclick="internalAnglesPolygon(8)">Verificar</button>
                    </div>
                </div>
            </form>
        </div>

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
