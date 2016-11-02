
$('.client-contact-index .btnOpenModal').click(function() {
    actionAjaxOpenModal($(this),{'document': $(this).attr('document')});
});

$('.modal-body').on('submit', 'form#client-contact-form', function(e) {
    e.preventDefault();
    var $form = $(this);
    actionAjaxSubmitForm($form, 'gridWiewClientContact');
});

$('.client-contact-index .btnActionDelete').click(function() {
    if (confirm($(this).attr('confirm')))
        actionAjaxDelete($(this), 'gridWiewClientContact');
});




