<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
    var applet1 = new GGBApplet({material_id: "17499", borderColor:"#55FF00"}, true);
    var applet2 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
    window.addEventListener("load", function() {
        applet1.inject('applet_container1');
        applet2.inject('applet_container2');
    });
</script>
<script type="text/javascript">
    function power(){
        var applet = document.ggbApplet;
        var draw_x = 'x = '+ $("#value_x").val();
        applet.evalCommand(draw_x);
        applet.evalCommand("s = 2 ^ x");
    }
    /*function create_straight() {
        var applet = document.ggbApplet;
        var point_a = document.getElementById('point_a').value;
        var point_b = document.getElementById('point_b').value;
        var draw_a = 'x = '+ point_a;
        var draw_b = 'B = '+ point_b;
        applet.evalCommand(draw_a);
        applet.evalCommand(draw_b);
        applet.evalCommand("s = 2 ^ x");
    }
    function seno () {
        var applet = document.ggbApplet;
        applet.evalCommand("y = sin(x)");
    }*/
</script>

<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-justify">
        <p>
            Experimenta con las siguientes gráficas y observa que los logaritmos son inversos a los exponentes. Utiliza distintas bases.
        </p>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="success" class="text-center">
        <div id="container-fluid">
            <div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container2">
                <!-- <article class="geogebraweb" data-param-width="100%" data-param-height="100%" data-param-ggbbase64="UEsDBBQACAgIAM1CWUMAAAAAAAAAAAAAAAAWAAAAZ2VvZ2VicmFfamF2YXNjcmlwdC5qc0srzUsuyczPU0hPT/LP88zLLNHQVKiuBQBQSwcI1je9uRkAAAAXAAAAUEsDBBQACAgIAM1CWUMAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1svVZtb9s2EP6c/oqDPicxSVGyHMgp1gIFCmTdgHTDsG+URMtcZFEQKb8M/fE7kpIjpy/o0GFB7CN5D++5O96Rzl8fdw3sZW+UbtcRvSURyLbUlWrrdTTYzU0Wvb5/lddS17LoBWx0vxN2HXGHVNU62iSblBPGbgou0hu+yuKbjONXucrKpCJVma14BHA06q7VH8ROmk6U8rHcyp140KWwnnhrbXe3WBwOh9uJ6lb39aKui9ujqSJAN1uzjsbBHZq72HSIPZwRQhd//PwQzN+o1ljRljICF8Kg7l9d5QfVVvoAB1XZ7TrKCIaxlareYkypmywcqMOEdLK0ai8Nbp1Nfcx210UeJlqnvwojaM7hRFCpvapkv47ILUsi0L2SrR21dGRZTPvzvZKHYMiNPAcmzWrdFMLZgE+fgBFG4NoJGgRDkaZBRcIaiYNgQfAgkoDhYTsPUB4wPGB4HMFeGVU0Eo9UNAZzptpNj+d1nht7aqT3Z1x4jpdeY0xG/Y3g2CUxJBnXCbl2H8zsNZ+yOwuSzlhtP/xL0olymbHvp2Q/FGg8cbIvhcmSr4SZfoM0xP09cdJkxolU/t9/PmOMvxXmS8Yw/zHClP8vIeaLqVXysTvAbB12rB4rd8b1S7yCZOXKnkKCvZEuscoToCsUSwbYDUAT4AlOaQapk0uIl6jgEEMGDkdj8M2RZPjFl95YCgkac6tL7EmgSMQhiYH6nuKAnQS+L7FHWYyIJIEENzl6ypyJOAWe4izOgKOPriWXFIExbsQ50jOIKcRuM10CSyF19ih3rZ5mznU0ySAlkFJnELsaOzp0M+IziF006Zgu1XaDvUhRuaumodXd+SwQjffR8z0X7qeLa/Aqb0QhG3wZHt1JAuxF4zrCE210a2E6RBbW6l50W1WaR2kt7jLwl9iLB2Hl8R2izcTtsaVuza+9tm91M+xaA1Dqhpx91g2djdnZa5zEMwWfK5KZIp2Nl1/k1aiBwUjk172Z4KKq3jvE89WAmfylbU5veimeOq0uw8gX/pHJ5VA2qlKi/R2L1bG4vMD05vjranpzOKOTI7qvHk8GKxiOf8pe4x1Dk1sy/8Pb5xRU8UsVHrgphWu+hFxqsLdOX1PxwC335yMSR3mOvu5VNR+/N290U51z4cN/Kzo79P7XAnrXu6B+autG+hLxjY1PcflU6ONjqI042Pp46nBGAn9R+7QDXg0swdeyHmURpMc4x84o4jHEI8hUbKo66+mKeYSXRZAehdUbXBsDpVOUlEw0yvgLjUQXbeNL3z3sQ6vswzSxqnx6jtThPwy7Qp4L6NIk/Y9M5osXBZY/yb6VzVjPeJCDHkxoz1mpV7JUO5wGxZgQ4Q7rN3QgrFay7uXkd+N/h4V0eS2Zl+pny97Uu17v3rf7j1gJLxzIF5OXuSl71bl6gwLfgCf5XFOVMgKfkGq+zzUghl66pwLTY11qsDUHu9W9/6mFNwpKxzCH+nYcf0ve/wNQSwcI2ajKq1gEAADoCgAAUEsBAhQAFAAICAgAzUJZQ9Y3vbkZAAAAFwAAABYAAAAAAAAAAAAAAAAAAAAAAGdlb2dlYnJhX2phdmFzY3JpcHQuanNQSwECFAAUAAgICADNQllD2ajKq1gEAADoCgAADAAAAAAAAAAAAAAAAABdAAAAZ2VvZ2VicmEueG1sUEsFBgAAAAACAAIAfgAAAO8EAAAAAA=="></article> -->
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="form-group">
                    <label for="usr">Punto A:</label>
                    <input type="text" class="form-control" id="value_x">
                </div>
                <div class="form-group">
                    <label for="usr">Punto B:</label>
                    <input type="text" class="form-control" id="point_b">
                </div>
                <button onclick="power()" type="button" class="btn btn-primary">Construir</button>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="error" class="text-center" hidden>
        <br><br>
        <p class="bg-danger text-danger" style="padding: 15px;">Incorrecto, intenté de nuevo</p>
    </div>

</div>