@extends('layouts.app',['activePage' => 'provider', 'titlePage' => 'Usuario Nuevo' ])

@section('content')

<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
            @csrf
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Productos</h4>
                </div>
              <div class="card-body">
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Codigo</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="barcode" value="{{$producto -> barcode}}" autofocus Disabled>
                    </div>
                  </div>

                  

               

                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="name" value="{{$producto->name}}" disabled>
                    </div>
                  </div>
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Descripcion</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="description" value="{{$producto->description}}" disabled>
                    </div>
                                             
              </div> 
                  

               

                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Precio</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="price" value="{{$producto->name}}" disabled>
                    </div>
                  </div>
                  <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Inventario</label>
                  <div class="col-sm-7">
                      <input type="text" class="form-control" name="inventary_min" value="{{$producto->inventary_min}}" disabled>
                    </div>
                  </div>                              
              </div> 

              <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
            <a href="javascript:history.back()" class="btn btn-primary"> Volver Atrás</a>
             </div>
            <!--End footer-->
            </div>  
            </div>
     </div>
    </div>
</div>
</div>

@endsection