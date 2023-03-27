@extends('layouts.app',['activePage' => 'users', 'titlePage' => 'Lista de Clientes' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
        <form action="{{route('clientes.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Listado de Clientes</h4>
                    <p class="card-category">Clientes Extorcionados</p>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>id</th>
                            <th>nombre</th>
                            <th>edad</th>
                            <th>Telefono</th>
                            <th class="text-right">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client -> id}}</td>
                                    <td>{{$client -> name}}</td>
                                    <td>{{$client -> age}}</td>
                                    <td>{{$client -> phone}}</td>
                                    <td class="text-right"><button>Borrar</buttom></td>
                                    <td><button>Actualizar</buttom></td>
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