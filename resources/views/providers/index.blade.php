@extends('layouts.app',['activePage' => 'provider', 'titlePage' => 'Lista de Usuarios' ])

@section('content')

<div class="content">
        <div class= "container-fluid">
            <div class ="row">
                 <div class="col-md-12">

            @csrf
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Listado de Proveedores</h4>
                    
                </div>
         <div class="carbody" > 
              <a href="{{route('proveedores.create')}}" class="btn btn-primary" role="button" aria-pressed="true"> <i class="material-icons"><span class="material-icons-two-tone">
person_add
</span> </i>  Añadir Proveedor</a>
              </div>
                </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="text-primary">
                            <th>id</th>
                            <th>nombre</th>
                            <th>Edad</th>
                            <th>Telefono</th>
                            <th >Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($proveedores as $proveedor)
                                <tr>
                                    <td>{{$proveedor -> id}}</td>
                                    <td>{{$proveedor -> name}}</td>
                                    <td>{{$proveedor -> age}}</td>
                                    <td>{{$proveedor -> phone}}</td>
                                    <td><a href="{{route('proveedores.edit', $proveedor->id)}}"class="btn btn-info" role="button" aria-pressed="true">Editar</a>
                                    <a href="{{route('proveedores.show' , $proveedor->id)}}" class="btn btn-info" role="button" aria-pressed="true">Show</a>
                                    <a href=""class="btn btn-danger" role="button" aria-pressed="true">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>    
                </div>
                <div class="card-body">
         {{ $proveedores->links() }}
         </div>
            </div>
           

        </div>
  
</div>

@endsection