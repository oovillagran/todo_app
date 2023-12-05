@extends('layouts.app')

@section('content')
  <h1>To Do List</h1>

  @foreach($tasks as $task)
    <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px;">
      <div class="card-body d-flex justify-content-between">
        <p class="@if($task->isCompleted()) text-decoration-line-through @endif">
          {{ $task->description }}
          @if($task->isCompleted())
            <span class="badge bg-success" style="margin-left: 10px;">Completed</span>
          @endif
        </p>

        @if(!$task->isCompleted())
          <form action="/tasks/{{ $task->id }}" method="POST">
            @method('PATCH')
            @csrf

            <button class="btn btn-secondary" type="submit"><i class="bi bi-check"></i></button>
          </form>
        @else
          <form action="/tasks/{{ $task->id }}" method="POST">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger" type="submit"><i class="bi bi-x"></i></button>
          </form>
        @endif
      </div>
    </div>
  @endforeach

  <div class="d-grid gap-2">
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
  </div>

@endsection