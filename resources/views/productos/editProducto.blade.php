  <form id="editForm">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <div class="modal fade" id="editProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">editar Producto</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <input type="number" id="idEdit" name='id' hidden class="form-control">
                </div>
                <div class="form-group" id="form-group-sku">
                  <label for='sku'>Sku</label>
                  <input type="text" id="skuEdit" name='sku' pattern="^[A-Z][\d]{3}$" class="form-control" placeholder="H421">
                   <span class="help-block alert-danger"></span>
                </div>
                <div class="form-group" id="form-group-titulo">
                  <label for="titulo">titulo</label>
                  <input type="text" class="form-control" name='titulo' id="tituloEdit" placeholder="titulo">
                  <span class="help-block alert-danger"></span>
                </div>
                <div class="form-group" id="form-group-cantidad">
                  <label for="cantidad">cantidad</label>
                  <input type="number" class="form-control" name='cantidad' min="0" id="cantidadEdit" placeholder="cantidad" >
                  <span class="help-block alert-danger"></span>
                </div>
                <div class="form-group" id="form-group-precio">
                  <label for="precio">precio</label>
                  <input type="number" class="form-control" id="precioEdit" min="0" name="precio" placeholder="precio">
                  <span class="help-block alert-danger"></span>
                </div>
                <div class="form-group" id="form-group-proveedor">
                  <label for="proveedor">proveedor</label>
                  <input type="text" class="form-control" id="proveedorEdit" name="proveedor" placeholder="proveedor">
                  <span class="help-block alert-danger"></span>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">cerrar</button>
              <button type="submit" class="btn btn-primary">guardar cambios</button>
            </div>
          </div>
        </div>
    </div>
  </form> 