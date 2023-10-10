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

    $('.editbtn').on('click', function(){
        $('#editProducto').modal('show');
        $tr = $(this).closest('tr');
        let data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();
        $('#idEdit').val(data[0]);
        $('#skuEdit').val(data[1]);
        $('#tituloEdit').val(data[2]);
        $('#cantidadEdit').val(data[3]);
        $('#precioEdit').val(data[4]);
        $('#proveedorEdit').val(data[5]);
    });

    $('#editForm').on('submit', function(e){
        e.preventDefault();
        let id = $('#idEdit').val();
        $.ajax({
            type: "PATCH",
            url: "/producto/"+id,
            data: $('#editForm').serialize(),
            success: function(response){
                console.log(response);
                $('#editProducto').modal('hide');
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