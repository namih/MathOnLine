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
                <img class="drag" id="cuadro_1" onclick="setElementToRotate(this)" ondblclick="cloneImage(this)" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/cuadro_1.jpg" style="z-index: 1; position: absolute">
                <br><br>
                <img class="drag" id="cuadro_2" onclick="setElementToRotate(this)" ondblclick="cloneImage(this)" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/cuadro_x.jpg" style="z-index: 1; position: absolute">
                <br><br>
                <img class="drag" id="cuadro_3" onclick="setElementToRotate(this)" ondblclick="cloneImage(this)" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/cuadro_x2.jpg" style="z-index: 1; position: absolute">
                <br><br><br><br>
                <img class="drag" id="rotate" onclick="rotate()" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/rotate.png" style="z-index: 1; position: absolute;">
                <br><br>
            </div>

            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <img id="cuadro_4" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/cuadro_azul.png" style="z-index:0">
            </div>
            <div id="imagenes-cuadros" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-justify">
        <p>Utiliza las piezas para rellenar el cuadrado azul.</p>
        <p>Puedes rotar las piezas presionando el bóton para rotar y haciendo después clic en la pieza. Además puedes utilizar varias veces las piezas.</p>
    </div>
</div>
