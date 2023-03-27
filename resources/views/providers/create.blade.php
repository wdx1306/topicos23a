@extends('layouts.app',['activePage' => 'providers', 'titlePage' => 'Usuario Nuevo' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
        <form action="{{route('proveedores.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Proveedores</h4>
                    <p class="card-category">Ingresa los datos de los proveedores</p>
                </div>
              <div class="card-body">
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre (completo)</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" placeholder="Nombre" autofocus required>
                    </div>
                  </div>

                  

               

                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Edad</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="age" placeholder="Edad" required>
                    </div>
                  </div>
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Telefono</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="phone" placeholder="Numero de telefono" required>
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