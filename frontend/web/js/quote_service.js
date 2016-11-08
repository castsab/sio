
$('.quote-service-index .btnOpenModal').click(function() {
    actionAjaxOpenModal($(this),{'id_quote': $(this).attr('id_quote')});
});

$('.modal-body').on('submit', 'form#quote-service-form', function(e) {
    e.preventDefault();
    var $form = $(this);
    actionAjaxSubmitForm($form, 'gridWiewQuoteService');
});

$('.quote-service-index .btnActionDelete').click(function() {
    if (confirm($(this).attr('confirm')))
        actionAjaxDelete($(this), 'gridWiewQuoteService');
});






