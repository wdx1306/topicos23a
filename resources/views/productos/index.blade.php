@extends('layouts.app',['activePage' => 'products', 'titlePage' => 'Lista de Usuarios' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
        <form action="{{route('productos.index')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Listado de productos</h4>

                </div>
                <div class="carbody" > 
              <a href="{{route('productos.create')}}" class="btn btn-primary" role="button" aria-pressed="true"> <i class="material-icons"><span class="material-icons-two-tone">
person_add
</span> </i>  Añadir producto</a>
              </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>id</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                         
                            <th>precio de Salida</th>
                            <th>Inventario</th>
                            <th class=>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product -> id}}</td>
                                    <td>{{$product -> barcode}}</td>
                                    <td>{{$product -> name}}</td>
                                    <td>{{$product -> description}}</td>
                                    <td>$ {{$product -> price}}</td>
                                    
                                    <td>{{$product -> inventary_min}} Unidades</td>
                                    <td><a href="{{route('productos.edit', $product->id)}}"class="btn btn-info" role="button" aria-pressed="true">Editar</a>
                                    <a href="{{route('productos.show' , $product->id)}}" class="btn btn-info" role="button" aria-pressed="true">Show</a>
                                    <a href=""class="btn btn-danger" role="button" aria-pressed="true">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>
            </div>

              <!--Footer
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Ceder tus derechos constitucionales</button>
            </div>
                    End footer-->

            </div>
        </form>
     </div>
    </div>
</div>
</div>

@endsection