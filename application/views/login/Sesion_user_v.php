    <?php /*echo "<pre>"; print_r($temas);  */ //echo '<pre>'; print_r($user_log); //print_r($temas); ?>
    <div id="menu_tutoriales">
      <?php $vowels = array("á", "é", "í", "ó", "ú"); $vowel_up = array("Á", "É", "Í", "Ó", "Ú"); 
        if($user_log[0]['total_score']<=200){
          $barra='warning';
          $avance=$user_log[0]['total_score']/2;
        }else{
          if($user_log[0]['total_score']<=400){
            $barra='success';
            $avance=($user_log[0]['total_score']-200)/2;
          }else{
            if($user_log[0]['total_score']<=600){
              $barra='';
              $avance=($user_log[0]['total_score']-400)/2;
            }else{
              $barra='danger';
              $avance=100;
            }
          }
        }
      ?>
      <div class="col-md-12">
          <div class="col-xs-12 visible-xs">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="avatar" align="center"><!-- avagtar -->
              <center><h1>BIENVENIDO <?php echo  str_replace($vowels, $vowel_up, strtoupper($user_log[0]['user_name'])); ?></h1></center>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img class="img-responsive" src="<?php echo base_url().$user_log[0]['location']; ?>"/><br>
              </div><br>
              <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                  <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/ligas/liga_<?php echo $user_log[0]['league']; ?>.png" alt="Liga <?php echo $user_log[0]['league']; ?>" title="Liga <?php echo $user_log[0]['league']; ?>" align="absmiddle">
                </div>
                  <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                    <div><label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="font-size: 25px; color: #7f7e7e; "> <?php echo $user_log[0]['total_score']; ?> puntos</label></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      <div class="progress">
                         <div class="progress-bar progress-bar-<?php echo $barra ?> progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $user_log[0]['total_score']; ?>" aria-valuemin="0" aria-valuemax="200" style="width:<?php echo $avance; ?>%">
                         </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div><!-- avagtar-->
          </div>
          <div class="col-xs-12 visible-xs"><br><br>
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
                                      <div style="padding-left: 35px; <?php if($dts_tutorial['status']==2) echo "color: #564424;  background-color: #f9f3cf;"; ?>" href="#" class="tutorial list-group-item" data-parent="#subtema_<?php echo $subtema['id_subtema']; ?>" >
                                        <?php echo $dts_tutorial['nombre']; ?>
                                        <?php switch ($dts_tutorial['status']) {
                                          case 0: /*No iniciado*/?>
                                            <a data-toggle="tooltip" title="Iniciar tutorial" href="<?php echo base_url(); ?>inicio_tutorial/<?php echo $dts_tutorial['id_tutorial']; ?>/<?php echo $dts_tutorial['progress'];?>/<?php echo $dts_tutorial['id_blog_tutorials']; ?>/<?php echo 0; ?>" style="float: right;"><span class="badge" style="background-color: #cccccc;"><i class="fa fa-flag-o" aria-hidden="true"></i></span></a>
                                          <?php   break;
                                          case 1: /*En proceso*/?>
                                            <a data-toggle="tooltip" title="Continuar tutorial" href="<?php echo base_url(); ?>inicio_tutorial/<?php echo $dts_tutorial['id_tutorial']; ?>/<?php echo $dts_tutorial['progress'];?>/<?php echo $dts_tutorial['id_blog_tutorials']; ?>/<?php echo 0; ?>" style="float: right;"><span class="badge" style="background-color: #d2f0f4;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a>

                                          <?php   break;
                                          case 2: /*Terminado: se pone el progreso a la primer diapositiva y el id blog_tutorials a 0 para que se cree un nuevo blog_tutorials*/?>
                                            <a data-toggle="tooltip" title="Reiniciar tutorial" href="<?php echo base_url(); ?>inicio_tutorial/<?php echo $dts_tutorial['id_tutorial']; ?>/<?php echo 1;?>/<?php echo 0; ?>/<?php echo 0; ?>" style="float: right;"><span class="badge" style="background-color: #61bf74;"><i class="fa fa-check" aria-hidden="true"></i></span></a>
                                          <?php break;
                                        } ?>
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
                <center><h1>BIENVENIDO <?php echo  str_replace($vowels, $vowel_up, strtoupper($user_log[0]['user_name'])); ?></h1></center>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <img class="img-responsive" src="<?php echo base_url().$user_log[0]['location']; ?>"/><br>
                </div><br>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1">
                  <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/ligas/liga_<?php echo $user_log[0]['league']; ?>.png" alt="Liga <?php echo $user_log[0]['league']; ?>" title="Liga <?php echo $user_log[0]['league']; ?>" align="absmiddle">
                  </div>
                  <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                    <div><label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="font-size: 25px; color: #7f7e7e; "> <?php echo $user_log[0]['total_score']; ?> puntos</label></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      <div class="progress">
                         <div class="progress-bar progress-bar-<?php echo $barra ?> progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $user_log[0]['total_score']; ?>" aria-valuemin="0" aria-valuemax="200" style="width:<?php echo $avance; ?>%">
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- avagtar-->
            </div>
            <div class="col-md-12 hidden-xs"><br><br>
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
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
      });
    </script>
  </div><!-- cierra el div #user_main_content que inicia despues del menú-->

 <!-- 
  <div class="container">
      <div class="progress">
         <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
            40% (success)
         </div>
      </div>
      <div class="progress">
         <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
            20% (info)
         </div>
      </div>
      <div class="progress">
         <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
            60% (warning)
         </div>
      </div>
      <div class="progress">
         <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
            80% (danger)
         </div>
      </div>
   </div>
   -->