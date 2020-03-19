@extends('layouts.app')
@section('content')
<?php foreach ($citas as $cita): ?>
  <table class="table table-dark">
    <div class="card-header">
  <thead>
    <tr>
      <th scope="col">Paciente</th>
      <th scope="col">Cedula</th>
      <th scope="col">Doctor</th>
      <th scope="col">license</th>
      <th scope="col">Fecha</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
    {{csrf_field()}}

  </thead>
</div>
  <?php foreach ($doctors as  $doctor): ?>

          <?php if ($doctor->id==$cita->doctor_id): ?>

            <?php foreach ($users as $user): ?>

                <?php if ($user->id==$cita->users_id): ?>

                  <tbody>

                    <tr>

                      <td><?php echo e($user->name) ?></td>
                      <td>  <?php echo e($user->cedula); ?></td>
                      <td><?php echo e($doctor->name); ?></td>

                      <td><?php echo e($doctor->license); ?></td>

                      <td><?php echo e($cita->date_query); ?></td>

                      <td>

                        {{csrf_field()}}

                        <a class="btn btn-primary" href="#" role="button">edit</a>

                      </td>

                      <td>

                        <form action="/appointment/{{$cita->id}}" method="POST">

                            {{csrf_field()}}

                            @method('DELETE')

                            <input type="submit" id="envio" value="Eliminar" class="btn btn-danger ">

                        </form>

                    </td>

                  </tr>

                </tbody>

              <?php endif; ?>

            <?php endforeach; ?>

          <?php endif; ?>
        <?php endforeach; ?>

        </table>
  <?php endforeach; ?>



@endsection
