<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('tasks.index', ['tasks' => Task::latest()->get()]);
})->name('tasks.index');

Route::view('/tasks/create', 'tasks.create')->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
    return view('tasks.show', ['task' => Task::findOrFail($id)]);
})->name('tasks.show');
