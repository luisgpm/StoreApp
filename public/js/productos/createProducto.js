$(document).ready(function () {
    function showValidationErrors(name, error) {
        let group = $("#form-group-" + name);
        group.addClass('has-error');
        group.find('.help-block').text(error);
    }
    function clearValidationError(name) {
        var group = $("#form-group-" + name);
        group.removeClass('has-error');
        group.find('.help-block').text('');
    }
    $("#sku, #titulo, #cantidad, #precio, #proveedor").on('keyup', function () {
        clearValidationError($(this).attr('id').replace('#', ''))
    });


    $('.create_btn').on('click', function(){
        $('#createModal').modal('show');
    });

    $('#createForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/producto",
            data: $('#createForm').serialize(),
            success: function(response){
                console.log(response);
                $('#createModal').modal('hide');
                location.reload();
            },
            error: function(res){
                if (res.status == 422) {
                    var data = res.responseJSON.errors;
                    for (let i in data) {
                         showValidationErrors(i, data[i][0]);
                    }
                }   
            }
        });
    });
});
