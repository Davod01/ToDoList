$(document).ready(function(){
    UpdateTodo_list_footer();
});



$( '#show-TodoListModal' ).click(function(event){
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
    $('#TodoList-Modal-submit').removeClass().addClass('btn btn-primary').text('Create');
    $('#TodoList-Modal-title').text('Create TodoList');
    
});



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
            if( $('#TodoList-Modal-submit').hasClass('editTaskMode') ){
                let _html = $.parseHTML(response);
                let id = _html["0"].id;
                $('#' + id).replaceWith(response);
                $('#' + id).find('.Update_or_new_status').fadeIn().text('Updated');
                UpdateTodo_list_footer();
                showMessage('Todo Lists is Updated','alert alert-primary');
            }
            else if( $('#TodoList-Modal-submit').hasClass('deleteTaskMode') ){
                $('#todo-list-'+ response.id).fadeOut(function(){
                    $(this).remove();
                    UpdateTodo_list_footer();
                });
                showMessage('Todo Lists is Deleted','alert alert-waning');
            }
            else{
                $('#Todo_List').prepend(response);
                $('#Todo_List li:first-child').find('.Update_or_new_status').fadeIn();
                UpdateTodo_list_footer();
                showMessage('Todo Lists is Created','alert alert-primary');
            }
            $('#TodoList-Modal').modal('hide');

            // console.log(response);
        },
        error:function(xhr){
            let errors = xhr.responseJSON;
            if($.isEmptyObject(errors) == false){
                console.log(errors);

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
    switch (total) {
        case 0:
            $('#Alert-for-user').fadeIn();
            $('.card').fadeOut(0);
            break;
        case 1:
            $('#Alert-for-user').fadeOut(0);
            $('#todo_list_footer').text(total).next().text(' Records');
            $('.card').fadeIn(0);
        default:
            $('#Alert-for-user').fadeOut(0);
            $('#todo_list_footer').text(total).next().text(' Records');
            $('.card').fadeIn(0);
            break;
    }

    return total;
}


function showMessage(message,_class){
    $('#Alert-for-user-2').removeClass().addClass(_class).text(message).fadeTo(1000,500)
    .slideUp(1200);
}
 

$('#TodoList-Modal').on('keypress',":input:not(textarea)",function(event){
    return event.keyCode != 13;
});



$('body').on('click',".Show_editTodoListForm",function(event){
    event.preventDefault();
    let url = $(this).attr('href');

    $.ajax({
        url: url,
        datatype: 'html',
        success: function(response){
            $('#TodoList-Modal-body').html(response);
        }
    });
    $('#TodoList-Modal').modal('show');
    $('#TodoList-Modal-submit').removeClass().addClass('btn btn-primary editTaskMode').text('Update');
    $('#TodoList-Modal-title').text('Update TodoList');
});


$('body').on('click',".Show_deleteTodoListForm",function(event){
    event.preventDefault();
    let url = $(this).attr('href');

    $.ajax({
        url: url,
        datatype: 'html',
        success: function(response){
            $('#TodoList-Modal-body').html(response);
        }
    });
    $('#TodoList-Modal').modal('show');
    $('#TodoList-Modal-submit').removeClass().addClass('btn btn-danger deleteTaskMode').text('Delete');
    $('#TodoList-Modal-title').text('Delete TodoList');
    
});
    