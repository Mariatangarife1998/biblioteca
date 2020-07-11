{{-- este entra por una variable de secion si la variable mensaje esxiste esta se imprime * --}}
@if ($session ("mensaje"))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> mensaje sistema Biblioteca</h4>
    <ul>
        {{-- *vamos a imprimir la variable por ejemplo vamos a 
        imprimir la variable secion si la variable session existe este imprime  --}}
        <li>{{$session ("mensaje")}}</li>  
    </ul>
  </div>
@endif