$( document ).ready(function() {
    $(function() {

            $('.drag').draggable({
                //revert: "invalid"
            });
            $('.drop').droppable({
                drop: function(e, ui) {

                }
            });


    });

});

function createDragable(){
    $('.drag').draggable({
        //revert: "invalid"
    });
    $('.drop').droppable({
        drop: function(e, ui) {

        }
    });
}

function cloneImage(id_aux){
    //console.log($(item).attr("id"));
    var id_aux = $('#'+$(id_aux).attr("id"));
    id_aux.clone().prependTo("#imagenes-cuadros")
    createDragable();
}

function rotate(){
    $(window.element_to_rotate).toggleClass('rotate-90');
}

window.element_to_rotate = null;

function setElementToRotate(element){
    window.element_to_rotate = element;
}


function validateAnswer10(){
    var number_1 = parseFloat($("#number_1").val());
    var number_2 = parseFloat($("#number_2").val());

    if(number_1 == 50.5 && number_2 == 50.5){
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