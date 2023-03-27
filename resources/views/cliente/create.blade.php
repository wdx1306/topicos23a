@extends('layouts.app',['activePage' => 'users', 'titlePage' => 'Cliente Nuevo' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
        <form action="{{route('clientes.store')}}" method="POST" class="form-horizontal">
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
                  <label for="ap_paterno" class="col-sm-2 col-form-label">Apellido (paterno)</label>
                  <div class="col-sm-7">
                      <input type="text" id="ap_paterno" class="form-control" name="ap_paterno" placeholder="Apellido paterno" autofocus required>
                    </div>
                  </div>

                  <div class="row">
                  <label for="ap_materno" class="col-sm-2 col-form-label">Apellido (Materno)</label>
                  <div class="col-sm-7">
                      <input type="text" id="ap_materno" class="form-control" name="ap_materno" placeholder="Apellido materno" autofocus required>
                    </div>
                  </div>

                  <div class="row">
                  <label for="tipe" class="col-sm-2 col-form-label">Tipo (de usuario)</label>
                  <div class="col-sm-7">
                      <input type="text" id="tipo" class="form-control" name="tipo" placeholder="Tipo de usuario" autofocus required>
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
              <button type="submit" class="btn btn-primary">Ceder tus derechos constitucionales</button>
            </div>
            <!--End footer-->

            </div>
        </form>
     </div>
    </div>
</div>
</div>

@endsection