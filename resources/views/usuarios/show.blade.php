@extends('layouts.app',['activePage' => 'users', 'titlePage' => 'Usuario Nuevo' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
        <form action="{{route('usuarios.update', $user->id)}}" method="post" class="form-horizontal">
            @csrf
   
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Usuario</h4>
                    <p class="card-category">Ingresa tus datos (seran vendidos)</p>
                </div>
              <div class="card-body">
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre (completo)</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" value="{{$user->name}}" autofocus disabled>
                    </div>
                  </div>

                  

               

                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Correo</label>
                  <div class="col-sm-7">
                      <input type="email" class="form-control" name="email" value="{{$user->email}}" disabled>
                    </div>
                  </div>
                                              
              </div>

              <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
            <a href="javascript:history.back()" class="btn btn-primary"> Volver Atrás</a>
            </div>
            <!--End footer-->

            </div>
        </form>
     </div>
    </div>
</div>
</div>

@endsection