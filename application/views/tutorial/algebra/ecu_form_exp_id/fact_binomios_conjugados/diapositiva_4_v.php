<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/areas.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<style>
    .square {
        width: 150px;
        height: 100px;
        background-color: red;
    }

    .rotate-90 {
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }
</style>
<div class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height:350px;">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <img class="drag" id="cuadro_1" onclick="setElementToRotate(this)"  ondblclick="cloneImage(this)" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomios_conjugados/cuadro_azul_1.jpg" style="z-index: 1; position: absolute">
                <br><br>
                <img class="drag" id="cuadro_2" onclick="setElementToRotate(this)" ondblclick="cloneImage(this)" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomios_conjugados/cuadro_amarillo_d.png" style="z-index: 1; position: absolute">
                <br><br>
                <img class="drag" id="cuadro_3" onclick="setElementToRotate(this)" ondblclick="cloneImage(this)" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomios_conjugados/cuadro_rojo_d2.png" style="z-index: 1; position: absolute">
                <br><br><br><br>
                <img class="drag" id="rotate" onclick="rotate()" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/rotate.png" style="z-index: 1; position: absolute;">
                <br><br>
            </div>

            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

            </div>
            <div id="imagenes-cuadros" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-justify">
        <p>
            Utiliza las piezas para formar un rectángulo con el área que se indica
        </p>

        <p class="text-center">
            <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>d</mi><mn>2</mn></msup><mo>+</mo><mn>7</mn><mi>d</mi><mo>+</mo><mn>12</mn></math>
        </p>


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="text-center">
            <br>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Verificar</button>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Solución</h4>
                </div>
                <div class="modal-body">
                    <p>Tu imagen se debe parecer a la siguiente:</p>
                    <img src="<?php echo base_url(); ?>statics/img/tutorial/algebra/fact_binomios_conjugados/respuesta_4.png">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>
