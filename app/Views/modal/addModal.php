<!-- Modal Agregar-->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 " id="ModalLabel">Agregar un nuevo registro</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="agregarInfo" name="agregarInfo" method="post" action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre indicador</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre ej: Dolar">
                    </div>
                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese Código ej: Dolar">
                    </div>
                    <div class="form-group">
                        <label for="unidad">Unidad de medida</label>
                        <input type="text" class="form-control" id="unidad" name="unidad" placeholder="Ingrese Unidad ej: Pesos">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="number" min="0" class="form-control" id="valor" name="valor" placeholder="Ingrese Valor ej: 720.42">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Ingrese Fecha ej: 2023-01-01">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>