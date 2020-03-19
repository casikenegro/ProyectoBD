@extends('layouts.app')
@section('content')
  <form action="/appointment" method="post" name="formulario" id="formulario" autocomplete="off">
    {{csrf_field()}}
    <div class="form-group">
      <label>Cedula paciente </label>
        <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Escribe tu Cedula">
    </div>
    <div class="form-group">
      <label>fecha</label>
<input  name="date" id="date" type="date">    </div>

<?php foreach ($categories as $category): ?>
      <table class="table table-dark">
  <div class="card-header">
   <?php echo e($category->categories); ?>
   </div>

   <thead>
 <tr>
    <th scope="col">nombre Doctor</th>
   <th scope="col">Licencia</th>
      <th scope="col">contratar</th>
    <th scope="col">Registrar</th>

 </tr>
   </thead>
<?php foreach ($doctores as $doctor): ?>
<?php if (($doctor->doctor_category_id==$category->id)): ?>
<tbody>
  <tr>
    <td>  <?php echo e($doctor->name); ?></td>
        <td>  <?php echo e($doctor->license); ?></td>
    <td><input name="license" type="checkbox" value="<?php echo e($doctor->license); ?>" /></td>
    <td>
  {{csrf_field()}}
  <a href="/appointment">
<input type="submit" id="envio" value="Registrar" class="btn btn-primary ">
</a>
  </td>
  </tr>
</tbody>
<?php endif; ?>
<?php endforeach; ?>
<?php endforeach; ?>



</table>
</form>
@endsection
