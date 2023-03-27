@extends('layouts.app',['activePage' => 'products', 'titlePage' => 'Usuario Nuevo' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
        <form action="{{route('productos.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
                <div class="card-header card-header-secundary">
                    <h4 class="card-title">Proveedores</h4>
                    <p class="card-category">Ingresa los datos de los proveedores</p>
                </div>
              <div class="card-body">
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Codigo</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="barcode" placeholder="Codigo de barra" autofocus required>
                    </div>
                  </div>

                  

               

                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                    </div>
                  </div>
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Descripcion</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="description" placeholder="Descripcion" required>
                    </div>
                                             
              </div> <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">precio</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="price" placeholder="Precio de entrada" autofocus required>
                    </div>
                  </div>

                  

               

                  
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Inventario</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="inventary_min" placeholder="Cantidad de inventario" required>
                    </div>
                  </div>                              
              </div> 

              <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            <!--End footer-->
            </div>  
            </div>
        </form>
     </div>
    </div>
</div>
</div>

@endsection