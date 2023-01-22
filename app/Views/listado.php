<?php echo $header ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Información Historica UF</h4>
                <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addModal">Agregar</a>
            </div>
            <div class="card-body">

            </div>
            <table class="table table-bordered table-striped" id="tablaUF">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre Indicador</th>
                        <th>Código Indicador</th>
                        <th>Unidad Medida Indicador</th>
                        <th>Valor Indicador</th>
                        <th>Fecha Indicador</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($uf_detalles as $row) : ?>
                        <tr id="<?= $row['id']; ?>">
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['nombreIndicador']; ?></td>
                            <td><?= $row['codigoIndicador']; ?></td>
                            <td><?= $row['unidadMedidaIndicador']; ?></td>
                            <td><?= $row['valorIndicador']; ?></td>
                            <td><?= $row['fechaIndicador']; ?></td>
                            <td>
                                <a data-id="<?php echo $row['id']; ?>" class="btn btn-primary btnEdit">Editar</a>
                                <a data-id="<?php echo $row['id']; ?>" class="btn btn-danger btnDelete">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </div>

        </table>


    </div>





</div>


<?php echo $addModal ?>

<?php echo $updateModal ?>

<?php echo $footer ?>