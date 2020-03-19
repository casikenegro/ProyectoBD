@extends('layouts.app')
@section('content')
            <section class="container">
                <h1 class="h2 text-center my-3">Formulario de registro Estudiante</h1>
                <form action="/carrera" method="post" name="formulario" id="formulario" autocomplete="off">
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
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="nombre">
                        </div>
                        <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Escribe una descripcion">
                        </div>
                        <div class="form-group text-center">
                          <a href="/carrera">
                        <input type="submit" id="envio" value="Registrarse" class="btn btn-primary ">
                        </a>
                        </div>
                    </fieldset>
                </form>
              </section>
          </Estudiante>
@endsection
