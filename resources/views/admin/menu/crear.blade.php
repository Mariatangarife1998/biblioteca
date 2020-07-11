@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menús
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
      {{-- //de la siguiente manera se imprime un mensaje// --}}
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Menús</h3>
            </div>
                <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                       @csrf
                    <div class="box-body">
                    @include('admin.menu.form')
                </div>
                <div class="box-footer">
                    {{--  //el siguiente codigo nos sirve para alinear el boton se puede implementar en otros casos//  --}}
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                    @include('includes.boton-form-crear')
                     </div>
                  </div>
                </form>
            </div>
        </div>
   </div>
@endsection  