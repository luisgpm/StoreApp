@if(session("editProd"))
  @php
    $producto = session()->get('producto');
  @endphp
  <form action="{{route('producto.update', $producto)}}" method="POST">
    <div class="modal fade" id="editProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">editar Producto</h5>
            </div>
            <div class="modal-body">
                @csrf
                @method('PATCH')
                <div class="form-group">
                  <label for='sku'>Sku</label>
                  <input type="text" id="sku" name='sku' class="form-control" placeholder="H421" value="{{ old('sku', $producto->sku)}}">
                </div>
                <div class="form-group">
                  <label for="titulo">titulo</label>
                  <input type="text" class="form-control" name='titulo' id="titulo" placeholder="titulo" value="{{ old('titulo', $producto->titulo)}}">
                </div>
                <div class="form-group">
                  <label for="cantidad">cantidad</label>
                  <input type="number" class="form-control" name='cantidad' id="cantidad" placeholder="cantidad" value="{{ old('cantidad', $producto->cantidad)}}">
                </div>
                <div class="form-group">
                  <label for="precio">precio</label>
                  <input type="number" class="form-control" id="precio" name="precio" placeholder="precio" value="{{ old('precio', $producto->precio)}}">
                </div>
                <div class="form-group">
                  <label for="proveedor">proveedor</label>
                  <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="proveedor" value="{{ old('proveedor ', $producto->proveedor)}}">
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
@endif