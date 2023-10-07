@if(session("editUser"))
  @php
    $user = session()->get('user');
  @endphp
  <form action="{{route('user.update', $user)}}" method="POST">
    <div class="modal fade" id="editProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Autorizar Usuario?</h5>
            </div>
            <div class="modal-body">
                @csrf
                @method('PATCH')
                <div class="form-group">
                  <label for='name'>name</label>
                  <input type="text" id="name" name='name' class="form-control" disabled value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label for="email">email</label>
                  <input type="text" class="form-control" name='email' id="email" disabled value="{{$user->email}}">
                </div>
                <div class="form-group">
                  <label for="domicilio">domicilio</label>
                  <input type="text" class="form-control" name='domicilio' id="domicilio" disabled value="{{$user->domicilio}}">
                </div>
                <div class="form-group">
                  <label for="telefono">telefono</label>
                  <input type="number" class="form-control" id="telefono" name="telefono" disabled value="{{$user->telefono}}">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Autorizar</button>
            </div>
          </div>
        </div>
    </div>
  </form> 
@endif