    <?php //echo "<pre>"; print_r($temas);  // echo '<pre>'; print_r($user_log); print_r($temas); ?>
    <div id="menu_tutoriales">
      <div class="col-md-12">
          <div class="col-xs-12 visible-xs">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="avatar" align="center"><!-- avagtar -->
              <center><h1>BIENVENIDO</h1></center>
              <div >
                <img class="img-responsive" src="<?php echo base_url().$user_log[0]['location']; ?>"/>
              </div><br>
              <div>
                <h1><?php echo $user_log[0]['user_name']; ?></h1>
              </div>
            </div><!-- avagtar-->
          </div>
          <div class="col-xs-12 visible-xs">
            <hr style="height: 2px; border: 0; color: #666; background-color: #008c00; margin-top: 0px !important;  margin-bottom: 0px !important; "><br>
          </div>
          <div class="col-md-8" id="opcion_menu">
            <div class="container-fluid">
              <center>
                <h1>Tutoriales</h1>
              </center>
              <div id="all_tutorial" class="col-lg-12">
                <div id="main_temas">
                  <div class="list-group panel">
                    <?php if(isset($temas) && $temas!=false){
                      foreach ($temas as $key => $tema) { ?>
                        <a href="#main_tema_<?php echo $tema['id_tema']; ?>" class="tema list-group-item list-group-item-success collapsed" data-toggle="collapse" data-parent="#main_temas" aria-expanded="false"><i class="fa fa-angle-double-right" aria-hidden="true" style="font-weight: bold;"></i> <?php echo $tema['nombre']; ?></a>
                        <div class="collapse" id="main_tema_<?php echo $tema['id_tema']; ?>">
                          <?php if(isset($tema['subtemas']) && $tema['subtemas']!=false){
                            foreach ($tema['subtemas'] as $llave => $subtema) { ?>
                              <a style="padding-left: 25px;" href="#subtema_<?php echo $subtema['id_subtema']; ?>" class="subtema list-group-item" data-toggle="collapse" data-parent="#main_tema_<?php echo $subtema['id_subtema']; ?>"><i class="fa fa-chevron-right" aria-hidden="true" style="font-weight: bold;"></i> <?php echo $subtema['nombre']; ?><span class="badge"><?php echo count($subtema['tutoriales']); ?></span></a>
                                <div class="collapse list-group-submenu" id="subtema_<?php echo $subtema['id_subtema']; ?>">
                                  <?php if(isset($subtema['tutoriales']) && $subtema['tutoriales']!=false){
                                    foreach ($subtema['tutoriales'] as $id_tutorial => $dts_tutorial) { ?>
                                      <div style="padding-left: 35px; <?php if($dts_tutorial['concluido']==1) echo "color: #564424;  background-color: #f9f3cf;"; ?>" href="#" class="tutorial list-group-item" data-parent="#subtema_<?php echo $subtema['id_subtema']; ?>" >
                                        <?php echo $dts_tutorial['nombre']; ?>
                                        <?php if($dts_tutorial['concluido']==1){ ?>
                                          <a style="float: right;"><span class="badge" style="background-color: #61bf74;"><i class="fa fa-check" aria-hidden="true"></i></span></a>
                                        <?php }else{ ?>
                                          <a href="<?php echo base_url(); ?>inicio_tutorial/<?php echo $dts_tutorial['id_tutorial']; ?>/<?php echo 1;/*dts_tutorial['progress'];*/?>/<?php echo 0; ?>/<?php echo 0; ?>" style="float: right;"><span class="badge" style="background-color: #cccccc;"><i class="fa fa-flag-o" aria-hidden="true"></i></span></a>
                                        <?php } ?>
                                      </div>
                                    <?php }
                                  }?>
                                </div>
                            <?php }
                          }?>
                        </div>
                      <?php }
                    }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-12 hidden-xs">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="avatar" align="center"><!-- avagtar -->
                <center><h1>BIENVENIDO</h1></center>
                <div >
                  <img class="img-responsive" src="<?php echo base_url().$user_log[0]['location']; ?>"/>
                </div><br>
                <div>
                  <h1><?php echo $user_log[0]['user_name']; ?></h1>
                </div>
              </div><!-- avagtar-->
            </div>
            <div class="col-md-12 hidden-xs">
              <hr style="height: 2px; border: 0; color: #666; background-color: #008c00; margin-top: 0px !important;  margin-bottom: 0px !important; "><br>
            </div>
            <div class="col-md-12">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="redes_sociales"><!-- redes sociales -->
                <div class="fb-like" data-href="https://www.facebook.com/InnovaCDMX/?ref=ts&amp;fref=ts" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                  <div id="fb-root"></div>
                    <script>
                      (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));
                    </script>

                  <a class="twitter-timeline" href="https://twitter.com/InnovacionCDMX" data-widget-id="690549609538523136">Tweets por  @InnovacionCDMX.</a>
                  <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                      if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                  </script>
              </div><!-- redes sociales-->
            </div>
          </div>
      </div>
    </div>
  </div><!-- cierra el div #user_main_content que inicia despues del menú-->