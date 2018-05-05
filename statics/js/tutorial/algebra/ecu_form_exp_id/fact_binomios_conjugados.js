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

    if(total_correct == 5){
        $('#success').show();
        $('#error').hide();
    }else{
        $('#success').hide();
        $('#error').show();
    }
}