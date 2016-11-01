
$('.service-index .btnOpenModal').click(function() {
    actionAjaxOpenModal($(this),{'id_line_business': $(this).attr('id_line_business')});
});

$('.modal-body').on('submit', 'form#service-form', function(e) {
    e.preventDefault();
    var $form = $(this);
    actionAjaxSubmitForm($form, 'gridWiewOption');
});

$('.service-index .btnActionDelete').click(function() {
    if (confirm($(this).attr('confirm')))
        actionAjaxDelete($(this), 'gridWiewService');
});




