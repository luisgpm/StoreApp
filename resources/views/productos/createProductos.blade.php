<form id="createForm">
  {{csrf_field()}}
  {{method_field('POST')}}
  <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
          </div>
          <div class="modal-body">
              @csrf
              <div class="form-group" id="form-group-sku">
                <label for='sku'>Sku</label>
                <input type="text" id="sku" name='sku' class="form-control" placeholder="H421" pattern="^[A-Z][\d]{3}$">
                <span class="help-block alert-danger"></span>
              </div>
              <div class="form-group" id="form-group-titulo">
                <label for="titulo">titulo</label>
                <input type="text" class="form-control" name='titulo' id="titulo" placeholder="titulo">
                <span class="help-block alert-danger"></span>
              </div>
              <div class="form-group" id="form-group-cantidad">
                <label for="cantidad">cantidad</label>
                <input type="number" class="form-control " name='cantidad' id="cantidad" placeholder="cantidad">
                <span class="help-block alert-danger"></span>
              </div>
              <div class="form-group" id="form-group-precio">
                <label for="precio">precio</label>
                <input type="number" step="any" class="form-control" id="precio" name="precio" placeholder="precio">
                <span class="help-block alert-danger"></span>
              </div>
              <div class="form-group" id="form-group-proveedor">
                <label for="proveedor">proveedor</label>
                <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="proveedor">
                <span class="help-block alert-danger"></span>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
  </div>
</form> 
