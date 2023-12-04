@extends('layouts.app')

@section('content')
<h1>
  Nueva Tarea
</h1>

<form method="POST" action="/tasks">
  <div class="form-group">
    @csrf
    <label for="description">Descripcion de la Tarea</label>
    <input type="text" class="form-control" name="description" style="margin-bottom: 20px;" />
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">
      Crear Tarea
    </button>
  </div>
</form>
@endsection