var aux_example_slide = 2;
var max_examples = 3;

function moreExamples(i){
    for(var i = 1; i<=max_examples; i++){
        $('#example-'+i).hide();
    }

    $('#example-'+aux_example_slide).show();
    aux_example_slide++;
    if(aux_example_slide > max_examples){
        aux_example_slide = 1;
    }

}

function generateArgument(){
    return Math.floor((Math.random() * 100) + 1);
}

function generateBase(){
    return Math.floor((Math.random() * 10) + 1);
}

function generateExamplesLog(){
    $('#base').val(generateBase());
    $('#argument').val(generateArgument());
}

function validateLog(){
    var base = $('#base').val();
    var argument = $('#argument').val();
    var response = parseFloat($('#response').val()).toFixed(2);

    result = Math.log(argument) / Math.log(base);
    result = result.toFixed(2);

    if(result == response){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function validateSqrt(correctAnswer){
    var potencia = 1/$("#potencia").val();
    var numero = $("#numero").val();
    var answer = Math.pow(numero, potencia);
    console.log(potencia);
    console.log(numero);
    console.log(answer);
    $("#answer").val(answer);
    if(correctAnswer == answer){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function calculateSwrt2(){
    var potencia = 1/$("#potencia").val();
    var numero = $("#numero").val();
    var potencia2 = $("#potencia2").val();
    var answer = Math.pow(numero, potencia);
    var answer = Math.pow(answer, potencia2);
    return answer;
}

function validateSqrt2(correctAnswer){
    answer = calculateSwrt2();
    console.log(answer);
    $("#answer").val(answer);
    if(correctAnswer == answer){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function validateSqrt3(correctAnswer){
    answer = calculateSwrt2();
    answer = (1/answer).toFixed(5);
    console.log(answer);
    $("#answer").val(answer);
    if(correctAnswer == answer){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function validateBasePower(){
    var base_user_1 = $("#base_user_1").val();
    var base_user_2 = $("#base_user_2").val();
    var base_user_3 = $("#base_user_3").val();
    var base_user_4 = $("#base_user_4").val();
    var power_user_1 = $("#power_user_1").val();
    var power_user_2 = $("#power_user_2").val();
    var power_user_3 = $("#power_user_3").val();
    var power_user_4 = $("#power_user_4").val();

    var base_correct_1 = $("#base_correct_1").val();
    var base_correct_2 = $("#base_correct_2").val();
    var base_correct_3 = $("#base_correct_3").val();
    var base_correct_4 = $("#base_correct_4").val();
    var power_correct_1 = $("#power_correct_1").val();
    var power_correct_2 = $("#power_correct_2").val();
    var power_correct_3 = $("#power_correct_3").val();
    var power_correct_4 = $("#power_correct_4").val();


    if(base_user_1 == base_correct_1 && power_user_1 == power_correct_1){
        $('#success_1').show();
        $('#error_1').hide();
    }else{
        $('#success_1').hide();
        $('#error_1').show();
    }
    if(base_user_2 == base_correct_2 && power_user_2 == power_correct_2){
        $('#success_2').show();
        $('#error_2').hide();
    }else{
        $('#success_2').hide();
        $('#error_2').show();
    }
    if(base_user_3 == base_correct_3 && power_user_3 == power_correct_3){
        $('#success_3').show();
        $('#error_3').hide();
    }else{
        $('#success_3').hide();
        $('#error_3').show();
    }
    if(base_user_4 == base_correct_4 && power_user_4 == power_correct_4){
        $('#success_4').show();
        $('#error_4').hide();
    }else{
        $('#success_4').hide();
        $('#error_4').show();
    }

}

function validateBasePowerByCheckBox(){
    var check_1 = $('#answer_1').is(':checked');
    var check_2 = $('#answer_2').is(':checked');
    var check_3 = $('#answer_3').is(':checked');
    var check_4 = $('#answer_4').is(':checked');
    if(check_1 && check_2 && check_4 && check_3 == false){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }

}

function validateMultipleCheckBox(){
    var i = 1;
    $("input[name='answer[]']").each(function ()
    {
        var answer_user = $($(this)[0]).is(":checked");
        var correct_answer = Boolean($(this)[0].value);
        if(answer_user == correct_answer){
            $('#success_'+i).show();
            $('#error_'+i).hide();
        }else{
            $('#error_'+i).show();
            $('#success_'+i).hide();
        }
        i++;
    });
}

function validateMultipleCheckBox(){
    var i = 1;
    $("input[name='answer[]']").each(function () {
        var answer_user = $($(this)[0]).is(":checked");
        var correct_answer = $(this)[0].value;
        if(correct_answer == 'true'){
            correct_answer = true;
        }else{
            correct_answer = false;
        }

        if(answer_user == correct_answer){
            $('#success_'+i).show();
            $('#error_'+i).hide();
        }else{
            $('#error_'+i).show();
            $('#success_'+i).hide();
        }
        i++;
    });
}

function validateMultipleBaseAndPowerCheckBox(){
    for(var i=1; i<=4; i++){
        if($('#base_user_'+i).val().toLowerCase() == $('#base_correct_'+i)[0].value && $('#power_user_'+i).val().toLowerCase() == $('#power_correct_'+i)[0].value){
            $('#success_'+i).show();
            $('#error_'+i).hide();
        }else{
            $('#error_'+i).show();
            $('#success_'+i).hide();
        }
    }
}

function validateMultipleBaseAndPowerCheckBox2(){
    for(var i=1; i<=4; i++){
        if($('#num_user_'+i).val() ==$('#num_correct_'+i)[0].value && $('#base_user_'+i).val().toLowerCase() == $('#base_correct_'+i)[0].value && $('#power_user_'+i).val().toLowerCase() == $('#power_correct_'+i)[0].value){
            $('#success_'+i).show();
            $('#error_'+i).hide();
        }else{
            $('#error_'+i).show();
            $('#success_'+i).hide();
        }
    }
}

function validateMultipleBaseAndPowerCheckBox3(){
    for(var i=1; i<=4; i++){
        if($('#base1_user_'+i).val().toLowerCase() == $('#base1_correct_'+i)[0].value &&
            $('#power1_user_'+i).val() ==$('#power1_correct_'+i)[0].value &&
            $('#base2_user_'+i).val().toLowerCase() == $('#base2_correct_'+i)[0].value &&
            $('#power2_user_'+i).val().toLowerCase() == $('#power2_correct_'+i)[0].value){
            $('#success_'+i).show();
            $('#error_'+i).hide();
        }else{
            $('#error_'+i).show();
            $('#success_'+i).hide();
        }
    }
}

function validateMultipleBaseAndPowerCheckBox4(){
    for(var i=1; i<=4; i++){
        if($('#base_user_'+i).val() ==$('#base_correct_'+i)[0].value &&
            $('#value_x_user_'+i).val().toLowerCase() == $('#value_x_correct_'+i)[0].value &&
            $('#power_x_user_'+i).val() ==$('#power_x_correct_'+i)[0].value &&
            $('#value_y_user_'+i).val().toLowerCase() == $('#base2_correct_'+i)[0].value &&
            $('#power_y_user_'+i).val().toLowerCase() == $('#power2_correct_'+i)[0].value){
            $('#success_'+i).show();
            $('#error_'+i).hide();
        }else{
            $('#error_'+i).show();
            $('#success_'+i).hide();
        }
    }
}

function ln2Inputs(){
    var correct = Math.log(16) / Math.log(3);
    var user_answer = Math.log($("#numerador")[0].value)/Math.log($("#denominador")[0].value);
    console.log($("#numerador")[0].value)
    console.log($("#denominador")[0].value)
    $("#answer_user").val(user_answer);
    if(correct == user_answer){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}