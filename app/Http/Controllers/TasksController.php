<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
  public function index() {
    //Muestra todas las tareas cuando visitamos la pagina inicial
    $tasks = Task::orderBy('id', 'desc')->get();

    return view('tasks.index', [
      'tasks' => $tasks,
    ]);
  }

  public function create() {
    return view('tasks.create');
  }

  public function store() {
    Task::create([
      'description' => request('description'),
    ]);

    //Regresa a la pagina inicial cuando la tarea es creada
    return redirect('/');
    //Pasa la nueva tarea creada al listado general de tareas
    //Mostrar todas las tareas que tenemos

  }
  
  // Marcar una tarea como completa
  public function update($id) {
    $task = Task::where('id', $id)->first();

    $task->completed_at = now();
    $task->save();

    return redirect('/');
  }
}

// Replace the homepage

// Handle the task submission data 

// Create a task

// Display a list of tasks


// Divide the tasks into completed and uncompleted section

// Delete a task permanentely
