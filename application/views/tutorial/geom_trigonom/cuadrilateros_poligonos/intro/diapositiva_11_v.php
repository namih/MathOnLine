<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/cuadrilateros_poligonos/poligonos.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
    var applet = new GGBApplet({filename: base_url+"statics/ggb/poligonos/intro/n_lados.ggb","showToolbar":false, height: 390, width: 520,"showMenuBar": false}, true);
    window.addEventListener("load", function() {
        applet.inject('applet_container');
    });
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p>Dibuja el polígono que se te pide, y contesta las preguntas:</p>
            <form>
                <div class="form-group">
                    <p>Poligono de
                        <input type="number" id="number_sides" name="number_sides" step="1" value="3" min="3" max="8" class="form-control" style="width:100px; display:inline-block"> lados
                    </p>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div align="center" id="applet_container"></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <form>
                <div class="form-group">
                    <p>¿En cuántos triángulos lo puedes partir? <input type="number" id="number_triangle" name="number_triangle" class="form-control" style="width:100px; display:inline-block"></p>

                    <p>¿Cuántos grados suman sus ángulos interiores? <input type="number" id="grades" name="grades" class="form-control" style="width:100px; display:inline-block">°</p>

                    <p>Si ese polígono es regular, ¿cuántos grados mide cada ángulo interior? <input type="number" id="grade" name="grade" class="form-control" style="width:100px; display:inline-block">°</p>

                    <br><br>
                    <button type="button" class="btn btn-success" onclick="infoPolygonBySides()">Verificar</button>

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
            </form>
        </div>
    </div>
</div>

