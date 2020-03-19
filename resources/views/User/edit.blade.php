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

      <h1 class="h2 text-center my-3">Formulario de Edicion Doctores</h1>
      <form action="/Users/{{$user->id}}" method="POST">
        {{csrf_field()}}
        @method('PUT')
          <fieldset>
              <legend class="h4 text-center">
                  Datos Personales
              </legend>
              <div class="form-group">
              <label>Nombre</label>
                    <input type="text" id="nombre" value="{{$user->name}}"
                     name="nombre" class="form-control" placeholder="Escribe tu nombre"
              </div>
              <div class="form-group">
              <label>Apellido</label>
              <input type="text" id="apellido" value="{{$user->surname}}" name="apellido" class="form-control" placeholder="Escribe tu apellido">
              </div>
              <div class="form-group">
              <label>Cedula</label>
              <input type="text" id="cedula"  value="{{$user->cedula}}" name="cedula" class="form-control" placeholder="Escribe tu Cedula">
              </div>
              <div class="form-group">
              <label>Telefono</label>
              <input type="text" id="telefono" name="telefono" value="{{$user->Phone}}" class="form-control" placeholder="telefono">
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
