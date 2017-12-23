    function pintaCoordenada(id_input){
    var arr_opt = id_input.split("_");
    var id_row = arr_opt[1];
    var point_x = $('#row_'+id_row+'_td_1').val();
    var point_y = $('#row_'+id_row+'_td_2').val();

    if(Number(point_x) && Number(point_y)){
      create_coordenada(point_x,point_y,id_row);
    }

    }

  function create_coordenada(point_x,point_y,id_row) {
      var applet = document.ggbApplet;
      console.log(applet);
      var point = '('+point_x+','+point_y+')';
      var draw_p = 'P'+id_row+' = '+ point;
      applet.evalCommand(draw_p);
      //applet.evalCommand("s = Line[A, B]");
  }



  function ocultaElemento(id_elemento){
    if( $('#'+id_elemento).html() == undefined ){
      $('#'+id_elemento).hide();
    }
  }

  function muestraElemento(id_elemento){
    if( $('#'+id_elemento).html() == undefined ){
      $('#'+id_elemento).show();
    }
  }


    function validarSoloNumero(elEvento){
          // Variables que definen los caracteres permitidos
      var permitidos = "0123456789";
      var teclas_especiales = [8, 37, 39]; // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
      // Obtener la tecla pulsada
      var evento = elEvento || window.event;
      var codigoCaracter = evento.charCode || evento.keyCode;
      var caracter = String.fromCharCode(codigoCaracter);

     // Comprobar si la tecla pulsada es alguna de las teclas especiales
    // (teclas de borrado y flechas horizontales)
    var tecla_especial = false;
    for(var i in teclas_especiales) {
        if(codigoCaracter == teclas_especiales[i]) {tecla_especial = true;break;}
    }


    // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos o si es una tecla especial
    return permitidos.indexOf(caracter) != -1 || tecla_especial;

    }

    function validarSoloFlotante(elEvento,elElemento){
        console.log(elEvento);
      // Variables que definen los caracteres permitidos
      var permitidos = "0123456789.";
      var teclas_especiales = [8, 37, 39,9]; // 9=tab, 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
      //si la cadena ya tiene un punto no se deben permitir mas
      if($('#'+elElemento).val().indexOf('.')!=-1)
        permitidos=permitidos.replace('.','');

      // Obtener la tecla pulsada
      var evento = elEvento || window.event;
      var codigoCaracter = evento.charCode || evento.keyCode;
      var keyCaracter=evento.key;
      var caracter = String.fromCharCode(codigoCaracter);

      // Comprobar si la tecla pulsada es alguna de las teclas especiales
    // (teclas de borrado y flechas horizontales)
    var tecla_especial = false;
    for(var i in teclas_especiales) {
        if(codigoCaracter == teclas_especiales[i]) {tecla_especial = true;break;}
    }

    // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos o si es una tecla especial
    return permitidos.indexOf(caracter) != -1 || tecla_especial;

    }