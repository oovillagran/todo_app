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
    $task = Task::create([
      'description' => request('description'),
    ]);

    //Regresa a la pagina inicial cuando la tarea es creada
    return redirect('/');
    //Pasa la nueva tarea creada al listado general de tareas
    //Mostrar todas las tareas que tenemos

  }
}

// Replace the homepage

// Handle the task submission data 

// Create a task

// Display a list of tasks

// Mark a task as completed

// Divide the tasks into completed and uncompleted section

// Delete a task permanentely
