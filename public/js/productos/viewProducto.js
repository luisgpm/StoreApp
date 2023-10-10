$(document).ready(function () {
	$('.viewbtn').on('click', function(){
        $('#verProductoModal').modal('show');
        $tr = $(this).closest('tr');
        let data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();
        console.log(data);
        $('#ver-sku').val(data[1]);
        $('#ver-titulo').val(data[2]);
        $('#ver-cantidad').val(data[3]);
        $('#ver-precio').val(data[4]);
        $('#ver-proveedor').val(data[5]);
        $('#ver-created_at').val(data[6]);
        $('#ver-updated_at').val(data[7]);

    });
});