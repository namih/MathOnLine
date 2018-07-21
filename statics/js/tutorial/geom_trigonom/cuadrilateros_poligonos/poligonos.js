function anglesInPolygon(number_of_sides){
    var triangules = number_of_sides - 2;
    var angles = triangules * 180;
    var answer_user = parseFloat($("#answer_user").val());

    if(angles == answer_user){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function internalAnglesPolygon(number_of_sides){
    var triangules = number_of_sides - 2;
    var internal_angles = (triangules * 180)/number_of_sides;
    var answer_user = parseFloat($("#answer_user").val());
    console.log('angles',internal_angles);
    console.log('answer_user',answer_user);

    if(internal_angles == answer_user){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function infoPolygonBySides(){
    var number_of_sides = parseFloat($('#number_sides').val());
    var triangules = number_of_sides - 2;
    var angles = (triangules * 180);
    var angle = angles / number_of_sides;
    var answer_number_triangle = parseFloat($('#number_triangle').val());
    var answer_grades = parseFloat($('#grades').val());
    var answer_grade = parseFloat($('#grade').val());
    var correct_triangules = triangules == answer_number_triangle;
    var correct_angles = angles == answer_grades;
    var correct_angle = angle == answer_grade;
    var is_correct = correct_triangules && correct_angles && correct_angle;
    if(is_correct){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }

}

function numbersSides(){
    var number_of_sides = parseInt($("#number_sides").val());
    var answer = parseInt($('#answer').val());
    var is_correct = answer == number_of_sides;
    console.log(number_of_sides);
    if(is_correct){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function moreNumbersSides(){
    var number_of_sides = Math.floor(Math.random() * 6) + 3;
    var triangules = number_of_sides - 2;
    var angles = (triangules * 180);
    console.log(number_of_sides);
    $("#number_sides").val(number_of_sides);
    $("#grade").text(angles+"°");
}

window.aux_more_image = 1;
function moreImage(){
    window.aux_more_image++;

    switch (window.aux_more_image){
        case 1:
            $('#example_1').show();
            $('#example_2').hide();
            $('#example_3').hide();
            break;
        case 2:
            $('#example_1').hide();
            $('#example_2').show();
            $('#example_3').hide();
            break;
        case 3:
            window.aux_more_image = 0;
            $('#example_1').hide();
            $('#example_2').hide();
            $('#example_3').show();
            break;
    }

}

function moreImage2(){
    moreImage();
    var sides = parseInt($("#sides").text());
    sides++;
    if(sides>5){
        sides = 3;
    }
    switch (sides){
        case 3:
            $("#sides").text(sides);
            break;
        case 4:
            $("#sides").text(sides);
            break;
        case 5:
            $("#sides").text(sides);
            break;
    }
}

function validateAnglesExternal(){
    var answer = parseFloat($("#answer").val());
    var is_correct = answer == 360;
    if(is_correct){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function validateYesNo(){
    var radio_button = $('input:radio[name=true_false]:checked');
    if(radio_button.length > 0){
        var is_correct = radio_button.val() == 'true';
        if(is_correct){
            $('#success').show();
            $('#error').hide();
        }else{
            $('#success').hide();
            $('#error').show();
        }
    }
}

function correctAB(correct_a, correct_b){
    var val_a = parseFloat($('#number_a').val());
    var val_b = parseFloat($('#number_b').val());
    var is_correct = (val_a  == correct_a && val_b == correct_b);
    if(is_correct){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }

}

function validateA(correct_a){
    var val_a = parseFloat($('#number_a').val());
    var is_correct = (val_a  == correct_a);
    if(is_correct){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function validateABCD(correct_a, correct_b, correct_c, correct_d){
    var val_a = parseFloat($('#number_a').val());
    var val_b = parseFloat($('#number_b').val());
    var val_c = parseFloat($('#number_c').val());
    var val_d = parseFloat($('#number_d').val());
    var is_correct = (val_a  == correct_a && val_b == correct_b && val_c  == correct_c && val_d == correct_d);
    if(is_correct){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function validateABC(correct_a, correct_b, correct_c){

    var val_a = parseFloat($('#number_a').val());
    var val_b = parseFloat($('#number_b').val());
    var val_c = parseFloat($('#number_c').val());
    var is_correct = (val_a  == correct_a && val_b == correct_b && val_c  == correct_c);
    if(is_correct){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}

function validateMultipleCheckBox(){
    var total_correct = 0;
    $("input[name='answer[]']").each(function ()
    {
        var answer_user = $($(this)[0]).is(":checked");
        var correct_answer = ($(this)[0].value) === 'true';
        if(answer_user == correct_answer){
            total_correct++;
        }
    });

    if(total_correct == 4){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}