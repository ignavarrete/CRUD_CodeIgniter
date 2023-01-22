<!-- Modal Actualizar -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 " id="ModalLabel">Actualizar información</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="actualizarInfo" name="actualizarInfo" method="post" action="">
                <div class="modal-body">
                    <input type="hidden" name="hiddenInfoId" id="hiddenInfoId"/>
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
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>