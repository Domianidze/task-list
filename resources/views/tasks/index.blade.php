@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<nav class="mb-4">
  <a href="{{ route('tasks.create') }}" class="link">Add task</a>
</nav>

@forelse ($tasks as $task)
<div>
  <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through'=> $task->completed])>{{ $task->title }}</a>
</div>
@empty
<div>No tasks yet</div>
@endforelse

@if ($tasks->count())
<nav class="mt-4">
  {{ $tasks->links() }}
</nav>
@endif
@endsection