@extends('layouts.app')

@section('content')
  <h1>Lista de Tareas</h1>

  @foreach($tasks as $task)
    <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px;">
      <div class="card-body">
        <p>
          {{ $task->description }}
          @if($task->isCompleted())
            <span class="badge bg-success">Completo</span>
          @endif
        </p>

        @if(!$task->isCompleted())
          <form action="/tasks/{{ $task->id }}" method="POST">
            @method('PATCH')
            @csrf

            <button class="btn btn-secondary" type="submit">Completo</button>
          </form>
        @else
          <form action="/tasks/{{ $task->id }}" method="POST">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
        @endif
      </div>
    </div>
  @endforeach

  
  <div class="d-grid gap-2">
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">Nueva Tarea</a>
  </div>

@endsection