@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
<div class= "container-fluid">
    <div class ="row">
        <div class="col-md-12">
<div class="card-header card-header-primary">
                    
<h3><b>Bienvenido</b> {{ auth()->user()->name }} </h3>
</div>
</div>
</div>
</div>
@endsection


