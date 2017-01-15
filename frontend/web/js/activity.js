
$('.activity-index .btnOpenModal').click(function() {
    actionAjaxOpenModal($(this),{'id_service': $(this).attr('id_service')});
});

$('.modal-body').on('submit', 'form#activity-form', function(e) {
    e.preventDefault();
    var $form = $(this);
    actionAjaxSubmitForm($form, 'gridWiewActivity');
});

$('.activity-index .btnActionDelete').click(function() {
    if (confirm($(this).attr('confirm')))
        actionAjaxDelete($(this), 'gridWiewActivity');
});




