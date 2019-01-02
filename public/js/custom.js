$(document).ready(function(){
    $( '#task-modal-checkbox_all' ).prop('checked',false);
    $('.task-modal-check-item').prop('checked',false);
    if(UpdateTodo_list_footer() > 0){
        $('#Alert-to-user').removeClass().fadeOut(0);
        $('.card').fadeIn(0);
    }
    else{
        $('.card').fadeOut(0);
        $('#Alert-to-user').removeClass().addClass('alert alert-warning').text('No Record Found').fadeIn(0);
    }
});

// click event
$( '#task-modal-checkbox_all' ).on( "click", checkAllFunc );
$( '#show-newTaskModal' ).on( "click", show_newTaskModal );
// click event


function checkAllFunc()
{
    if( $('#task-modal-checkbox_all').prop('checked') == true )
    {
        $('.task-modal-check-item').prop('checked',true);
    }
    else
    {
        $('.task-modal-check-item').prop('checked',false);
    }
};


function show_newTaskModal(event){
    event.preventDefault();
    let url = $(this).attr('href');
    $.ajax({
        url: url,
        datatype : 'html',
        success: function(response){
            $('#TodoList-Modal-body').html(response);
        }
    });
    $('#TodoList-Modal').modal('show');
};



$( '#TodoList-Modal-submit' ).click(function(event){
    event.preventDefault();

    let form = $('#TodoList-Modal-body form'),
        url = form.attr('action');

    form.find('.invalid-feedback').remove();
    form.find('.valid-feedback').remove();
    form.find('.is-invalid').removeClass('is-invalid');
    form.find('.is-valid').removeClass('is-valid');

    $.ajax({
        url: url,
        method : 'POST',
        data:form.serialize(),
        success : function(response){
            if( $('.card').css('display') == 'none' ){

                $('#Alert-to-user').removeClass().fadeOut(0);
                $('.card').fadeIn(0);
                $('#Todo_List').prepend(response);
                $('#TodoList-Modal').modal('hide');
                UpdateTodo_list_footer();
            }
            else{
                $('#Todo_List').prepend(response);
                $('#TodoList-Modal').modal('hide');
                UpdateTodo_list_footer();
            }

            // console.log(response);
        },
        error:function(xhr){
            let errors = xhr.responseJSON;
            if($.isEmptyObject(errors) == false){
                // console.log(errors);


                if( errors.hasOwnProperty('errors') ){
                    if(errors.errors.hasOwnProperty('title')){
                        $('#newTaskTitle').addClass('is-invalid');
                        $('#todoList-form-group-Title').append('<div class="invalid-feedback">' + errors.errors.title[0] + '</div>');
                    }
                    else{
                        $('#newTaskTitle').addClass('is-valid');
                        $('#todoList-form-group-Title').append('<div class="valid-feedback">Looks Good</div>');
                    }
        
        
                    if(errors.errors.hasOwnProperty('description')){
                        $('#newTaskDescription').addClass('is-invalid');
                        $('#todoList-form-group-Description').append('<div class="invalid-feedback">' + errors.errors.description[0] + '</div>');
                    }
                    else{
                        $('#newTaskDescription').addClass('is-valid');
                        $('#todoList-form-group-Description').append('<div class="valid-feedback">Looks Good</div>');
                    }
                }
                
            }
            
        }
    });
});


function UpdateTodo_list_footer(){
    let total = $('#Todo_List').children().length;
    $('#todo_list_footer').text(total).next().text(total> 1 ? ' Records':' Record');
    return total;
}


function showMessage(message){
    $('#Alert-to-user').removeClass().addClass('alert alert-primary').text(message).fadeIn(500,function(){
        $(this).fadeOut(10000);
    });
}
 

$('#TodoList-Modal').on('keypress',":input:not(textarea)",function(event){
    return event.keyCode != 13;
});