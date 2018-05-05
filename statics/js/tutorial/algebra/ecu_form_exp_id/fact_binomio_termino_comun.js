function validateAnswer8(){
    var number_1 = parseFloat($("#number_1").val());
    var number_2 = parseFloat($("#number_2").val());
    var result = 12*(number_1 + number_2);
    if(result == 216){
        $('#success').show();
        $('#error').hide();
    } else {
        $('#success').hide();
        $('#error').show();
    }
}


