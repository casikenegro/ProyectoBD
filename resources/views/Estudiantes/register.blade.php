@extends('layouts.app')
@section('content')
            <section class="container">
                <h1 class="h2 text-center my-3">Formulario de registro Estudiante</h1>
                <form action="/estudiante" method="post" name="formulario" id="formulario" autocomplete="off">
                  {{csrf_field()}}
                  <?php if (count($errors) > 0): ?>
                    <div class="alert alert-danger">
                      <ul>
                  <?php foreach ($errors->all() as $error): ?>
                  <li><?php echo e($error); ?></li>
                      <?php endforeach; ?>
                      </ul>
                    </div>
                  <?php endif; ?>
                  <Estudiante>
                    <fieldset>
                        <legend class="h4 text-center">
                             Registrar Datos Personales
                        </legend>
                        <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escribe tu nombre">
                        </div>
                        <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Escribe tu apellido">
                        </div>
                        <div class="form-group">
                        <label>Cedula</label>
                        <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Escribe tu Cedula">
                        </div>
                        <div class="form-group">
                        <label>Correo</label>
                        <input type="text" id="correo" name="correo" class="form-control" placeholder="correo">
                        </div>
                        <div class="form-group">
                        <label>Carrera</label>
                        <select class="form-control" name="carrera_id" id="carrera_id">
                        <?php if(isset($carreras)): ?>
                          <?php foreach ($carreras as $carrera): ?>
                            <option value="{{$carrera->id}}">{{$carrera->nombre}} </option>
                          <?php endforeach; ?>
                        </select>
                        <?php endif; ?>
                      </div>
                        <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="telefono">
                        </div>
                       <div class="form-group">
                        <label>Fecha de ingreso</label>
                        <input type="date" id="ingreso_estudiante" name="ingreso_estudiante" class="form-control" placeholder="ingreso estudiante">
                        </div>
                        <div class="form-group">
                        <label>Periodo</label>
                        <input type="text" id="periodo_ingreso" name="periodo_ingreso" class="form-control" placeholder="periodo ingreso">
                        </div>
                        <div class="form-group">
                        <div class="form-group text-center">
                          <a href="/estudiante">
                        <input type="submit" id="envio" value="Registrarse" class="btn btn-primary ">
                        </a>
                        </div>
                    </fieldset>
                </form>
              </section>
          </Estudiante>
@endsection
