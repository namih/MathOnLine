    function pintaCoordenada(id_input,relacion){
      $("#error_valor").empty();
    var arr_opt = id_input.split("_");
    var id_row = arr_opt[1];
    var point_x = $('#row_'+id_row+'_td_1').val();
    var point_y = $('#row_'+id_row+'_td_2').val();

    if( point_x!='' && point_y!='' && (Number(point_x) || point_x==0) && (Number(point_y) || point_y==0) ){
        if(relacion==1){
          var relacion_xy=Number(point_x*37.5);
        }else{
          if(relacion==2){
            var relacion_xy=Number(point_x*80);
          }else{
            if(relacion==3){
              var relacion_xy=Number(point_x*2.5)+15;
            }else{
              var relacion_xy=Number(100*Number(Math.pow(2, point_x)));
              
            }
          }
        }
        
      if(Number(point_y)==relacion_xy){
        create_coordenada(point_x,point_y,id_row);
      }else{
        var msjSuccess = '<div class="alert alert-warning alert-dismissable"><i class="fa fa-exclamation-triangle"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Valor incorrecto.</div>';
        msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 3000);</script>';
        $("#error_valor").html(msjSuccess);
        if(document.getElementById(id_input).disabled){
        }else{
          document.getElementById(id_input).value='';
          document.getElementById(id_input).focus();
        }

      }
    }
  }

  function create_coordenada(point_x,point_y,id_row) {
      var applet = document.ggbApplet;
      
      var point = '('+point_x+','+point_y+')';
      console.log(point);
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
      // Variables que definen los caracteres permitidos
      var permitidos = "0123456789.";
      var teclas_especiales = [8, 37, 39,45,9]; // 45= minus "-" 9=tab, 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
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



    function validaOptSelect(a,select,b){
      $('#error_'+select).empty();
      var opt_select = $('#'+select).val();
      var correct = a+b;
      if(opt_select==correct){
        var msjSuccess = '<div class="alert alert-success alert-dismissable"><i class="fa fa-check fa-2x"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>¡Correcto.!</div>';
        $('#error_'+select).html(msjSuccess);
      }else{
        var msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-times fa-2x"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>¡Incorrecto.!</div>';
        msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 3000);</script>';
        $('#error_'+select).html(msjSuccess);
      }
    }


    function validaInputRelacion(int,input,float){
      $('#error_'+input).empty();
      var valor = $('#'+input).val();
      var correct = int+float;
      if(valor==correct){
        var msjSuccess = '<div class="alert alert-success alert-dismissable"><i class="fa fa-check fa-2x"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>¡Correcto.!</div>';
        $('#error_'+input).html(msjSuccess);
      }else{
        var msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-times fa-2x"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>¡Incorrecto.!</div>';
        $('#error_'+input).html(msjSuccess);
      }
    }