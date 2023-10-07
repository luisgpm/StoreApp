@if(session("verProd"))
  @php
    $producto = session()->get('producto');
  @endphp
  <form action="{{route('producto.update', $producto)}}" method="POST">
    <div class="modal fade" id="verProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ver Producto</h5>
            </div>
            <div class="modal-body">
                @csrf
                @method('PATCH')
                <div class="form-group">
                  <label for='sku'>Sku</label>
                  <input type="text" id="sku" name='sku' class="form-control" placeholder="H421" disabled value="{{$producto->sku}}">
                </div>
                <div class="form-group">
                  <label for="titulo">titulo</label>
                  <input type="text" class="form-control" name='titulo' id="titulo" disabled placeholder="titulo" value="{{$producto->titulo}}">
                </div>
                <div class="form-group">
                  <label for="cantidad">cantidad</label>
                  <input type="number" class="form-control" name='cantidad' id="cantidad" disabled placeholder="cantidad" value="{{$producto->cantidad}}">
                </div>
                <div class="form-group">
                  <label for="precio">precio</label>
                  <input type="number" class="form-control" id="precio" name="precio" disabled placeholder="precio" value="{{$producto->precio}}">
                </div>
                <div class="form-group">
                  <label for="proveedor">proveedor</label>
                  <input type="text" class="form-control" id="proveedor" name="proveedor" disabled placeholder="proveedor" value="{{$producto->proveedor}}">
                </div>
                <div class="form-group">
                  <label for="created_at">fecha Creacion</label>
                  <input type="text" class="form-control" id="created_at" name="created_at" disabled value="{{$producto->created_at}}">
                </div>
                <div class="form-group">
                  <label for="updated_at">fecha Creacion</label>
                  <input type="text" class="form-control" id="updated_at" name="updated_at" disabled value="{{$producto->updated_at}}">
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
            </div>
          </div>
        </div>
    </div>
  </form> 
@endif