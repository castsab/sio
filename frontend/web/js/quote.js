
$('.quote-index .btnOpenModal').click(function() {
    actionAjaxOpenModal($(this),{'id_quote': $(this).attr('id_quote')});
});

$('.modal-body').on('submit', 'form#quote-form', function(e) {
    e.preventDefault();
    var $form = $(this);
    actionAjaxSubmitFormQuote($form, 'gridWiewQuote');
});

$('.quote-index .btnActionDelete').click(function() {
    if (confirm($(this).attr('confirm')))
        actionAjaxDelete($(this), 'gridWiewQuote');
});

function actionAjaxSubmitFormQuote($form,idGridWiew) {
    $('#' + $form.attr("id")).ajaxSubmit({
        type: "post",
        url: $form.attr("action"),
        dataType: 'json',
        cache: false,
        success: function(result) {
            if (result.state == '1') {
                console.log(result.model.id);
                if (confirm("Se creó cotización #"+result.model.id+", deseha adicionar servicios?")){
                    var url = "quote/quote/view?id="+result.model.id;
                    redirectPage(url);
                }else{
                    $('#myModal').modal('hide');
                    $("#"+idGridWiew).yiiGridView("applyFilter");
                }
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

$("#btnCalculateWorkingHours").click(function(){
    $.ajax({
        type: "post",
        url: "/sio/frontend/web/quote/quote/calculate-working-hours",
        dataType: 'json',
        cache: false,
        data: {estimate_hours:$("#estimate_hours").val()},
        success: function(result) {
            if (result.state == '1') {
                $("#VBMA").html("$"+result.VBMA);
                $("#workingHours").html("$"+result.workingHours);
                $("#calculateEstimate").html("$"+result.calculateEstimate);
            } 
        },
        error: function() {
            console.log("server error");
        }
    });
});




