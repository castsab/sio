
$('.option-index .btnOpenModal').click(function() {
    actionAjaxOpenModal($(this),{'id_combo': $(this).attr('id_combo')});
});

$('.modal-body').on('submit', 'form#option-form', function(e) {
    e.preventDefault();
    var $form = $(this);
    actionAjaxSubmitForm($form, 'gridWiewOption');
});

$('.option-index .btnActionDelete').click(function() {
    if (confirm($(this).attr('confirm')))
        actionAjaxDelete($(this), 'gridWiewOption');
});




