@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card mb-5">
                <div class="card-header d-flex justify-content-between align-items-center ">
                    <h3 class="">Productos</h3>
                    @if(Auth::user()->rol== 1)
                        <a type="button" class="btn btn-primary  create_btn"  href="#"> Agregar productos</a>
                    @endif
                </div>
                @error('sku')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col" class="float-right pr-5">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <td hidden>{{$producto->id}}</td>
                            <td hidden> {{$producto->sku}}</td>
                            <td>{{$producto->titulo}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>{{$producto->precio}}</td>
                            <td hidden>{{$producto->proveedor}}</td>
                            <td hidden>{{$producto->created_at}}</td>
                            <td hidden>{{$producto->updated_at}}</td>
                            <td>
                                @if(Auth::user()->rol== 1)
                                    <a type="button" class="btn btn-outline-dark float-right m-1 editbtn"  href="#">
                                         <i class="fa-solid fa-pen-to-square fa-xl"></i>
                                    </a>
                                    <form method="POST" action="{{route('producto.destroy', $producto)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger float-right m-1">
                                            <i class="fa-solid fa-trash fa-xl"></i>
                                        </button>
                                    </form>
                                    <a type="button" class="btn btn-outline-success float-right m-1 viewbtn" href="#" >
                                        <i class="fa-solid fa-expand fa-xl"></i>    
                                    </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if(Auth::user()->rol== 1)
            <div class="card">
                <div class="card-header  d-flex justify-content-between align-items-center">
                    <h3>Usuarios</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Domicilio</th>
                            <th scope="col">Rol</th>
                            <th scope="col" class="float-right pr-5">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{$user->name}}</th>
                                <td>{{$user->email}}</td>
                                <td>{{$user->domicilio}}</td>
                                @if(is_null($user->rol))
                                    <td class="text-danger">Sin autorizar</td>
                                @else
                                    <td>Vendedor</td>
                                @endif
                                <td>
                                    @if(is_null($user->rol))
                                        <a type="button" class="btn btn-outline-dark float-right m-1"  href="{{route('user.edit', $user)}}">
                                             <i class="fa-solid fa-pen-to-square fa-xl"></i>
                                        </a>
                                    @endif
                                    <form method="POST" action="{{route('user.destroy', $user)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger float-right m-1">
                                            <i class="fa-solid fa-trash fa-xl"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
@include('productos.createProductos')
@include('productos.editProducto')
@include('productos.verProducto')
@include('users.userEdit')
@endsection
