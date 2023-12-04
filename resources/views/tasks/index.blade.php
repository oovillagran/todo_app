@extends('layouts.app')

@section('content')
  <h1>Lista de Tareas</h1>

  @foreach($tasks as $task)
    <div class="card" style="margin-bottom: 20px;">
      <div class="card-body">
        <p>
          {{ $task->description }}
          @if($task->isCompleted())
            <span class="badge bg-success">Completo</span>
          @endif
        </p>
        <form action="/tasks/{{ $task->id }}" method="POST">
          @method('PATCH')
          @csrf

          @if(!$task->isCompleted())
            <button class="btn btn-success" type="submit">Completo</button>
          @endif
        </form>
      </div>
    </div>
  @endforeach

  
  <div class="d-grid gap-2">
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">Nueva Tarea</a>
  </div>

@endsection