<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('tasks.index', ['tasks' => Task::latest()->get()]);
})->name('tasks.index');

Route::view('/tasks/create', 'tasks.create')->name('tasks.create');

Route::get('/tasks/{id}', function (string $id) {
    return view('tasks.show', ['task' => Task::findOrFail($id)]);
})->name('tasks.show');

Route::get('/tasks/{id}/edit', function (string $id) {
    return view('tasks.edit', ['task' => Task::findOrFail($id)]);
})->name('tasks.edit');

Route::post('/tasks', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => '',
    ]);

    $task = new Task();
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])->with('success', 'Task has been added successfully!');
})->name('tasks.store');

Route::put('/tasks/{id}', function (string $id, Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => '',
    ]);

    $task = Task::findOrFail($id);
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])->with('success', 'Task has been edited successfully!');
})->name('tasks.update');


Route::delete('/tasks/{id}', function (string $id) {
    $task = Task::findOrFail($id);
    $task->delete();

    return redirect()->route('tasks.index')->with('success', 'Task has been deleted successfully!');
})->name('tasks.destroy');
