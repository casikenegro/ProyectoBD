@extends('layouts.app')
@section('content')
<section class="container">
  <?php if (count($errors) > 0): ?>
    <div class="alert alert-danger">
      <ul>
  <?php foreach ($errors->all() as $error): ?>
  <li><?php echo e($error); ?></li>
      <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

      <h1 class="h2 text-center my-3">Formulario de Edicion carreras</h1>
      <form action="/carrera/{{$carrera->id}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
          <fieldset>
              <legend class="h4 text-center">
                  Datos de carrera
              </legend>
              <div class="form-group">
              <label>Nombre</label>
              <input type="text" id="nombre" value="{{$carrera->nombre}}" name="nombre" class="form-control" placeholder="Escribe tu nombre">
              </div>
              <div class="form-group">
              <label>Descripcion</label>
              <input type="text" id="descripcion"  value="{{$carrera->descripcion}}" name="descripcion" class="form-control" placeholder="Descripcion">
              </div>
              <div class="form-group">
              <div class="form-group text-center">
              <input type="submit" id="envio" value="Acutalizar" class="btn btn-primary ">
              </a>
              </div>
          </fieldset>
      </form>
    </section>

@endsection
