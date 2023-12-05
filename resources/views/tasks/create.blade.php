@extends('layouts.app')

@section('content')
<h1>
  New Task
</h1>

<form method="POST" action="/tasks">
  <div class="form-group">
    @csrf
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" style="margin-bottom: 20px;" />
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">
      Add Task
    </button>
  </div>

  @if($errors->any())
    <div class="alert alert-danger" role="alert" style="margin-top: 20px;">
      @foreach($errors->all() as $error)
        {{ $error }}
      @endforeach
    </div>
  @endif
</form>
@endsection