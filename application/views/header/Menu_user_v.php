<?php //echo '<pre>'; print_r($menu_user); ?>
<div class="col-md-12">  
      <nav class="navbar navbar-green">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand visible-xs" href="#">Mate en linea</a>-->
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <?php if(isset($menu_user)){ ?>
              <ul class="nav navbar-nav navbar-right">
                <?php foreach ($menu_user as $idMenu => $datosMenu) {
                    if(empty($datosMenu['submenu'])){//si no hay submenu se pinta un link sencillo ?>
                      <li class="<?php if(trim($datosMenu['clase'])!=''){ echo trim($datosMenu['clase']); };?> mLi"><a href="<?php if(trim($datosMenu['href'])==''){ echo '#'; }else { echo trim($datosMenu['href']); };?>" <?php if(trim($datosMenu['onclick'])!=''){ echo $datosMenu['onclick']; }  ?> ><?php echo $datosMenu['nombre']; ?></a></li>
                    <?php }else{ ?>
                      <li class="dropdown mLi">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $datosMenu['nombre']; ?></a>
                        <ul class="dropdown-menu" role="menu">
                          <?php foreach ($datosMenu['submenu'] as $idSubMenu => $dtsSubMenu) { ?>
                            <li class="sLi"><a href="<?php if(trim($dtsSubMenu['href'])==''){ echo '#'; }else { echo trim($dtsSubMenu['href']); };?>" <?php if(trim($dtsSubMenu['onclick'])!=''){ echo $dtsSubMenu['onclick']; }  ?> ><?php echo $dtsSubMenu['nombre']; ?></a></li>
                          <?php } ?>
                        </ul>
                      </li>
                    <?php }
                }?>
                <!--<li><a href="#">Tutoriales</a></li>
                <li><a href="#">Pruebas de evaluación</a></li>
                <li><a href="#" onclick="loadContent('<?php echo base_url(); ?>Home_student_c/material_complementario');" >Material complementario</a></li>
                <li><a href="#">Estadísticas</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"> </span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#" onclick="loadContent('<?php echo base_url(); ?>Perfil_usuario_c/Perfil_usuario/<?php echo $user_log[0]['id_user']; ?>');"><span class="glyphicon glyphicon-user"> </span> Consultar perfil</a></li>
                    <li><a href="<?php echo base_url();?>/logout"><span class="glyphicon glyphicon-log-in"> </span> Cerrar sesión</a></li>
                  </ul>
                </li>-->
              </ul>
            <?php } ?>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav> 
</div>
<div id="section_main_content" style="min-height: 890px;">
    <?php //echo '<pre>'; print_r($user_log); print_r($temas); ?>

<script type="text/javascript">
  /*$('div#navbar_menu li.mLi').each(function() {
        this.onclick = function(e){
            var aMenu =$(this).children("a").first();
            var elDelClick=$(e.target).parent();
            var uno = this;
            var isActive = $(this).hasClass('active');
            var btn = $(this).children("a").first();//menu padre
            var menu = $(this).children(".dropdown-menu").first();

            /*console.log( 'aMenu: '+ aMenu + '<br>' );
            console.log( 'elDelClick: '+elDelClick+ '<br>' );
            console.log( 'uno: '+uno+ '<br>'  );
            console.log( 'isActive: '+isActive+ '<br>'  );
            console.log( 'btn: '+btn+ '<br>' );
            console.log( 'menu: '+menu+ '<br>' );

            console.log( aMenu );
            console.log( elDelClick);
            console.log( uno);
            console.log( isActive);
            console.log( btn);
            console.log( menu);*****


            $('div#navbar_menu li.mLi').each(function() {
                var padre = $(this).children("a").first();//menu padre
                var menuHijo = $(this).children(".dropdown-menu").first();
                var dos = this;

                /*console.log('segunda ronda');
                console.log(padre);
                console.log(menuHijo);
                console.log(dos);****
                if(uno==dos){//al que le dí click
                    console.log('uno y dos son iguales');
                    if (isActive) {//si está activo se deben revisar las opciones interiores
                        console.log('al que le di click esta activo');
                        //Slide up to close menu
                        if (aMenu[0] == elDelClick[0]){//si se hizo click sobre el titulo del menú se debe mostrar el contenido del submenu pero si se hace click en alguna opcion del sub-menu, se oculta el submenú completo
                            console.log('le di click al padre de un submenu');
                            menu.slideDown();
                            isActive = false;
                            btn.parent("li").removeClass("active");
                        }else{
                            console.log('no le di click al padre del submenu');
                          menu.slideUp();
                          isActive = false;
                        }
                    } else { //si no esta activo se abre el menu y se pone la clase active
                            //Slide down to open menu
                        console.log('al que le di click no esta activo');
                        menu.slideDown();
                        isActive = true;
                        btn.parent("li").addClass("active");
                    }
                }else{//las opciones no clickeadas se oculta el menú y se desactivan
                    console.log('uno y dos son distintos');
                    menuHijo.slideUp();
                    padre.parent("li").removeClass("active");
                }

            });
        }
    });*/
    /*$('div#navbar_menu li.sLi').each(function(e) {
        this.onclick = function(){
        var elDelClick = this;
        var optionPadre = $(this).parent();

        $('div#navbar_menu li.sLi').each(function(){
            this.removeAttribute('class', 'active');
        });
        elDelClick.setAttribute('class', 'active'); 
        }
    });*/ 
  /*$('section#menuEvaluacion li[name="liAdminEval"]').each(function() {
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
    });*/
</script> 