    <?php // echo '<pre>'; print_r($user_log); print_r($temas); ?>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <div id="MainContent">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="avatar" align="center"><!-- avagtar -->
              <center><h1>BIENVENIDO</h1></center>
              <div >
                <img class="img-responsive" width="25%" src="<?php echo base_url().$user_log[0]['location']; ?>"/>
              </div><br>
              <div>
                <h1><?php echo $user_log[0]['user_name']; ?></h1>
              </div>
            </div><!-- avagtar-->          
          </div>    
          <div class="col-xs-12 visible-xs">
            <hr style="height: 2px; border: 0; color: #666; background-color: #008c00; margin-top: 0px !important;  margin-bottom: 0px !important; "><br>
          </div>
          <div class="col-md-8">
                
                <style type="text/css">
                  .list-group.panel > .list-group-item {
                    border-bottom-right-radius: 4px;
                    border-bottom-left-radius: 4px
                  }
                  .list-group-submenu {
                    margin-left:10px;
                  }
                </style>
                
                <div class="container-fluid">
                  <center>
                    <h1>Tutoriales</h1>
                  </center>
                  <div id="all_tutorial" class="col-lg-12">
                    <div id="main_temas">
                      <div class="list-group panel">
                        <?php if(isset($temas) && $temas!=false){ 
                          foreach ($temas as $key => $tema) { ?>
                            <a href="#main_tema_<?php echo $tema['id_tema']; ?>" class="tema list-group-item list-group-item-success" data-toggle="collapse" data-parent="#main_temas" aria-expanded="true"><?php echo $tema['nombre']; ?> <i class="fa fa-chevron-down"></i></a>
                            <div class="collapse" id="main_tema_<?php echo $tema['id_tema']; ?>">
                            <?php if(isset($tema['subtemas']) && $tema['subtemas']!=false){ 
                              foreach ($tema['subtemas'] as $llave => $subtema) { ?>
                                <a href="#subtema_<?php echo $subtema['id_subtema']; ?>" class="subtema list-group-item" data-toggle="collapse" data-parent="#main_tema_<?php echo $subtema['id_subtema']; ?>"><?php echo $subtema['nombre']; ?> <i class="fa fa-caret-down"></i><span class="badge"><?php echo count($subtema['tutoriales']); ?></span></a>
                                  <div class="collapse list-group-submenu" id="subtema_<?php echo $subtema['id_subtema']; ?>">
                                    <?php if(isset($subtema['tutoriales']) && $subtema['tutoriales']!=false){ 
                                      foreach ($subtema['tutoriales'] as $id_tutorial => $dts_tutorial) { ?>
                                              <div href="#" class="tutorial list-group-item <?php if($dts_tutorial['concluido']==1) echo "list-group-item-warning"; ?>" data-parent="#subtema_<?php echo $subtema['id_subtema']; ?>" >
                                                   <?php echo $dts_tutorial['nombre']; ?>
                                                <?php if($dts_tutorial['concluido']==1){ ?>
                                                  <span class="badge" style="float: left;"></span>
                                                  <a class="btn btn-warning" style="float: right;">Volver a hacer el tutorial</a>
                                                <?php }else{ ?>
                                                  <a class="btn btn-success" style="float: right;">Iniciar tutorial</a> 
                                                <?php } ?>
                                              </div>
                                    <?php } }?>
                                  </div>
                            <?php } }?>
                            </div>
                        <?php } }?>
                      </div>
                    </div>
                  </div>
                </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
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