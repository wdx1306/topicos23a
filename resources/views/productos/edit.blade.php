@extends('layouts.app',['activePage' => 'provider', 'titlePage' => 'Usuario Nuevo' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12"> 
          <form action="{{route('productos.update', $producto->id)}}" method="post" class="form-horizontal">
      @csrf
      @method('PUT')
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Productos</h4>
                </div>
              <div class="card-body">
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Codigo</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="barcode" value="{{$producto -> barcode}}" autofocus >
                    </div>
                  </div>

                  

               

                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" value="{{$producto->name}}" >
                    </div>
                  </div>
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Descripcion</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="description" value="{{$producto->description}}" >
                    </div>
                                             
              </div> 
                  

               

                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Precio</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="price" value="{{$producto->price}}" >
                    </div>
                  </div>
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Inventario</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="inventary_min" value="{{$producto->inventary_min}}" >
                    </div>
                  </div>                              
              </div> 

              <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
            <a href="javascript:history.back()" class="btn btn-primary"> Volver Atrás</a>
            <button type="submit" class="btn btn-primary">Actualizar Registro</button>
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