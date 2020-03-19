
@extends('layouts.app')
@section('content')
<section class="container">
    <h1 class="h2 text-center my-3">Formulario de registro Empleados</h1>
    <form action="/Employe" method="post" name="formulario" id="formulario" autocomplete="off">
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
    <employe>
        <fieldset>
            <legend class="h4 text-center">
                Datos Personales
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
            <label>Categoria</label>
            <select class="form-control" name="categoria_id" id="categoria_id">
              <?php foreach ($categorias as $categoria): ?>
                <option value="{{$categoria->id}}">{{$categoria->categories}} </option>
              <?php endforeach; ?>
            </select>
          </div>
            <div class="form-group">
            <label>Telefono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="telefono">
            </div>
            <div class="form-group">
            <div class="form-group text-center">
              <a href="/Employe">
            <input type="submit" id="envio" value="Registrarse" class="btn btn-primary ">
            </a>

            </div>
        </fieldset>
    </form>
  </section>
</employe>
@endsection
