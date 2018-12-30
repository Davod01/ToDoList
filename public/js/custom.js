$(document).ready(function(){
    $( '#task-modal-ccheckbox_all' ).prop('checked',false);
    $('.task-modal-check-item').prop('checked',false);
});


$( '#task-modal-ccheckbox_all' ).on( "click", checkAllFunc )

function checkAllFunc()
{
    if( $('#task-modal-ccheckbox_all').prop('checked') == true )
    {
        $('.task-modal-check-item').prop('checked',true);
    }
    else
    {
        $('.task-modal-check-item').prop('checked',false);
    }
};
 