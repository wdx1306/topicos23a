@extends('layouts.app',['activePage' => 'users', 'titlePage' => 'Usuario Nuevo' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
        <form action="{{route('usuarios.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Usuario</h4>
                    <p class="card-category">Ingresa tus datos (seran vendidos)</p>
                </div>
              <div class="card-body">
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre (completo)</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" placeholder="Nombre" autofocus required>
                    </div>
                  </div>

                  

               

                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Correo</label>
                  <div class="col-sm-7">
                      <input type="email" class="form-control" name="email" placeholder="Correo" required>
                    </div>
                  </div>
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Contraseña</label>
                  <div class="col-sm-7">
                      <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>
                  </div>                              
              </div>

              <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            <!--End footer-->

            </div>
        </form>
     </div>
    </div>
</div>
</div>

@endsection