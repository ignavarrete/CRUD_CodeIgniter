$(document).ready(function() {
    $('#tablaUF').DataTable();

    $("#agregarInfo").validate({
        rules: {
            nombre: "required",
            codigo: "required",
            unidad: "required",
            valor: "required",
            fecha: "required",
        },
        messages: {

        },

        submitHandler: function(form) {
            $.ajax({
                url: 'informacionhistorica/guardar',
                data: $('#agregarInfo').serialize(),
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    let informacion = '<tr id="'+response.data.id+'">';
                    informacion += '<td>' + response.data.id + '</td>';
                    informacion += '<td>' + response.data.nombreIndicador + '</td>';
                    informacion += '<td>' + response.data.codigoIndicador + '</td>';
                    informacion += '<td>' + response.data.unidadMedidaIndicador + '</td>';
                    informacion += '<td>' + response.data.valorIndicador + '</td>';
                    informacion += '<td>' + response.data.fechaIndicador + '</td>';
                    informacion += '<td><a data-id="' + response.data.id + '" class="btn btn-primary btnEdit">Editar</a> <a data-id="' + response.data.id + '" class="btn btn-danger btnDelete">Eliminar</a></td>';
                    informacion += '</tr>';
                    $('#tablaUF tbody').prepend(informacion);
                    $('#agregarInfo')[0].reset();
                    $('#addModal').modal('hide');

                    $('#tablaUF').DataTable();

                },
                error: function(data) {

                }
            });
        }
    });

    $('body').on('click', '.btnEdit', function() {
        let informacion_id = $(this).attr('data-id');
        $.ajax({
            url: 'informacionhistorica/editar/'+informacion_id,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#updateModal').modal('show');
                $('#actualizarInfo #hiddenInfoId').val(response.data.id);
                $('#actualizarInfo #nombre').val(response.data.nombreIndicador);
                $('#actualizarInfo #codigo').val(response.data.codigoIndicador);
                $('#actualizarInfo #unidad').val(response.data.unidadMedidaIndicador);
                $('#actualizarInfo #valor').val(response.data.valorIndicador);
                $('#actualizarInfo #fecha').val(response.data.fechaIndicador);

            },
            error: function(data) {

            }
        })
    });

    $("#actualizarInfo").validate({
        rules: {
            nombre: "required",
            codigo: "required",
            unidad: "required",
            valor: "required",
            fecha: "required",
        },
        messages: {

        },
        submitHandler: function(form) {
       
            $.ajax({
                url: '/informacionhistorica/actualizar',
                data: $('#actualizarInfo').serialize(),
                type: 'POST',
                //dataType: 'json',
                success: function(response) {
                    let informacion = '<td>' + response.data.id + '</td>';
                    informacion += '<td>' + response.data.nombreIndicador + '</td>';
                    informacion += '<td>' + response.data.codigoIndicador + '</td>';
                    informacion += '<td>' + response.data.unidadMedidaIndicador + '</td>';
                    informacion += '<td>' + response.data.valorIndicador + '</td>';
                    informacion += '<td>' + response.data.fechaIndicador + '</td>';
                    informacion += '<td><a data-id="' + response.data.id + '" class="btn btn-primary btnEdit">Editar</a>  <a data-id="' + response.data.id + '" class="btn btn-danger btnDelete">Eliminar</a></td>';
                    $('#tablaUF tbody #'+ response.data.id).html(informacion);
                    $('#actualizarInfo')[0].reset();
                    $('#updateModal').modal('hide');
                },
                error: function(data) {

                }
            });
        }
    });

    $('body').on('click', '.btnDelete', function() {
        let informacion_id = $(this).attr('data-id');
        // alert(informacion_id);
        $.ajax({
            url: 'informacionhistorica/eliminar/'+informacion_id,
            type: 'GET',
            success: function(response){
                $('#tablaUF tbody #'+ informacion_id).remove();
            },
            error: function(data){

            }
        })
    })

});