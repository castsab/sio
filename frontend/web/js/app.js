history.pushState({ page: 1 }, "sio", "#sio");
window.onhashchange = function (event) {
    window.location.hash = "sio";
};

var baseUrl = '';

$(document).ready(function(){
    baseUrl = $('#baseUrl').val();
});

function actionAjaxOpenModal(element,data){
    loadingBar();
    $('.modal-body').load(element.attr('value'),data);
    $('#myModal').modal('show');
}

function loadingBar() {
    $('#myModal .modal-body').html('<img src="'+baseUrl+'/images/loadbar.gif">');
}

function actionAjaxSubmitForm($form,idGridWiew) {
    $('#' + $form.attr("id")).ajaxSubmit({
        type: "post",
        url: $form.attr("action"),
        dataType: 'json',
        cache: false,
        success: function(result) {
            if (result.state == '1') {
                $('#myModal').modal('hide');
                $("#"+idGridWiew).yiiGridView("applyFilter");
            } else {
                if(result.state == '2'){
                    $("#message-contact").addClass('alert alert-info').html(result.message).show('slide');
                }else{
                    console.log("server error");
                    $form.replaceWith('<button class="newType">Fail</button>').fadeOut();
                }
            }
        },
        error: function() {
            console.log("server error");
            $form.replaceWith('<button class="newType">Fail</button>').fadeOut();
        }
    });
}

function actionAjaxDelete(element,idGridWiew) {
    $.ajax({
        type: "post",
        url: element.attr('value'),
        data: element.attr('data'),
        dataType: 'json',
        async: true,
    }).done(function(result) {
        if (result.state == '1') {
            $('#myModal').modal('hide');
            $("#"+idGridWiew).yiiGridView("applyFilter");
        } else {
            setAjaxErrors(result.message);
            return false;
        }
    }).fail(function() {
        console.log("server error");
    });
}
;

function setAjaxErrors(errors) {
    $.each(errors, function(key, value) {
        elemento = $("div[class*='" + key + "']");
        elemento.addClass('has-error');

        if (elemento.children('input,select,textarea').is(':visible'))
            elemento.children('.help-block').text(value);
    });
}

function redirectPage(url){
    window.location.href = baseUrl+"/"+url;
}

