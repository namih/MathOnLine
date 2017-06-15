    <?php // echo '<pre>'; print_r($user_log); print_r($temas); ?>
    <div id="MainContent">
      <div class="col-md-12">
          <div class="col-xs-12 visible-xs">
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
            <div class="container-fluid">
              <center>
                <h1>Tutoriales</h1>
              </center>
              <div id="all_tutorial" class="col-lg-12">
                <div id="main_temas">
                  <div class="list-group panel">
                    <?php if(isset($temas) && $temas!=false){ 
                      foreach ($temas as $key => $tema) { ?>
                        <a href="#main_tema_<?php echo $tema['id_tema']; ?>" class="tema list-group-item list-group-item-success collapsed" data-toggle="collapse" data-parent="#main_temas" aria-expanded="false"><?php echo $tema['nombre']; ?> <i class="fa fa-chevron-down"></i></a>
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
                                          <a style="float: right;"><span class="badge" style="background-color: #61bf74;"><i class="fa fa-check" aria-hidden="true"></i></span></a> 
                                        <?php }else{ ?>
                                          <a style="float: right;"><span class="badge" style="background-color: #cccccc;"><i class="fa fa-flag-o" aria-hidden="true"></i></span></a> 
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
                  <img class="img-responsive" width="25%" src="<?php echo base_url().$user_log[0]['location']; ?>"/>
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

    <script>
    $('.tema').each(function() {
        this.onclick = function(e){
            var aMenu =$(this).children("a").first();
            var elDelClick=$(e.target).parent();
            var uno = this;
            var isActive = $(this).hasClass('active');
            var btn = $(this).children("a").first();//menu padre
            var menu = $(this).children(".treeview-menu").first();
            $('section#menuEvaluacion li[name="liAdminEval"]').each(function() {
                var padre = $(this).children("a").first();//menu padre
                var menuHijo = $(this).children(".treeview-menu").first();

                var dos = this;
                if(uno==dos){//al que le dí click
                    if (isActive) {//si está activo se deben revisar las opciones interiores
                        //Slide up to close menu
                        if (aMenu[0] == elDelClick[0]){//si se hizo click sobre el titulo del menú se debe ocultar el contenido pero si se hace click rn algun sub-menu, no se oculta
                            menu.slideUp();
                            isActive = false;
                            btn.children(".fa-angle-down").first().removeClass("fa-angle-down").addClass("fa-angle-left");
                            btn.parent("li").removeClass("active");
                        }
                    } else { //si no esta activo se abre el menu y se pone la clase active
                            //Slide down to open menu
                        menu.slideDown();
                        isActive = true;
                        btn.children(".fa-angle-left").first().removeClass("fa-angle-left").addClass("fa-angle-down");
                        btn.parent("li").addClass("active");
                    }
                }else{//las opciones no clickeadas se oculta el menú y se desactivan
                    menuHijo.slideUp();
                    padre.children(".fa-angle-down").first().removeClass("fa-angle-down").addClass("fa-angle-left");
                    padre.parent("li").removeClass("active");
                }

            });
        }
    });


      /*  $('section#menuEvaluacion li li[name="liE"]').each(function(e) {
            this.onclick = function(){
            var elDelClick = this;
            var optionPadre = $(this).parent();

            $('section#menuEvaluacion li li[name="liE"]').each(function(){
                this.removeAttribute('class', 'active');
            });
            elDelClick.setAttribute('class', 'active'); 
            }
        });*/

</script>