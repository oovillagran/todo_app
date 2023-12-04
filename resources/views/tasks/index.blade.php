@extends('layouts.app')

@section('content')
  <h1>Lista de Tareas</h1>

  @foreach($tasks as $task)
    <div class="card" style="margin-bottom: 20px;">
      <div class="card-body">
        <p>
          {{ $task->description }}
        </p>
        <a href="#" class="btn btn-success">Completo</a>
      </div>
    </div>
  @endforeach

  
  <div class="d-grid gap-2">
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">Nueva Tarea</a>
  </div>

@endsection