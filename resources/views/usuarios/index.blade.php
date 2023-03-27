@extends('layouts.app',['activePage' => 'users', 'titlePage' => 'Lista de Usuarios' ])

@section('content')

<div class="content">
        <div class= "container-fluid">
            <div class ="row">
                 <div class="col-md-12">

            @csrf
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Listado de Usuarios</h4>
                    
                </div>
         <div class="carbody" > 
              <a href="{{route('usuarios.create')}}" class="btn btn-primary" role="button" aria-pressed="true"> <i class="material-icons"><span class="material-icons-two-tone">
person_add
</span> </i>  Añadir Usuario</a>
              </div>
                </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" >
                        <thead class="text-primary">
                            <th>id</th>
                            <th>nombre</th>
                            <th>Correo</th>
                            <th >Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user -> id}}</td>
                                    <td>{{$user -> name}}</td>
                                    <td>{{$user -> email}}</td>
                                    <td><a href="{{route('usuarios.edit', $user->id)}}"class="btn btn-secundary" role="button" aria-pressed="true">Editar</a>
                                    <a href="{{route('usuarios.show' , $user->id)}}" class="btn btn-info" role="button" aria-pressed="true">Show</a>
                                    
                                    <form action="{{route('usuarios.delete', $user->id)}}" method="post" style="display:inline-block" onsubmit="return confim(¿Estas Seguro?">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>    
                </div>
                <div class="card-body">
         {{ $users->links() }}
         </div>
            </div>
           

        </div>
  
</div>

@endsection