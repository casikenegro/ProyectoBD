@extends('layouts.app')
@section('content')
  {{csrf_field()}}

        <table class="table table-dark">
    <div class="card-header">
     </div>

     <thead>
   <tr>
     <th scope="col">Nombre</th>
     <th scope="col">Correo</th>
     <th scope="col">Telefono</th>
     <th scope="col">Dirreccion</th>

      <th scope="col">Editar</th>
     <th scope="col">Eliminar</th>
   </tr>
     </thead>
<?php if (isset($empresas)): ?>
<?php foreach ($empresas as $empresa): ?>
  <tbody>
    <tr>
      <td>  <?php echo e($empresa->nombre); ?></td>
      <td><?php echo e($empresa->apellido); ?></td>
      <td><?php echo e($empresa->cedula); ?></td>
      <td><?php echo e($empresa->correo); ?></td>
      <td><?php echo e($empresa->telefono); ?></td>

      <td>
    {{csrf_field()}}
      <a class="btn btn-primary" href="/empresa/{{$empresa->id}}/edit" role="button">edit</a>
    </td>
    <td>
      <form action="/empresa/{{$empresa->id}}" method="POST">
        {{csrf_field()}}
        @method('DELETE')
      <input type="submit" id="envio" value="Eliminar" class="btn btn-danger ">
  </form>
  </td>
    </tr>
</tbody>
<?php endforeach; ?>
<?php endif; ?>
</table>

@endsection
