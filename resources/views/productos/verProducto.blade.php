<form action="#" >
  <div class="modal fade" id="verProductoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ver Producto</h5>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label for='sku'>Sku</label>
                <input type="text" id="ver-sku" name='sku' class="form-control" placeholder="H421" disabled >
              </div>
              <div class="form-group">
                <label for="titulo">titulo</label>
                <input type="text" class="form-control" name='titulo' id="ver-titulo" disabled placeholder="titulo">
              </div>
              <div class="form-group">
                <label for="cantidad">cantidad</label>
                <input type="number" class="form-control" name='cantidad' id="ver-cantidad" disabled placeholder="cantidad">
              </div>
              <div class="form-group">
                <label for="precio">precio</label>
                <input type="number" class="form-control" id="ver-precio" name="precio" disabled placeholder="precio">
              </div>
              <div class="form-group">
                <label for="proveedor">proveedor</label>
                <input type="text" class="form-control" id="ver-proveedor" name="proveedor" disabled placeholder="proveedor">
              </div>
              <div class="form-group">
                <label for="created_at">fecha Creacion</label>
                <input type="text" class="form-control" id="ver-created_at" name="created_at" disabled>
              </div>
              <div class="form-group">
                <label for="updated_at">fecha Creacion</label>
                <input type="text" class="form-control" id="ver-updated_at" name="updated_at" disabled>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
          </div>
        </div>
      </div>
  </div>
</form> 